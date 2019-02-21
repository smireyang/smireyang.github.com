<?php session_start(); 

include "../lib/dbconn.php";

$sql="select * from greet where num=$_GET[num]";
$result=mysql_query($sql);

$row=mysql_fetch_array($result);

$item_subject=str_replace(" ","&nbsp;",$row[subject]);

$item_content=$row[content];

if($row[is_html]!="y"){
    $item_content=str_replace(" ","&nbsp;",$row[content]);
    $item_content=str_replace("\n","<br>",$item_content);
}
$new_hit=$row[hit]+1;

$sql="update greet set hit=$new_hit where num=$num";
mysql_query($sql);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/greet.css">
<script>
function del(herf){
    if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n정말 삭제하시겠습니까?")){
        document.location.href=herf;
    }
}
</script>
</head>

<body>
    <div id="wrap">
        <div id="header">
            <? include "../lib/top_login2.php"; ?>
        </div>
        <div id="menu">
            <? include "../lib/top_menu2.php"; ?>
        </div>
        <div id="content">
            <div id="col1">
                <div id="left_menu">
                    <? include "../lib/left_menu.php" ?>
                </div>
            </div>
            <div id="col2">
                <div id="title">
                    <img src="../img/title_greet.gif" alt="가입인사">
                </div>
                <div id="view_title">
                    <div id="view_title1"><?=$row[subject]?></div>
                    <div id="view_title2"><?=$row[nick]?> | 조회 : <?=$row[hit]?> | <?=$row[regist_day]?> 
                    </div>
                </div><!--view_title end-->
                <div id="view_content">
                    <?=$item_content?>
                </div><!--view_content end-->
                <div id="view_button">
                    <a href="list.php?page=<?=$page?>"><img src="../img/list.png" alt="목록"></a>&nbsp;
                    <?
                    if($userid==$row[id] || $userid=="admin"){
                    ?>
                    <a href="modify_form.php?num=<?=$num?>&page=<?=$page?>"><img src="../img/modify.png" alt="수정"></a>&nbsp;
                    <a href="javascript:del('delete.php?num=<?=$num?>')"><img src="../img/delete.png" alt="삭제"></a>&nbsp; <!--경고문 출력위해 del이라는 함수 만듬-->
                    <?
                    }
                    ?>
                    <?
                    if($userid){
                    ?>
                    <a href="write_form.php"><img src="../img/write.png" alt="글쓰기"></a>
                    <?
                    }
                    ?>
                </div><!--view_button end-->
                <div class="clear"></div>
            </div><!--col2 end-->
        </div>
    </div>
</body>

</html>