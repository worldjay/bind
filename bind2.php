<?php
/**
 * Created by PhpStorm.
 * User: Evan
 * Date: 2015/5/17
 * Time: 11:51
 */
$service_path = 'http://192.168.1.138:8008/sap/opu/odata/sap/Z_WE_ASSCOCUSTOPENID_SRV/OpenIdSet';
$url = $service_path . '(Kunnr=' .'\''. $_POST["CustomerName"]  . '\'' . ',Code=' . '\'' . $_POST["Code"] . '\''. ',Name=' .'\''. $_POST["Name"] .'\')';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_URL, $url);

    $res = curl_exec($curl);
    curl_close($curl);
echo $res;

