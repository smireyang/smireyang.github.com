<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
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
                <div class="clear"></div>
                <div id="write_form_title">
                    <img src="../img/write_form_title.gif" alt="글쓰기">
                </div>
                <form action="insert.php" name="board_form" method="post">
                    <div id="write_form">
                        <div class="write_line"></div>
                        <div id="write_row1">
                            <div class="col1">닉네임</div>
                            <div class="col2"><?= $usernick ?></div>
                            <div class="col3"><input type="checkbox" name="html_ok" value="y">HTML쓰기</div>
                        </div><!--write_row1 end-->
                        <div class="write_line"></div>
                        <div id="write_row2">
                            <div class="col1">제목</div>
                            <div class="col2"><input type="text" name="subject"></div>
                        </div><!--write_row2 end-->
                        <div class="write_line"></div>
                        <div id="write_row3">
                            <div class="col1">내용</div>
                            <div class="col2">
                                <textarea name="content" cols="79" rows="15"></textarea>
                            </div>
                        </div><!--write_row3 end-->
                        <div class="write_line"></div>
                        <div id="write_button">
                            <input type="image" src="../img/ok.png"> &nbsp;&nbsp;
                            <a href="list.php?page=<?=$page?>"><img src="../img/list.png"></a>
                        </div><!--write_button end-->
                    </div><!--write_form end-->
                </form>
            </div><!--col2 end-->
        </div>
    </div>
</body>

</html>
