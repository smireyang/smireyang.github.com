<?php session_start(); ?>
<meta charset="utf-8">
<?
if(!$userid){
    echo "
    <script>
        window.alert('로그인 후 이용해 주세요')
        history.go(-1)
    </script>
    ";
    exit;
}
if(!$content){
    echo "
    <script>
        window.alert('내용을 입력하세요')
        history.go(-1)
    </script>
    ";
    exit;
}

$regist_day=date("Y-m-d (H:i)");

include "../lib/dbconn.php";

$sql="select * from member where id='$userid'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$name=$row[name];
$nick=$row[nick];

$sql="insert into memo (id,name,nick,content,regist_day)";
$sql.="values('$_SESSION[userid]','$name','$nick','$_POST[content]','$regist_day')";

mysql_query($sql);

mysql_close();

echo"<script>
location.href='memo.php';
</script>
";

?>