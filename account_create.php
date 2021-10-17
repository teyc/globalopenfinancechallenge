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
        <text>Based on the Open Banking Data, you are</text>
        <text>Seong Gi-hun</text>
        <text style="Button Link">Yes, that is me. Create my account</text>
        <text style="Button Link" href="/index.php" action="navigate">Back to home</text>
      </view>
      <view
        href="#"
        action="reload">
        <text style="Button Item__Reload">Reload (dev mode)</text>
      </view>
    </body>
  </screen>
</doc>