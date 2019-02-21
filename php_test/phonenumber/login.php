<?php session_start(); ?>

<meta charset="utf-8">
<?

include "dbconn.php";

$sql="select * from phone_member where id='$id'";
$result=mysql_query($sql);
$num_match=mysql_num_rows($result);

if(!$num_match){
    echo"<script>
        window.alert('등록되지 않은 아이디 입니다.')
        history.go(-1)
    </script>";
}else{
    $row=mysql_fetch_array($result);
    
    $db_pass=$row[pass];
    if($pass != $db_pass){
        echo"<script>
        window.alert('비밀번호가 틀립니다. 다시확인하세요')
        history.go(-1)
    </script>";
    exit;
    }else{
        $userid=$row[id];
        $username=$row[name];
        
        $_SESSION['userid']=$userid;
        $_SESSION['username']=$username;
        
        echo"<script>
        location.href='main.php';
    </script>";
    }
}
?>