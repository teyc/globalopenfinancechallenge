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
        <form style="Container">
            <image source="/assets/nabLogo.png" style="Image" />
            <text style="Container__Title">Open Banking Data Sharing Consent (Faked)</text>
            <text>
              <text style="Bold">Better Grip</text>
              would like to access:</text>
            <text>- your bank transaction details</text>
            <text style="Button Link" action="close">Agree</text>
            <text style="Button Link" action="close" href="/index.xml">Cancel</text>
        </form>
    </body>
  </screen>
</doc>