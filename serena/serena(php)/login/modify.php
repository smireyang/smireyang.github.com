<?php
session_start();

foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
?>
<meta charset="utf-8">
<?
$hp=$hp1."-".$hp2."-".$hp3; //$_POST[]
$email=$email1."@".$email2;

$regist_day=date("Y-m-d(H:i)");

include "../lib/dbconn.php";

$sql="update member set pass='$pass',name='$name',nick='$nick',";
$sql.="hp='$hp',email='$email',regist_day='$regist_day' where id='$userid'";

mysql_query($sql); //전송(db에서 실행하도록)

mysql_close();

echo"
<script>location.href='../index.php';</script>
"
?>