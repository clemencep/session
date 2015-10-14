<?php
$connection=mysql_connect("localhost","root","")or die("server not found".mysql_error ());
$selection=mysql_select_db("session_db")or die("database not found".mysql_error ());
?>
<?php
//display data in database
$query=mysql_query("SELECT * FROM users_tbl");
$rows=mysql_num_rows($query);
echo $rows." users_tbl";
echo"<table border=1>";
while($result=mysql_fetch_array($query)){
echo"
<tr>
<td>$result[username]</td>
<td>$result[password]</td>
</tr>";
}
echo"</table>";


?>