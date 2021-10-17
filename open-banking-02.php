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
          <behavior trigger="on-event" event-name="on-consent" action="toggle" target="login_container" />
          <behavior trigger="on-event" event-name="on-consent" action="toggle" target="consent_container" />
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
            <view action="dispatch-event" event-name="on-consent">
              <text style="Button Link">Login</text>
            </view>
            <text style="Button Link" action="close">Cancel</text>
          </form>
          <form id="consent_container" style="Container" hide="true">
            <image source="/assets/nabLogo.png" style="Image" />
            <text style="Container__Title">Open Banking Data Sharing Consent (Faked)</text>
            <text>
              <text style="Bold">Better Grip </text>
              <text> would like to access:</text>
            </text>
            <text>- your bank transaction details</text>
            <text style="Button Link" action="navigate" href="/stats_basic.php">Agree</text>
            <text style="Button Link" action="close">Cancel</text>
          </form>
    </body>
  </view>

  </screen>
</doc>