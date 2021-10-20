<?php
// include($_SERVER['DOCUMENT_ROOT'] . '/web/db.php');
// $monthly = db_load('monthly');

// $bearer_token = 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHAiOiJkZW1vLWFwcC04ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTgiLCJvcmciOiI4ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTguZXhhbXBsZS5vcmciLCJpc3MiOiJodHRwczovL2FwaS5uYWIudXNlaW5maW5pdGUuaW8iLCJ0b2tlbl90eXBlIjoiQUNDRVNTX1RPS0VOIiwiZXh0ZXJuYWxfY2xpZW50X2lkIjoiTnl0TDVSOXhHVHZQU1NuR3IyX19YWlBvQ01acXhDUnVSWEdwNV9ocTV1OD0iLCJjbGllbnRfaWQiOiI2OGFhYzNkOC0xNDZkLTQ2NDctODJmMC1mYTA2ZWE3N2JjMDUiLCJtYXhfYWdlIjo4NjQwMCwiYXVkIjoiNjhhYWMzZDgtMTQ2ZC00NjQ3LTgyZjAtZmEwNmVhNzdiYzA1IiwidXNlcl9pZCI6InRzbWl0aEA4ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTguZXhhbXBsZS5vcmciLCJncmFudF9pZCI6ImRjNTJkZjMzLThkNWMtNGFlMi04MWI3LTNiYjI5NzdjOGJlOSIsInNjb3BlIjoiYmFuazphY2NvdW50cy5kZXRhaWw6cmVhZCBiYW5rOnRyYW5zYWN0aW9uczpyZWFkIGJhbms6YWNjb3VudHMuYmFzaWM6cmVhZCBwcm9maWxlIG9wZW5pZCIsImNvbnNlbnRfcmVmZXJlbmNlIjoiMWVlMmEyY2ItYjgyMi00MzRhLTkxMGQtMGM0MzkzYjRhNmI1IiwiZXhwIjoxNjM0NjI3MjgzLCJpYXQiOjE2MzQ2MjY5ODMsImp0aSI6ImZiYWRiYWRmLTcxOTAtNDNiMC1iYjkyLWQwNDU2NWZhOWFmYyIsInRlbmFudCI6Ik5BQiJ9.HNMZa0ni7FTl_xVubll2DSla37GLvJslPtHr5KWZTq-z81k-XBT5vMFRzyHFny07jOZrgZfdCgw9OlbT_pQtQT4QgMu8k1gpFOBV60jJfD2owAltZUJflLBEm5zPyFtqnqFVC8TL4YZsTgEqwnTzXB-VxUj6yG99T9byOBwi41AxxEB8TfjumFr-zZm4v34RstkiZEksjV4m7qc7sQHwqTFLVT_KGERn0H49TotM0jvL8D6C9o3OnEpv_I2oIleYKS9wqK59-obKExPkupbJ77BoMmLCfn3tZ_nMkWhM-2wa7JM7BwrSQC2-apwr8SAuHvDNa006-yZdlwX8Nj7taw';
// $accountIdUsedToRequestTransactions = '233bfe15-171e-4ac2-bb0d-08f17cf15e27';

// $results = list_transactions($bearer_token, $accountIdUsedToRequestTransactions);

// $parsedTransactions = $results->data->transactions;

?>
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
        <text style="Container__Title">Monthly</text>
          <?php 
            session_start(); echo($_SESSION["txn"]);
            // $bearer_token = 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHAiOiJkZW1vLWFwcC04ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTgiLCJvcmciOiI4ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTguZXhhbXBsZS5vcmciLCJpc3MiOiJodHRwczovL2FwaS5uYWIudXNlaW5maW5pdGUuaW8iLCJ0b2tlbl90eXBlIjoiQUNDRVNTX1RPS0VOIiwiZXh0ZXJuYWxfY2xpZW50X2lkIjoiTnl0TDVSOXhHVHZQU1NuR3IyX19YWlBvQ01acXhDUnVSWEdwNV9ocTV1OD0iLCJjbGllbnRfaWQiOiI2OGFhYzNkOC0xNDZkLTQ2NDctODJmMC1mYTA2ZWE3N2JjMDUiLCJtYXhfYWdlIjo4NjQwMCwiYXVkIjoiNjhhYWMzZDgtMTQ2ZC00NjQ3LTgyZjAtZmEwNmVhNzdiYzA1IiwidXNlcl9pZCI6InRzbWl0aEA4ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTguZXhhbXBsZS5vcmciLCJncmFudF9pZCI6ImRjNTJkZjMzLThkNWMtNGFlMi04MWI3LTNiYjI5NzdjOGJlOSIsInNjb3BlIjoiYmFuazphY2NvdW50cy5kZXRhaWw6cmVhZCBiYW5rOnRyYW5zYWN0aW9uczpyZWFkIGJhbms6YWNjb3VudHMuYmFzaWM6cmVhZCBwcm9maWxlIG9wZW5pZCIsImNvbnNlbnRfcmVmZXJlbmNlIjoiMWVlMmEyY2ItYjgyMi00MzRhLTkxMGQtMGM0MzkzYjRhNmI1IiwiZXhwIjoxNjM0NjI3MjgzLCJpYXQiOjE2MzQ2MjY5ODMsImp0aSI6ImZiYWRiYWRmLTcxOTAtNDNiMC1iYjkyLWQwNDU2NWZhOWFmYyIsInRlbmFudCI6Ik5BQiJ9.HNMZa0ni7FTl_xVubll2DSla37GLvJslPtHr5KWZTq-z81k-XBT5vMFRzyHFny07jOZrgZfdCgw9OlbT_pQtQT4QgMu8k1gpFOBV60jJfD2owAltZUJflLBEm5zPyFtqnqFVC8TL4YZsTgEqwnTzXB-VxUj6yG99T9byOBwi41AxxEB8TfjumFr-zZm4v34RstkiZEksjV4m7qc7sQHwqTFLVT_KGERn0H49TotM0jvL8D6C9o3OnEpv_I2oIleYKS9wqK59-obKExPkupbJ77BoMmLCfn3tZ_nMkWhM-2wa7JM7BwrSQC2-apwr8SAuHvDNa006-yZdlwX8Nj7taw';
            // $accountIdUsedToRequestTransactions = '233bfe15-171e-4ac2-bb0d-08f17cf15e27';

            // $results = list_transactions($bearer_token, $accountIdUsedToRequestTransactions);

            // $parsedTransactions = $results->data->transactions;
            // foreach ($parsedTransactions as $key => $value) {
            //   echo <text>,"accountId - " , $value->accountId . '<br>', </text>;
            //   // echo "transactionId - " , $value->transactionId . '<br>';
            //   // echo "postingDateTime - " , $value->postingDateTime . '<br>';
            //   // echo "amount - " , $value->amount . '<br>';
            //   // echo "merchantName - " , $value->merchantName . '<br>';
            //   // echo "merchantCategoryCode - " , $value->merchantCategoryCode . '<br>';
            //   echo '<br>';
            // }
          ?> 
      </view>
      <view
        href="#"
        action="reload">
        <text style="Button Item__Reload">Reload (dev mode)</text>
      </view>
    </body>
  </screen>
 
</doc>