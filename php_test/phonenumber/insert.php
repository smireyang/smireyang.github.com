<meta charset="utf-8">
<?php

include "dbconn.php";

mysql_query("set names utf8");

$sql="select * from phone_member where id='$id'";
$result=mysql_query($sql);
$exist_id=mysql_num_rows($result);

if($exist_id){
    echo"
        <script>
            location.href='join.php?check=$exist_id';
        </script>
    ";
    exit;
}else{
    $sql="insert into phone_member(id,pass,name,email)";
    $sql.="values('$id','$pass','$name','$email')";
    
    mysql_query($sql);
}

mysql_close();

echo"
    <script>
        location.href='index.php';
    </script>
";
?>