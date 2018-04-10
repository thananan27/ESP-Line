<?php
$access_token = 'bvU+0BZagThDznc/cOZb5bl2+hbQ0cgNcDxq7faxZymmwr3rvtOYf5L9Yy7ZPqD7CqdtfI0bCRif+T7Kx2qLiaVWOm8Dte7Rt2HhbHg2SJbNtMqd91LGRqkv3a7BIt/QHeKnAOaayZKeYZH5uGMJ3wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
