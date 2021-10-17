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
        <text style="Container__Title" href="/mthorpe/index.xml">Better Grip</text>
        <text>Help gamblers betters manage their gambling</text>
        <view style="Button">
          <behavior trigger="press" href="/open-banking-01.php" target="new" />
          <text style="Link">Try a demo - no account required.</text>
          <text style="Link">All your data remains private to you.</text>
        </view>
        <text>This is a demonstration of Open Banking technology
          applied to help mitigate the worst effects of gambling</text>
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