  <?
  $ch = curl_init('http://ip-api.com/json/' . $_SERVER['REMOTE_ADDR'] . '?fields=city&lang=ru');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_HEADER, false);
  $res = curl_exec($ch);
  curl_close($ch);

  // $res = json_decode($res, true);
  // print_r($res['city']);
  echo $res;
  ?>