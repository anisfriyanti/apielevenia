<!-- <?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "api.elevenia.co.id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "Content-Type: application/xml";
$headers[] = "Accept-Charset: utf-8";
$headers[] = "Openapikey: b8a9116e2ab165f99f2fa82e60c30b60";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);



 ?> -->

 <h1 align="center"> Elevenia Auth</h1>
<form method="post" action="auth.php"  enctype="multipart/form-data" action="" name="form_leave">
  <tr>
     <table width="745" border="1" cellspacing="0" cellpadding="5" align="center">


<tr>
     <td>Input Token
     </td>
     <td><input type="text" name="username" id="username" value=""/>
     </td>
   </tr>

   <tr>

        <td>
        </td>
        <td align="left">
          <input type="submit" name="submit" value="Submit">
        </td>
      </tr>
</tr>
</table>
   </form>
