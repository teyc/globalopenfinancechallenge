<?php

function list_accounts($bearer_token)
{

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.nab.useinfinite.io/cds-au/v1/banking/accounts',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer $bearer_token",
      'x-v: 1'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  return json_decode($response);
}

function list_transactions($bearer_token, $accountIdUsedToRequestTransactions)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.nab.useinfinite.io/cds-au/v1/banking/accounts/$accountIdUsedToRequestTransactions/transactions?oldest-time=2021-01-12",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer $bearer_token",
      'x-v: 1'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  return json_decode($response);
}

function authUrl()
{
  $url = 'https://api.nab.useinfinite.io/authorize
  ?client_id=NytL5R9xGTvPSSnGr2__XZPoCMZqxCRuRXGp5_hq5u8=
  &response_type=code id_token
  &redirect_uri=https://8ed6b4dc-5b16-44ff-b629-b88da87e4458.example.org/redirect
  &scope=openid profile bank:accounts.basic:read bank:transactions:read bank:accounts.detail:read
  &request=openid profile bank:accounts.basic:read bank:transactions:read bank:accounts.detail:read';
}


?>
