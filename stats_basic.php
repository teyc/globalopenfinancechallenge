<?php
 include($_SERVER['DOCUMENT_ROOT'] . '/web/db.php');
 include($_SERVER['DOCUMENT_ROOT'] . '/web/api.php');
 $_SESSION["USERID"] = "user1";
 $monthly = db_load('monthly');
 //$gamblingTxns = db_load('dduck');
 //$gamblingTxns = db_load('eelephant');
$gamblingTxns = db_load('eelephant');
$win = 0.00;
$spend = 0.00;
// Adds total winnings and spent on gambling
foreach ($gamblingTxns->data->transactions as $key => $value) {
    if(intval($value->merchantCategoryCode) == 7995)
      if(floatval($value->amount) > 0) {
        $win = $win + floatval($value->amount);
      } else if (floatval($value->amount) < 0) {
        $spend += floatval($value->amount);
      }
}
$net = $win + $spend;
?>

<doc xmlns="https://hyperview.org/hyperview">
  <screen>
    <styles>
      <?php include("styles.css") ?>
      <style id="Images"
          alignItems="flex-start"
          flexDirection="row" />
      <style id="Image"
        flex="1"
        margin="12"
        width="40"
        height="80"
        maxHeight="80"
      />
      <style id="Main"
        backgroundColor="#F8F8FF"
      />
      <style id="accountLink"
        color="blue"
      />
      <style id="stats" 
        textAlign="center"
      />
      <style id="Content" marginRight="12" textAlign="center" color="#2F4F4F" fontSize="18" fontWeight="normal" />
      <style id="Submit" color="#4778FF" marginRight="12" marginTop="16" fontSize="16" lineHeight="24" fontFamily="HKGrotesk-Bold" fontWeight="bold" />
      <style id="Large" fontSize="24" fontWeight="bold"/>
    </styles>
    <body style="Body" safe-area="true">
      <header style="Header">
          <text style="Header__Title">Better Grip</text>
      </header>
      <view style="Main">
        <view style="Container">
          <view style="Content">
            <text style="Content">In the last <text style="Large">365</text> days</text>
            <text style="Content">You have spent $<?= number_format(abs($spend), 2)?> on gambling</text>
            <text style="Content">After taking into account of your winnings of $<?= number_format($win, 2)?>,</text> 
            <text style="Content">You have a net loss of $<?= number_format(abs($net), 2)?> after <text style="Large">365</text> days</text>
            <text style="Content">For a more detailed view, you can <text href="account_create.php" style="accountLink">Create an account</text></text>
          </view>
          <text hide="true" style="Button Link" href="/monthly.php">Monthly Spend</text>
          <text style="Submit" href="/app.php" action="navigate">Back to Home screen</text>
        </view>
      </view>
      <view
        href="#"
        action="reload">
        <text style="Button Item__Reload">Reload (dev mode)</text>
      </view>
    </body>
  </screen>
</doc>