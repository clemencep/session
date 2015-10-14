<?php
$connect=mysql_connect("localhost","root","")or die("server not found".mysql_error());
$select=mysql_select_db("session_db")or die("database not found".mysql_error())
?>
<?php
if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(! $username|| ! $password){
		$msg = "<font color=red><blink>00ps!!!dear fill your perfectly please!</blink></font>";
	}
	else{
		$query = mysql_query("INSERT INTO users_tbl VALUES ('','$username','$password')");
		$msg="<font color=orange>Dear your information has been created succefully!</font>";
	}
}
?>
<?php 
session_start();
if(isset($_SESSION['counter']))
{
$_SESSION['counter']+=1;
}
else
{
$_SESSION['counter'] =1;
}
$mgs="you have join our group". $_SESSION['counter'];
$mgs="in this session.";
?>

<html>
<head>
</head>
<body>
	<a href="view.php">View database</a><br>
	<form action="" method="post">
	<table><tr><td>
		username</td><td><input type="text" name="username" value=""></td></tr>
		<tr><td>password</td><td><input type="password" name="password" value=""></td>
		</tr>
		<tr><td><input type="submit" name="submit" value="register"></td>
		<td><input type="submit" name="reset" value="reset"></td></tr>
		<?php if(isset($_POST['submit'])){print"<center><font color=orange><blink>$msg</blink></font>";} ?>
		<?php echo ($mgs); ?>
	  </table>
	
	</form>
</body>
</html>