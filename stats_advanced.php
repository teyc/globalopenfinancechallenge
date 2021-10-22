<?php
 include($_SERVER['DOCUMENT_ROOT'] . '/web/db.php');
 include($_SERVER['DOCUMENT_ROOT'] . '/web/api.php');
 $_SESSION["USERID"] = "user1";
 $monthly = db_load('monthly');
 $duckTxns = db_load('eelephant');

$monthly = array();
// Adds total winnings and spent on gambling
foreach ($duckTxns->data->transactions as $key => $value) {
    $month = substr($value->postingDateTime, 0, 7);
    $winSpend = isset($monthly[$month]) ? $monthly[$month] : array('win'=>0.00, 'spend'=>0.00);
    $win = $winSpend['win'];
    $spend = $winSpend['spend'];
    if(intval($value->merchantCategoryCode) == 7995)
      if(floatval($value->amount) > 0) {
        $win = $win + floatval($value->amount);
      } else if (floatval($value->amount) < 0) {
        $spend += floatval($value->amount);
      }
    $monthly[$month] = array('win' => $win, 'spend' => $spend);
}

$labelsAttr = "[&quot;" . implode("&quot;,&quot; ", array_keys($monthly)) . "&quot;]"; 
$chartdataAttr = "[". implode(",", array_map(function($v) { 
  return "[" . - $v['spend'] . "," . - $v['win'] . "]"; }, $monthly)) . "]";

?>
<doc xmlns="https://hyperview.org/hyperview" xmlns:ppp="https://pingpongpay.xpx.com.au">
  <screen id="guestScreen">
    <styles>
      <?php include("styles.css") ?>
    </styles>
    <body style="Body" safe-area="true" scroll="true">
      <header style="Header">
        <text style="Header__Title">Better Grip</text>
      </header>
      <view style="Container">
        <text style="Container__Title">Monthly Overview</text>
        <!-- <text>Spent on gambling: <?= abs($spend)?></text>
        <text>Total winnings: <?= $win?></text> -->
        <?php foreach ($monthly as $month => $values): ?>
          <?php
          $spend = $values['spend'];
          $win   = $values['win'];
          ?>
          <text><?= $month?></text> <text> <?php echo("Spent: $$spend")?> <?php echo ("Won: $$win") ?></text><text></text>
        <?php endforeach; ?>
        <ppp:StackedBarChart 
          title="Monthly spend vs Winnings"
          labels="<?= $labelsAttr ?>"
          legend="[]"
          bar-colors="[&quot;#ff3333aa&quot;, &quot;#00ff00bb&quot; ]"
          chartdata="<?= $chartdataAttr ?>" />
        
        <?php endforeach;?> -->
      </view>
      <view
        href="#"
        action="reload">
        <text style="Button Item__Reload">Reload (dev mode)</text>
      </view>
    </body>
  </screen>
 
</doc>
</pre>