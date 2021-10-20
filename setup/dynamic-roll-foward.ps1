# PS C:\Users\ctey\Downloads> .\dynamic-rollforward.ps1 | Out-File -encoding ASCII .\dynamic-rollforward.yaml

$data = @(
  @{TYPE='Grocery1';DAYS=7;Min=30;Max=80;Merchant='Coles';MCC=5411;AccountNumber=1857193;User=1}
, @{TYPE='Fuel1';DAYS=14;Min=60;Max=100;Merchant='Caltex';MCC=5541;AccountNumber=1857193;User=1}
, @{TYPE='Mortgage1';DAYS=28;Min=1400;Max=1400;Merchant='NAB';MCC=0;AccountNumber=1857193;User=1}
, @{TYPE='Utilities1';DAYS=90;Min=400;Max=650;Merchant='Urban Utilities';MCC=4900;AccountNumber=1857193;User=1}
, @{TYPE='Subscriptions1';DAYS=28;Min=28;Max=28;Merchant='Netflix';MCC=7841;AccountNumber=1857193;User=1}
, @{TYPE='Subscriptions1';DAYS=28;Min=28;Max=28;Merchant='Amazon Prime';MCC=7841;AccountNumber=1857193;User=1}
, @{TYPE='Medical1';DAYS=90;Min=80;Max=120;Merchant='GP Clinic';MCC=8099;AccountNumber=1857193;User=1}
, @{TYPE='Income1';DAYS=30;Min=-5400;Max=-5400;Merchant='Payroll';MCC=0;AccountNumber=1857193;User=1}
, @{TYPE='Gambling1a';DAYS=7;Min=40;Max=100;Merchant='Ladbrokes';MCC=7995;AccountNumber=1857751;User=1}
, @{TYPE='Gambling1d';DAYS=7;Min=40;Max=100;Merchant='Bet365';MCC=7995;AccountNumber=1857751;User=1}
, @{TYPE='Gambling1b';DAYS=7;Min=80;Max=150;Merchant='Sportsbet';MCC=7995;AccountNumber=1857751;User=1}
, @{TYPE='Gambling1c';DAYS=90;Min=-500;Max=-1000;Merchant='Ladbrokes';MCC=7995;AccountNumber=1857751;User=1}
, @{TYPE='Grocery2';DAYS=7;Min=120;Max=120;Merchant='Coles';MCC=5411;AccountNumber=2875043;User=2}
, @{TYPE='Fuel2';DAYS=14;Min=80;Max=80;Merchant='Caltex';MCC=5541;AccountNumber=2875568;User=2}
, @{TYPE='Car2';DAYS=180;Min=350;Max=400;Merchant='Mazda';MCC=5511;AccountNumber=2875043;User=2}
, @{TYPE='BodyCorp2';DAYS=90;Min=560;Max=560;Merchant='';MCC=0;AccountNumber=2875043;User=2}
, @{TYPE='Mortgage2';DAYS=30;Min=1400;Max=1400;Merchant='NAB';MCC=0;AccountNumber=2875568;User=2}
, @{TYPE='Electricity2 ';DAYS=90;Min=300;Max=300;Merchant='Energex';MCC=4900;AccountNumber=2875043;User=2}
, @{TYPE='Utilities2';DAYS=90;Min=250;Max=250;Merchant='Urban Utilities';MCC=4900;AccountNumber=2875568;User=2}
, @{TYPE='Medical2';DAYS=30;Min=100;Max=100;Merchant='S&N';MCC=8099;AccountNumber=2875568;User=2}
, @{TYPE='Income2';DAYS=30;Min=-5500;Max=-5500;Merchant='Payroll';MCC=0;AccountNumber=2875043;User=2}
, @{TYPE='Fitness2';DAYS=7;Min=100;Max=100;Merchant='Jetts';MCC=7032;AccountNumber=2875568;User=2}
, @{TYPE='Holiday2';DAYS=90;Min=200;Max=500;Merchant='Flight Centre';MCC=3756;AccountNumber=2875568;User=2}
, @{TYPE='CashOut2';DAYS=14;Min=100;Max=150;Merchant='ATM';MCC=0;AccountNumber=2875043;User=2}
, @{TYPE='Streaming2';DAYS=30;Min=15;Max=15;Merchant='Netflix';MCC=7841;AccountNumber=2875568;User=2}
, @{TYPE='Gambling2a';DAYS=7;Min=10;Max=20;Merchant='Sportsbet';MCC=7995;AccountNumber=2875043;User=2}
, @{TYPE='Gambling2b';DAYS=30;Min=200;Max=200;Merchant='Neds';MCC=7995;AccountNumber=2875043;User=2}
, @{TYPE='Gambling2c';DAYS=30;Min=-50;Max=-100;Merchant='Neds';MCC=7995;AccountNumber=2875043;User=2}
, @{TYPE='Bus3';DAYS=7;Min=50;Max=50;Merchant='Translink';MCC=3756;AccountNumber=3857193;User=3}
, @{TYPE='Rent3';DAYS=14;Min=300;Max=300;Merchant='Rentals Brisbane';MCC=0;AccountNumber=3857193;User=3}
, @{TYPE='Utilities3';DAYS=90;Min=90;Max=120;Merchant='Energex';MCC=4900;AccountNumber=3857193;User=3}
, @{TYPE='Medical3';DAYS=180;Min=40;Max=50;Merchant='Brisbane GPs';MCC=8099;AccountNumber=3857193;User=3}
, @{TYPE='Income3';DAYS=14;Min=-660;Max=-660;Merchant='Centerlink';MCC=0;AccountNumber=3857193;User=3}
, @{TYPE='Gambling3a';DAYS=14;Min=10;Max=15;Merchant='Ladbrokes';MCC=7995;AccountNumber=3857193;User=3}
, @{TYPE='Gambling3b';DAYS=140;Min=0;Max=-120;Merchant='Ladbrokes';MCC=0;AccountNumber=3857193;User=3}
, @{TYPE='Grocery4';DAYS=5;Min=25;Max=30;Merchant='Woolworths';MCC=5411;AccountNumber=4149234;User=4}
, @{TYPE='Rent4';DAYS=14;Min=200;Max=200;Merchant='';MCC=0;AccountNumber=4149234;User=4}
, @{TYPE='Income4';DAYS=7;Min=-300;Max=-400;Merchant='Payroll';MCC=0;AccountNumber=4149234;User=4}
, @{TYPE='Gambling4a';DAYS=3;Min=5;Max=10;Merchant='Pointsbet';MCC=7995;AccountNumber=4149234;User=4}
, @{TYPE='Gambling4b';DAYS=7;Min=15;Max=25;Merchant='Sportsbet';MCC=7995;AccountNumber=4149234;User=4}
, @{TYPE='Gambling4d';DAYS=30;Min=0;Max=-30;Merchant='Pointsbet';MCC=7995;AccountNumber=4149234;User=4}
, @{TYPE='Gambling4c';DAYS=30;Min=0;Max=-75;Merchant='Sportsbet';MCC=7995;AccountNumber=4149234;User=4}
, @{TYPE='Fitness4';DAYS=14;Min=39;Max=39;Merchant='Anytime Fitness';MCC=7032;AccountNumber=4149234;User=4}
, @{TYPE='Alcohol4';DAYS=7;Min=26;Max=39;Merchant='Pig & Whistle';MCC=5813;AccountNumber=4149234;User=4}
, @{TYPE='Grocery5';DAYS=7;Min=30;Max=100;Merchant='ALDI';MCC=5411;AccountNumber=5551234;User=5}
, @{TYPE='Fuel5';DAYS=14;Min=30;Max=60;Merchant='United';MCC=5541;AccountNumber=5551234;User=5}
, @{TYPE='Rent5';DAYS=28;Min=1600;Max=1600;Merchant='NAB';MCC=0;AccountNumber=5551234;User=5}
, @{TYPE='Income5';DAYS=30;Min=-4000;Max=-4000;Merchant='Payroll';MCC=0;AccountNumber=5551234;User=5}
, @{TYPE='Gambling5a';DAYS=7;Min=50;Max=100;Merchant='Sportsbet';MCC=7995;AccountNumber=5551234;User=5}
, @{TYPE='Gambling5b';DAYS=7;Min=10;Max=50;Merchant='Sportsbet';MCC=7995;AccountNumber=5551234;User=5}
, @{TYPE='Gambling5c';DAYS=90;Min=-100;Max=-200;Merchant='Sportsbet';MCC=7995;AccountNumber=5551234;User=5}
, @{TYPE='Grocery6';DAYS=30;Min=500;Max=600;Merchant='ALDI';MCC=5411;AccountNumber=6276241;User=6}
, @{TYPE='Fuel6';DAYS=30;Min=40;Max=80;Merchant='7Eleven ';MCC=5541;AccountNumber=6276241;User=6}
, @{TYPE='Mortgage6';DAYS=30;Min=1500;Max=2400;Merchant='NAB';MCC=0;AccountNumber=6276247;User=6}
, @{TYPE='Entertainment';DAYS=30;Min=50;Max=500;Merchant='Netflix, Spotify';MCC=7841;AccountNumber=6276247;User=6}
, @{TYPE='Utilities6';DAYS=30;Min=240;Max=350;Merchant='Ovo, Urban Utilise, Council ';MCC=4900;AccountNumber=6276241;User=6}
, @{TYPE='Rates6';DAYS=90;Min=1200;Max=1200;Merchant='Body Corp';MCC=0;AccountNumber=6276241;User=6}
, @{TYPE='Medical6';DAYS=30;Min=92;Max=98;Merchant='Frank';MCC=8099;AccountNumber=6276241;User=6}
, @{TYPE='Income6';DAYS=30;Min=-6200;Max=-6200;Merchant='Payroll';MCC=0;AccountNumber=6276241;User=6}
, @{TYPE='Gambling6a';DAYS=7;Min=10;Max=100;Merchant='Sportsbet';MCC=7995;AccountNumber=6276241;User=6}
, @{TYPE='Gambling6b';DAYS=7;Min=10;Max=100;Merchant='Colossalbet';MCC=7995;AccountNumber=6276241;User=6}
, @{TYPE='Gambling6c';DAYS=7;Min=10;Max=100;Merchant='Neds';MCC=7995;AccountNumber=6276241;User=6}

)

