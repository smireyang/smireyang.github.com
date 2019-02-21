<?php session_start(); ?>
<meta charset="utf-8">
<?
if(!$userid){
    echo"<script>
    window.alert('로그인 후 이용하세요.')
    history.go(-1);
    </script>";
    exit;
}
if(!$ripple_content){
     echo"<script>
    window.alert('내용을 입력하세요.')
    history.go(-1);
    </script>";
    exit;
}
include"../lib/dbconn.php";

$sql="select * from member where id='$userid'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$name=$row[name];
$nick=$row[nick];
$regist_day=date("Y-m-d (H:i)");

$sql="insert into memo_ripple (parent,id,name,nick,content,regist_day)";
$sql.="values ($num,'$userid','$name','$nick','$ripple_content','$regist_day')"; //$_POST[num]

mysql_query($sql);

mysql_close();

echo"
<script>
    location.href='memo.php';
</script>
";

?>