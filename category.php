<?php




    // $path = 'http://api.elevenia.co.id/rest/cateservice/category';
    // $headers = array();
    //
    // $headers[] = "Openapikey: b8a9116e2ab165f99f2fa82e60c30b60";
    // // Get the data from the URL
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL,$path);
    // //curl_setopt($ch,CURLOPT_HTTPHEADER,array('Accept: application/variant_div(left, right).epg.vrt.be.playlist_1.1+xml'));
    //
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    //
    // $data = curl_exec($ch);
    //    curl_close($ch);
    //
    //    //convert the XML result into array
    //    $array_data = simplexml_load_string($data);
    //
    //    // print_r('<pre>');
    //    // print_r($array_data);
    //    // print_r('</pre>');
    //    echo $data;

//
//     $curl = curl_init();
//
// curl_setopt_array($curl, array(
//   CURLOPT_URL => "http://api.elevenia.co.id/rest/cateservice/category",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_HTTPHEADER => array(
//
//     "openapikey: b8a9116e2ab165f99f2fa82e60c30b60"
//
//   ),
// ));
//
// $response = curl_exec($curl);
// $err = curl_error($curl);
//
// curl_close($curl);
//
// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.elevenia.co.id/rest/cateservice/category",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "openapikey: b8a9116e2ab165f99f2fa82e60c30b60"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }
//$var1 = json_decode($response, true);
// if (isset($var1['category'])){
// 	$n=count($var1['category']);
// }else{
// 	$n=0;
// }
//echo $var1;

$fileContents= file_get_contents($response);

		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

		$fileContents = trim(str_replace('"', "'", $fileContents));

		$simpleXml = simplexml_load_string($fileContents);

		$json = json_encode($simpleXml);

		return $json;
?>
