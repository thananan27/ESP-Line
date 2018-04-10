 <?php
  

function send_LINE($msg){
 $access_token = 'bvU+0BZagThDznc/cOZb5bl2+hbQ0cgNcDxq7faxZymmwr3rvtOYf5L9Yy7ZPqD7CqdtfI0bCRif+T7Kx2qLiaVWOm8Dte7Rt2HhbHg2SJbNtMqd91LGRqkv3a7BIt/QHeKnAOaayZKeYZH5uGMJ3wdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ucf28a74d2ae4326589ec03a323bfbff0',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
