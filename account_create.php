<doc xmlns="https://hyperview.org/hyperview">
  <screen>
    <styles>
      <?php include("styles.css") ?>
    </styles>
    <body style="Body" safe-area="true">
      <header style="Header">
          <text style="Header__Title">Better Grip</text>
      </header>
      <view style="Container">
        <text>Based on the information you shared with us,</text>
        <text>please confirm that you are</text>
        <text>Seong Gi-hun</text>
        <view action="replace-inner" href="#form_fragment">
          <text style="Button Link">Yes, that is me. Create my account</text>
        </view>
        <text style="Button Link" href="/index.php" action="navigate">Back to home</text>
      </view>
      <view hide="true">
        <view id="form_fragment">
          <text-field
            style="TextInput"
            name="password"
            placeholder="password"
            secure-text="true"></text-field>
          <text
            href="stats_advanced.php"
            action="reload"
            style="Button Link">
            I agree with the Terms and Conditions, create my account
          </text>
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