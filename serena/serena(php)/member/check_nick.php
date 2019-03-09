<meta charset="utf-8">
<?php //$_GET[id]

foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
}

    if(!$nick){
        echo"닉네임을 입력하세요.";
    }else{
        include "../lib/dbconn.php";
        
        mysql_query("set names utf8");
        
        $sql="select * from member where nick='$nick'";
        $result=mysql_query($sql);
        $num_record=mysql_num_rows($result);
        
        if($num_record){
            echo"닉네임이 중복됩니다!<br>";
            echo"다른 닉네임을 사용하세요.<br>";
        }
        else{
            echo"사용가능한 닉네임 입니다.";
        }
        
        mysql_close();
    }
?>