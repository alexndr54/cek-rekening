# cek-rekening

API Cek Rekening &amp; E-Wallet Indonesia (Dana,Ovo,Gopay,Sopepay,BCA,BRI,all bank)

## Bagaimana cara menggunakannya?

1. Get List Bank.

   ```
   <?php
   //require "apidev.php";
   //require "vendor/autoload.php";

   use apidev\cekrekeningewallet\Apidev;

   $Your_Apikey = ""; // Your API Key
   $Apidev = new Apidev($Your_Apikey);

   //cek rekening
   $run = $Apidev->getBankList();

   $Apidev->ShowMessage($run);
   //or
   print_r($run) //if apidev url down,is false
   ?>
   ```

2. Get Account Name.

   ```
    <?php
     //require "apidev.php";
     //require "vendor/autoload.php";

     use apidev\cekrekeningewallet\Apidev;

    $Your_Apikey = ""; // Your API Key
    $Apidev = new Apidev($Your_Apikey);

     //cek rekening
     $kodeBank = isset($_GET['kode_bank']) ? $_GET['kode_bank'] : "";
     $nomorRekening = isset($_GET['nomor_rekening']) ? $_GET['nomor_rekening'] : "";
    $run = $Apidev->getAccountName($kodeBank, $nomorRekening);

     $Apidev->ShowMessage($run);
     //or
     print_r($run) //if apidev url down,is false
     ?>
   ```

## Contoh Penggunaan.

```
<?php
// this is file for example uses
// you can copy this file to your project and modify it as needed

require "vendor/autoload.php";

use apidev\cekrekeningewallet\Apidev;

header("Content-Type: application/json");

$Your_Apikey = ""; // Your API Key
$Apidev = new Apidev($Your_Apikey);

if (isset($_GET['action'])) {
   if ($_GET['action'] == "getBankList") {
      $run = $Apidev->getBankList();
      $Apidev->ShowMessage($run);
   }

   if ($_GET['action'] == "getAccount") {
      $kodeBank = isset($_GET['kode_bank']) ? $_GET['kode_bank'] : "";
      $nomorRekening = isset($_GET['nomor_rekening']) ? $_GET['nomor_rekening'] : "";
      $run = $Apidev->getAccountName($kodeBank, $nomorRekening);
      $Apidev->ShowMessage($run);
   }

   $run = json_encode(array("status" => false, "message" => "Action tidak ditemukan"));
   $Apidev->ShowMessage($run);
} else {
   $run = json_encode(array("status" => false, "message" => "Action tidak ditemukan"));
   $Apidev->ShowMessage($run);
}
?>
```

## Api documentation.

Website: [https://apidev.biz.id/](https://apidev.biz.id/).  
 Documentation: [https://apidevbizid.apidog.io/](https://apidevbizid.apidog.io/).  
 Telegram: [https://t.me/rekberbizid](https://t.me/rekberbizid).  
 Trial Apikey: Call me via telegram.
