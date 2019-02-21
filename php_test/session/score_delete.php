<?php
//데이터베이스 연결
$connect=mysql_connect("localhost","kdhong","1234");
//데이터베이스 선택
mysql_select_db("kdhong_db",$connect);

//필드 num이 $num값을 가지는 레코드 삭제
$sql="delete from stud_score where num=$num";
mysql_query($sql);

mysql_close();

//score_list.php로 돌아감
//header("Location:score_list.php");
echo"
<script>
location.href='score_list.php';
</script>
"
?>