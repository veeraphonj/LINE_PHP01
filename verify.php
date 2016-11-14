<?php
$access_token = 'eG7Kj75r0XltGHHM11aITcv8ck9iUVRstqEZFIsVLXM/vRmvpPGr678SpHDVbz/fZ+TXERKXJBHQS0jni23Ij1Y6+3/QwQSbR5p2bJVLuVUAk1Z5Wn58iHCXIHF4jGR+buKxfsyJ8e1PjvUEZge73gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