$users = @(
    @{FN='Seong';LN='Gi-Hun';username='sghun';password='secret'},
    @{FN='Santa';LN='Clause';username='sclause';password='secret'},
    @{FN='Tim';LN='Smith';username='tsmith';password='secret'},
    @{FN='Dolly';LN='Duck';username='dduck';password='secret'},
    @{FN='Elvis';LN='Elephant';username='eelephant';password='secret'},
    @{FN='Patrick';LN='Star';username='pstar';password='secret'}
)

$data2 = $data  `
| ForEach-Object { 
    [pscustomobject] $_ 
}

@"
drrfConfiguration:
 drrfProvisionAheadDays: 1000
 varianceMap:
"@

$data2 | ForEach-Object {
    $Type = $_.Type
    $Days = $_.Days
    $StdDev = $_.Max - $_.Min
@"
   $type`:
    stdDevAmnt: $StdDev
    stdDevDate: $Days
"@
}

"users:"

$data2 `
| group User `
| ForEach-Object {

    $user = $_.Name - 1
    $username = $users[$user].UserName
    $ln = $users[$User].ln
    $fn = $users[$User].fn

@"
  - username: '$username'
    firstName: '$fn'
    lastName: '$ln'
    password: 'secret'
    accounts:
"@
    $_.Group `
    | ForEach-Object {
        $amount = ($_.Max + $_.Min)/2.0
@"
    - other: '$($_.AccountNumber)'
      otherScheme: 'BBAN'
      countryCode: 'AU'
      name: Deposit account
      currency: AUD
      startBalance: 5252.570246
      transactions:
          - amount: $amount
            bookingDate: '2020-01-01T08:13:27+01:00'
            cdtDbtInd: DBIT
            counterparty: '$($_.Merchant)'
            merchantCategoryCode: '$($_.MCC)'
            remittanceCat: '$($_.Type)'
            fromAccount: '$($_.AccountNumber)'
"@
    }
}
