<? session_start(); ?>
<meta charset="utf-8">
<?php

include "dbconn.php";



    $sql="insert into pmember_list(gg,name,hp,address,id)";
    $sql.="values('$group','$name','$hp','$address','$userid')";
    
    mysql_query($sql);

mysql_close();

echo"
    <script>
        location.href='memberlist.php';
    </script>
";
?>