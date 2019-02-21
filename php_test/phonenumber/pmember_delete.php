<?php
//데이터베이스 연결
$connect=mysql_connect("localhost","kdhong","1234");
//데이터베이스 선택
mysql_select_db("kdhong_db",$connect);

//필드 num이 $num값을 가지는 레코드 삭제
$sql="delete from pmember_list where num=$num";
mysql_query($sql);

mysql_close();

//돌아감
echo"
<script>
location.href='memberlist.php';
</script>
"
?>