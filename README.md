# cek-rekening

API Cek Rekening &amp; E-Wallet Indonesia (Dana,Ovo,Gopay,Sopepay,BCA,BRI,all bank)

## Bagaimana cara menggunakannya?

1. Get List Bank.

   ```
   <?php
   //require "apidev.php";
   //require "vendor/autoload.php";

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

## Api documentation.

Website: [https://apidev.biz.id/](https://apidev.biz.id/).  
 Documentation: [https://apidevbizid.apidog.io/](https://apidevbizid.apidog.io/).  
 Telegram: [https://t.me/rekberbizid](https://t.me/rekberbizid).  
 Trial Apikey: Call me via telegram.
