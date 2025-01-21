<?php
class Apidev
{
    private $Apikey;
    private $URL = "https://apidev.biz.id/api/checker";

    public function __construct($apikey)
    {
        $this->Apikey = $apikey;
    }

    public function ShowMessage($run)
    {
        if ($run === false) {
            $run = json_encode(array("status" => false, "message" => "Terjadi kesalahan"));
        }

        print_r($run);
        exit();
    }

    public function getAccountName($CodeBank, $AccountNumber)
    {
        $data = "action=getAccount&kode_bank=" . $CodeBank . "&nomor_rekening=" . $AccountNumber;
        return $this->call($data);
    }

    public function getBankList()
    {
        $data = "action=getBankList";
        return $this->call($data);
    }

    private function call($data)
    {

        $ch = curl_init($this->URL . "?apikey=" . $this->Apikey . "&" . $data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        $result = curl_exec($ch);
        curl_close($ch);

        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($http_code == 200) {
            return $result;
        } else {
            return false;
        }
    }
}
