<doc xmlns="https://hyperview.org/hyperview">
  <screen id="guestScreen">
    <styles>
      <?php include("styles.css") ?>
    </styles>
    <body style="Body" safe-area="true">
      <header style="Header">
        <text style="Header__Title">Better Grip</text>
      </header>
      <view style="Container">
        <text style="Container__Title">Better Grip</text>
        <text>Help gamblers betters manage their gambling</text>
        <view style="Button">
          <behavior trigger="press" href="/open-banking-01.php" target="new" />
          <text style="Link">Try a demo - no account required.</text>
          <text style="Link">All your data remains private to you.</text>
        </view>
        <text style="Link" href="https://api.nab.useinfinite.io/authorize?client_id=NytL5R9xGTvPSSnGr2__XZPoCMZqxCRuRXGp5_hq5u8=&response_type=code id_token&redirect_uri=https://8ed6b4dc-5b16-44ff-b629-b88da87e4458.example.org/redirect&scope=openid profile bank:accounts.basic:read bank:transactions:read bank:accounts.detail:read&request=openid profile bank:accounts.basic:read bank:transactions:read bank:accounts.detail:read" 
        action="deep-link">Sign In</text>
        <text>This is a demonstration of Open Banking technology
          applied to help mitigate the worst effects of gambling</text>
        <text style="Button Link" href="/monthly.php">Monthly Spend</text>
      </view>
      <view
        href="#"
        action="reload">
        <text style="Button Item__Reload">Reload (dev mode)</text>
      </view>
    </body>
  </screen>
  <screen id="loadingScreen">
    <styles>
      <style
        id="Header"
        alignItems="center"
        backgroundColor="white"
        borderBottomColor="#eee"
        borderBottomWidth="1"
        flexDirection="row"
        paddingLeft="24"
        paddingRight="24"
        paddingBottom="16"
      />
      <style
        id="Header__Back"
        color="blue"
        fontSize="16"
        fontWeight="600"
        paddingRight="16"
      />
      <style id="Header__Title" color="black" fontSize="24" fontWeight="600" />
      <style id="Body" backgroundColor="white" flex="1" />
    </styles>
    <body style="Body" safe-area="true">
      <header style="Header">
        <text action="back" href="#" style="Header__Back">Back</text>
      </header>
    </body>
  </screen>
</doc>