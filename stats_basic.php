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
    </styles>
    <body style="Body" safe-area="true">
      <header style="Header">
          <text style="Header__Title">Better Grip</text>
      </header>
      <view style="Container">
         <text>In the last 90 days</text>
         <text>You have spent $140 on gambling</text>
         <text>After taking into account of your winnings of $93,</text>
         <text>You have a net loss of $47 after 90 days</text>
         <text>For a more detailed view, you can
            <text href="account_create.php" style="Button Link">
            &#8200;Create an account
            </text>
         </text>
         <text style="Button Link" href="/index.php" action="navigate">Back to Home screen</text>
      </view>
      <view
        href="#"
        action="reload">
        <text style="Button Item__Reload">Reload (dev mode)</text>
      </view>
    </body>
  </screen>
</doc>