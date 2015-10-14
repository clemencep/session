<?php
//connect tp the server and select database
$sql=mysql_connect("localhost","root","") or die ("server not find, verify your network settings");
mysql_select_db("session_db",$sql);

//inserting into the table
$a=$_POST['id'];
$b=$_POST['uname'];
$c=$_POST['email'];
$d=$_POST['password'];

$msg="insert into users_tbl(id,uname,email,password) values('$a','$b','$c','$d')";
$result=mysql_query($msg);
//if succeffull
if(result)
{
echo "registation succefull";
}
else
{
echo "registration fail, try again";
}

?>
