<meta charset="utf-8">
<?php
foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
}

$hp=$hp1."-".$hp2."-".$hp3;
$email=$email1."@".$email2;

$regist_day=date("Y-m-d(H:i)"); //현재의 년-월-일-시-분 저장

include "../lib/dbconn.php";

mysql_query("set names utf8");

$sql="select * from member where id='$id'";
$result=mysql_query($sql);
$exist_id=mysql_num_rows($result);

if($exist_id){
    echo"
        <script>
            window.alert('해당 아이디가 존재합니다.');
            history.go(-1)
        </script>
    ";
    exit;
}else{
    $sql="insert into member(id,pass,name,nick,hp,email,regist_day,level)";
    $sql.="values('$id','$pass','$name','$nick','$hp','$email','$regist_day',9)";
    
    mysql_query($sql);
}

mysql_close();

echo"
    <script>
        location.href='../index.php';
    </script>
";
?>