<?php

if (($_POST['username']) )
{
  $alamat='http://localhost/elevenia/';
$auth=$_POST['username'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "api.elevenia.co.id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "Content-Type: application/xml";
$headers[] = "Accept-Charset: utf-8";
$headers[] = "Openapikey: $auth";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
header("location:".$alamat."dashboard.php?token=$auth");
}
}else{

      header("location:".$alamat."login.php");
}

 ?>
