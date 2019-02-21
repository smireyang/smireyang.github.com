<?php session_start(); ?>
<meta charset="utf-8">
<? 

$scale=10; //한 화면에 표시되는 글 수
include "../lib/dbconn.php";

if($mode=="search"){
    if(!$search){
        echo"<script>
        window.alert('검색할 단어를 입력해 주세요.');
        history.go(-1);
        </script>";
        exit;
    }
    $sql="select * from greet where $find like '%$search%' order by num desc";
}else{
    $sql="select * from greet order by num desc";
}

$result=mysql_query($sql);
$total_record=mysql_num_rows($result); //전체 글 수

//전체 페이지 수 계산
if($total_record % $scale == 0){
    $total_page=floor($total_record/$scale);
}else{
    $total_page=floor($total_record/$scale)+1;
}

if(!$page){
    $page=1; //페이지 번호를 1로 초기화
}
//표시할 페이지에 따른 start 레코드 계산
$start=($page-1)*$scale;

$number=$total_record-$start; //목록 번호
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/greet.css">
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
                <form action="list.php?mode=search" name="board_form" method="post">
                    <div id="list_search">
                        <div id="list_search1">▶ 총 <?= $total_record ?> 개의 게시물이 있습니다.</div>
                        <div id="list_search2"><img src="../img/select_search.gif" alt="SELECT"></div>
                        <div id="list_search3">
                            <select name="find">
                                <option value="subject">제목</option>
                                <option value="content">내용</option>
                                <option value="nick">별명</option>
                                <option value="name">이름</option>
                            </select>
                        </div>
                        <div id="list_search4"><input type="text" name="search"></div>
                        <div id="list_search5"><input type="image" src="../img/list_search_button.gif"></div>
                    </div>
                </form>
                <div class="clear"></div>
                <div id="list_top_title">
                    <ul>
                        <li id="list_title1"><img src="../img/list_title1.gif" alt="번호"></li>
                        <li id="list_title2"><img src="../img/list_title2.gif" alt="제목"></li>
                        <li id="list_title3"><img src="../img/list_title3.gif" alt="글쓴이"></li>
                        <li id="list_title4"><img src="../img/list_title4.gif" alt="등록일"></li>
                        <li id="list_title5"><img src="../img/list_title5.gif" alt="조회"></li>
                    </ul>
                </div> <!--list_top_title end -->
                <div id="list_content">
                    <?
                    //레코드 정보 들어갈 PHP 부분
                    for($i=$start; $i<$start+$scale && $i<$total_record; $i++){
                        mysql_data_seek($result,$i); //가져올 레코드로 위치(포인터)이동
                        $row=mysql_fetch_array($result);
                        
                        $item_num=$row[num];
                        $item_id=$row[id];
                        $item_name=$row[name];
                        $item_nick=$row[nick];
                        $item_hit=$row[hit];
                        
                        $item_date=$row[regist_day];
                        $item_date=substr($item_date, 0, 10); //날짜만 자름
                        $item_subject=str_replace(" ","&nbsp;",$row[subject]);
                    ?>
                    <div id="list_item">
                        <div id="list_item1"><?=$number?></div>
                        <div id="list_item2">
                            <a href="view.php?num=<?=$item_num?>&page=<?=$page?>"><?=$item_subject?></a>
                        </div>
                        <div id="list_item3"><?=$item_nick?></div>
                        <div id="list_item4"><?=$item_date?></div>
                        <div id="list_item5"><?=$item_hit?></div>
                    </div><!--list_item end-->
                    <?
                    $number--;
                    //출력 부분 종료
                    }
                    ?>
                    <div id="page_button">
                        <div id="page_num">
                            ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp;
                            <?
                            //페이지 번호 출력
                            for($i=1; $i<=$total_page; $i++){
                                if($page==$i){
                                    echo "<b> $i </b>";
                                }
                                else{
                                    echo "<a href='list.php?page=$i'>$i</a>";
                                }
                            }
                            ?>
                            &nbsp;&nbsp;&nbsp;&nbsp; 다음 ▶
                        </div><!--page_num end-->
                        <div id="button">
                            <a href="#"><img src="../img/list.png" alt="목록"></a>&nbsp;&nbsp;
                            <?
                                if($userid){
                            ?>
                            <a href="write_form.php"><img src="../img/write.png" alt="글쓰기"></a>
                            <?
                                }
                            ?>
                        </div><!--button end-->
                    </div><!--page_button end-->
                </div><!-- list_content end-->
                <div class="clear"></div>
            </div><!--col2 end-->
        </div>
    </div>
</body>

</html>
