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
      <style id="TextInput"
        fontSize="24"
        margin="12"
      />
      <style fontFamily="HKGrotesk-Bold"
           fontSize="16"
           id="Bold"
           margin="24" />
    </styles>
    <body style="Body" safe-area="true">
        <header style="Header">
            <text style="Header__Title">NAB</text>
        </header>
        <view>
          <form id="login_container" style="Container">
            <image source="/assets/nabLogo.png" style="Image" />
            <text style="Container__Title">Faked</text>
            <text-field
              style="TextInput"
              name="accountNumber"
              auto-focus="false"
              placeholder="account number"
              keyboard-type="number-pad" />
            <text-field
              style="TextInput"
              name="password"
              placeholder="password"
              secure-text="true" />
            <view action="reload" href="/open-banking-03.php">
              <text style="Button Link">Login</text>
            </view>
            <text style="Button Link" action="close">Cancel</text>
          </form>
    </body>
  </view>

  </screen>
</doc>