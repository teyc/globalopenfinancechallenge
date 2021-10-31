<?php
      include('./api.php');
      // Report all PHP errors
      ini_set('display_errors', '1');
      ini_set('display_startup_errors', '1');
      error_reporting(E_ALL);
      session_start();

      $bearer_token = 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHAiOiJkZW1vLWFwcC04ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTgiLCJvcmciOiI4ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTguZXhhbXBsZS5vcmciLCJpc3MiOiJodHRwczovL2FwaS5uYWIudXNlaW5maW5pdGUuaW8iLCJ0b2tlbl90eXBlIjoiQUNDRVNTX1RPS0VOIiwiZXh0ZXJuYWxfY2xpZW50X2lkIjoiTnl0TDVSOXhHVHZQU1NuR3IyX19YWlBvQ01acXhDUnVSWEdwNV9ocTV1OD0iLCJjbGllbnRfaWQiOiI2OGFhYzNkOC0xNDZkLTQ2NDctODJmMC1mYTA2ZWE3N2JjMDUiLCJtYXhfYWdlIjo4NjQwMCwiYXVkIjoiNjhhYWMzZDgtMTQ2ZC00NjQ3LTgyZjAtZmEwNmVhNzdiYzA1IiwidXNlcl9pZCI6InRzbWl0aEA4ZWQ2YjRkYy01YjE2LTQ0ZmYtYjYyOS1iODhkYTg3ZTQ0NTguZXhhbXBsZS5vcmciLCJncmFudF9pZCI6IjlmOGM1ODk0LTQ1MDEtNGVhOC1hODU2LTgzNTk5MTFlZTI3OSIsInNjb3BlIjoiYmFuazphY2NvdW50cy5kZXRhaWw6cmVhZCBiYW5rOnRyYW5zYWN0aW9uczpyZWFkIGJhbms6YWNjb3VudHMuYmFzaWM6cmVhZCBwcm9maWxlIG9wZW5pZCIsImNvbnNlbnRfcmVmZXJlbmNlIjoiZDNmZjI4ZmYtNDkwNS00N2JmLWFiODEtMzUxOTM1YjlhMWY2IiwiZXhwIjoxNjM0NzkxMDIwLCJpYXQiOjE2MzQ3OTA3MjAsImp0aSI6IjEwNGFlY2E5LTZmMmUtNDk2NC05YjBmLTE5YWRhNzk4MzhhNiIsInRlbmFudCI6Ik5BQiJ9.TYF-CTCU0U_xbkx9fx07Ei9N4rCI2_eWZTcO1RuQGLa-YC2A2HALz7GGY-mvGhLEt_DFQoIGbaPTa_QIoJ3AEbrQiZr1GtTOAeWPjWVpgXjPhFnd7p6dRe6ZGq6Y_jV8Hd058tKicI0hqA_989L2h_4namoK2irxqC3HKyh_Mit-15MUOk5BCh6t3Ht-OqyyL5PIBuTQSYfDKmulStDjTRP-rU2BTYicUnb5HZu5X6ZU2A1DtQiiky__5gyYhdaPEfjyl6qTPYnBrWzV7DnB_TKTod91rUqLTbus-8OtCIRQbD_M-X2PADtpkAN0zySo1vd-hn37MktWKi5w6G1InA';
      $accountIdUsedToRequestTransactions = '14a20aa4-d882-482a-9a4e-3009fb7478cd';
      $oldestTime = '';
      $newestTime = '';
      $text = '';

      try {
            //$results = list_accounts($bearer_token);
            $results = list_transactions($bearer_token, $accountIdUsedToRequestTransactions);
	    if ($results->status < 400) {// not error
		    $parsedTransactions = $results->data->transactions;
	    } else {
		    $parsedTransactions = array();
		    echo "<h4>Response</h4>";
		    echo "<pre>" . var_dump($results) . "</pre>";
	    }

      } catch (Exception $e) {
	      echo $e->getMessage();
      }
      $_SESSION["txn"] = $parsedTransactions;

      echo "<pre>";
      foreach ($parsedTransactions as $key => $value) {
            echo "accountId - " , $value->accountId . '<br>';
            echo "transactionId - " , $value->transactionId . '<br>';
            echo "postingDateTime - " , $value->postingDateTime . '<br>';
            echo "amount - " , $value->amount . '<br>';
            echo "merchantName - " , $value->counterParty . '<br>';
            echo "merchantCategoryCode - " , $value->merchantCategoryCode . '<br>';
            echo '<br>';
      }
      echo "</pre>";
?>
