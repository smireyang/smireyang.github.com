<meta charset="utf-8">
<?php //$_GET[id]
    if(!$id){
        echo"아이디를 입력하세요!!";
    }else{
        include "../lib/dbconn.php";
        
        $sql="select * from member where id='$id'";
        $result=mysql_query($sql);
        $num_record=mysql_num_rows($result);
        
        if($num_record){
            echo"아이디 중복됩니다.!<br>";
            echo"다른 아이디를 사용하세요.<br>";
        }
        else{
            echo"사용가능한 아이디 입니다.";
        }
        
        mysql_close();
    }
?>