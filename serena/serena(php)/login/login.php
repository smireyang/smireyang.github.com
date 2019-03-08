<?php session_start(); 

foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
}
?>
<meta charset="utf-8">
<? //$_POST[$id]
if(!$id){
    echo"<script>
        window.alert('아이디를 입력하시오!!!')
        history.go(-1)
    </script>";
    exit;
}
if(!$pass){
    echo"<script>
        window.alert('비밀번호를 입력하시오!!!')
        history.go(-1)
    </script>";
    exit;
}

include "../lib/dbconn.php";

$sql="select * from member where id='$id'";
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
        $usernick=$row[nick];
        $userlevel=$row[level];
        
        $_SESSION['userid']=$userid;
        $_SESSION['username']=$username;
        $_SESSION['usernick']=$usernick;
        $_SESSION['userlevel']=$userlevel;
        
        echo"<script>
        location.href='../index.php';
    </script>";
    }
}
?>