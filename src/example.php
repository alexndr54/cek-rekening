<?php

// this is file for example uses
// you can copy this file to your project and modify it as needed

require("apidev.php");

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
