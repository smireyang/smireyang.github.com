<?php
session_start();

foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/member.css">
    <script>
        function check_input(){
            if(!document.member_form.pass.value){
                alert("비밀번호를 입력하세요!!!");
                document.member_form.pass.focus();
                return;
            }
            if(!document.member_form.pass_confirm.value){
                alert("비밀번호확인을 입력하세요!!!");
                document.member_form.pass_confirm.focus();
                return;
            }
            if(!document.member_form.name.value){
                alert("이름을 입력하세요!!!");
                document.member_form.name.focus();
                return;
            }
            if(!document.member_form.nick.value){
                alert("닉네임을 입력하세요!!!");
                document.member_form.nick.focus();
                return;
            }
            if(!document.member_form.hp2.value || !document.member_form.hp3.value){
                alert("휴대폰 번호를 입력하세요!!!");
                document.member_form.hp2.focus();
                return;
            }
            if(document.member_form.pass.value != document.member_form.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다. 다시 입력해주세요!");
                document.member_form.pass.focus();
                document.member_form.pass.select();
                return;
            }
            document.member_form.submit();
            //form태그의 값을 action에 지정된 페이지로 전송하는 명령.
        }
        function reset_form(){
            document.member_form.id.value="";
            document.member_form.pass.value="";
            document.member_form.pass_confirm.value="";
            document.member_form.name.value="";
            document.member_form.nick.value="";
            document.member_form.hp1.value="010";
            document.member_form.hp2.value="";
            document.member_form.hp3.value="";
            document.member_form.email1.value="";
            document.member_form.email2.value="";
            
            document.member_form.id.focus();
            
            return;
        }
        function check_nick(){
            window.open("check_nick.php?nick="+document.member_form.nick.value,"NICKcheck",
                       "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
        }
    </script>
</head>
<?
    include "../lib/dbconn.php";
    
    $sql="select * from member where id='$userid'"; //$_SESSION[userid]
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);
    
    $hp=explode("-",$row[hp]); //기준,분리시킬문자열
    $hp1=$hp[0];
    $hp2=$hp[1];
    $hp3=$hp[2];
    
    $email=explode("@",$row[email]);
    $email1=$email[0];
    $email2=$email[1];
    
    mysql_close();
?>
<body>
    <div id="wrap">
        <div id="header">
            <? include "../lib/top_login2.php" ?>
        </div>
        <div id="menu">
            <? include "../lib/top_menu2.php" ?>
        </div>
        <div id="content">
           <div id="col1">
              <div id="left_menu">
               <? include "../lib/left_menu.php" ?>
               </div>
           </div>
           <div id="col2">
               <form action="modify.php" method="post" name="member_form">
                   <div id="title">
                       <img src="../img/title_member_modify.gif" alt="회원정보수정">
                   </div>
                   <div id="form_join">
                       <div id="join1">
                           <ul>
                               <li>아이디</li>
                               <li>*비밀번호</li>
                               <li>*비밀번호 확인</li>
                               <li>*이 름</li>
                               <li>*닉네임</li>
                               <li>*휴대폰</li>
                               <li>이메일</li>
                           </ul>
                       </div>
                       <div id="join2">
                           <ul>
                               <li><?= $row[id] ?></li> <!-- = : 출력문 echo-->
                                <li><input type="password" name="pass" value="<?= $row[pass] ?>"></li>
                                <li><input type="password" name="pass_confirm" value="<?= $row[pass] ?>"></li>
                                <li><input type="text" name="name" value="<?= $row[name] ?>"></li>
                                <li><div id="nick1"><input type="text" name="nick" value="<?= $row[nick] ?>"></div>
                                   <div id="nick2"><a href="#"><img src="../img/check_id.gif" onclick="check_nick()" alt="중복확인"></a></div>
                                </li>
                                <li><input type="text" class="hp" name="hp1" value="<?= $hp1 ?>"> - <input type="text" class="hp" name="hp2" value="<?= $hp2 ?>"> -
                                <input type="text" class="hp" name="hp3" value="<?= $hp3 ?>">
                                </li>
                                <li><input type="text" id="email1" name="email1" value="<?= $email1 ?>"> @ <input type="text" name="email2" value="<?= $email2 ?>"></li>
                           </ul>
                       </div>
                       <div class="clear"></div>
                       <div id="must">*는 필수 입력 항목 입니다.^^</div>
                   </div>
                   <div id="button">
                       <a href="#"><img src="../img/button_save.gif" onclick="check_input()" alt="저장하기"></a>
                       <a href="#"><img src="../img/button_reset.gif" onclick="reset_form()" alt="취소하기"></a>
                   </div>
               </form>
           </div>
        </div>
    </div>
</body>
</html>