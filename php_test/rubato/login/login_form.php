<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/member.css">
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
               <form name="member_form" method="post" action="login.php">
                   <div id="title">
                       <img src="../img/title_login.gif" alt="로그인">
                   </div>
                   
                   <div id="login_form">
                       <img src="../img/login_msg.gif" id="login_msg" alt="회원님의 아이디와 비밀번호를 입력해 주세요.">
                       <div class="clear"></div>
                       
                       <div id="login1"><img src="../img/login_key.gif" alt="자물쇠이미지"></div>
                       <div id="login2">
                           <div id="id_input_button">
                               <div id="id_pw_title">
                                   <ul>
                                       <li><img src="../img/id_title.gif" alt="아이디"></li>
                                       <li><img src="../img/pw_title.gif" alt="패스워드"></li>
                                   </ul>
                               </div>
                               <div id="id_pw_input">
                                   <ul>
                                       <li><input type="text" name="id" class="login_input"></li>
                                       <li><input type="password" name="pass" class="login_input"></li>
                                   </ul>
                               </div>
                               <div id="login_button">
                                   <input type="image" src="../img/login_button.gif">
                               </div>
                           </div>
                           <div class="clear"></div>
                           
                           <div id="login_line"></div>
                           <div id="join_button">
                               <img src="../img/no_join.gif" alt="아직 회원이 아니십니까?">&nbsp;&nbsp;&nbsp;&nbsp;
                               <a href="../member/member_form.php">
                               <img src="../img/join_button.gif" alt="회원가입하기"></a>
                           </div>
                       </div> 
                   </div>
               </form>
           </div>
        </div>
    </div>
</body>
</html>