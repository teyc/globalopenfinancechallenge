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
            <text style="Container__Title">Once off only - Share your banking data with Better Grip</text>
            <view style="Images">
                <image style="Image" source="/assets/nabLogo.png"
                   href="https://api.nab.useinfinite.io/authorize?client_id=MTpW77HzzKMg_g76zssZd6rv0eOdYK5dfVR7eB0ysE4=&response_type=code id_token&redirect_uri=https://pingpongpay.xpx.com.au/monthly.php&scope=openid profile bank:accounts.basic:read bank:transactions:read bank:accounts.detail:read&request=openid profile bank:accounts.basic:read bank:transactions:read bank:accounts.detail:read" 
                   action="deep-link"  />
                <image style="Image" source="/assets/itauLogo.png"
                   href="open-banking-02.php" />
                <image style="Image" source="/assets/cibcLogoV2.png" />
                <image style="Image" source="/assets/natwestLogo.png" />
            </view>
            <text style="Button Link" action="reload" href="/stats_basic.php">Close</text>
        </view>
    </body>
  </screen>
</doc>