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
                  href="open-banking-02.php" />
                <image style="Image" source="/assets/itauLogo.png"
                  href="https://api.nab.useinfinite.io/consent/v1.0/cds-consent/authorize?client_id=RqZktMBeXB8Cg-0qT9I_bQrkrv9qBQTmUjxpQXB_XT4%3D&response_type=code+id_token&scope=openid+profile+bank%3Aaccounts.basic%3Aread+bank%3Atransactions%3Aread+bank%3Aaccounts.detail%3Aread&redirect_uri=https%3A%2F%2F0fb10935-ec17-4569-b67e-1a28ec15c0d7.example.org%2Fredirect&state=ABC&request=openid+profile+bank%3Aaccounts.basic%3Aread+bank%3Atransactions%3Aread+bank%3Aaccounts.detail%3Aread&authorization_mode=AUTO_POSTMAN&authorization_username=tsmith%400fb10935-ec17-4569-b67e-1a28ec15c0d7.example.org&secret_jwt=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJyZXF1ZXN0Ijoib3BlbmlkIHByb2ZpbGUgYmFuazphY2NvdW50cy5iYXNpYzpyZWFkIGJhbms6dHJhbnNhY3Rpb25zOnJlYWQgYmFuazphY2NvdW50cy5kZXRhaWw6cmVhZCIsImp0aSI6IjFmZGNmNDJkLWYwMWEtNGVmYy04MDM2LTg2NWRmMjA3NjYzMCJ9.P4zHTsvPFShVEhB_f2hmFRqQqfmcis_lewwpxa9OsMM_xjm5hq82jf1yX1vcMI684iAJciC_KIMzKZzUJCFRPMS9vlKSCKD8fkzoAtsnaUaKnhK6ph97cCTtfus4ZxMKDpjuS1-qEzq1e_ZCgtCCRtv455_jilb0WOoYN9LJ19LeY_vIdobu7oEb5nTS8N-v4xQ8UeYUOGXP6q0Yq-Xc-FBypdb0KHDsc_UDFoaR2igIXbGE-_-0DssDYNuNSQ9liFqFkWC5f3qHHzxiXwvir5vvPpAULPrmjygw60HYb4umc7-JB1Nh9BdMVuulqHJB93-geaZdn2y66K7lLN78Xw"
                  action="deep-link"  />
                <image style="Image" source="/assets/cibcLogoV2.png" />
                <image style="Image" source="/assets/natwestLogo.png" />
            </view>
            <text style="Button Link" action="close">Close</text>
        </view>
    </body>
  </screen>
</doc>