<?php
session_start();

foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/member.css">
    <script>
        function check_input(){
            if(!document.member_form.id.value){
                alert("아이디를 입력하세요!!!");
                document.member_form.id.focus();
                return;
            }
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
        function check_id(){
            window.open("check_id.php?id="+document.member_form.id.value,"IDcheck",
                       "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
        }
        function check_nick(){
            window.open("check_nick.php?nick="+document.member_form.nick.value,"NICKcheck",
                       "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
        }
    </script>
</head>
<body>
    <div id="wrap">
        <div id="content">
           <div id="col2">
               <form action="insert.php" method="post" name="member_form">
                   <div id="title">
                       <h3>회원가입</h3>
                   </div>
                   <div id="form_join">
                       <div id="join1">
                           <ul>
                               <li>아이디</li>
                               <li>비밀번호</li>
                               <li>비밀번호 확인</li>
                               <li>이 름</li>
                               <li>닉네임</li>
                               <li>휴대폰</li>
                               <li>이메일</li>
                           </ul>
                       </div>
                       <div id="join2">
                           <ul>
                               <li><div id="id1"><input type="text" name="id"></div>
                                   <div id="id2"><a href="#">중복확인</a></div>
                                   <div id="id3">4~12자의 영문 소문자,숫자와 특수기호(_)만 사용</div>
                                </li>
                                <li><input type="password" name="pass"></li>
                                <li><input type="password" name="pass_confirm"></li>
                                <li><input type="text" name="name"></li>
                                <li><div id="nick1"><input type="text" name="nick"></div>
                                   <div id="nick2"><a href="#">중복확인</a></div>
                                </li>
                                <li><select class="hp" name="hp1">
                                    <option value="010">010</option>
                                    <option value="070">070</option>
                                </select> - <input type="text" class="hp" name="hp2"> -
                                <input type="text" class="hp" name="hp3">
                                </li>
                                <li><input type="text" id="email1" name="email1"> @ <input type="text" name="email2"></li>
                           </ul>
                       </div>
                       <div class="clear"></div>
                       <div id="must"></div>
                   </div>
                   <div id="button">
                       <a href="#">가입하기</a>
                       <a href="#">취소하기</a>
                   </div>
               </form>
           </div>
        </div>
    </div>
</body>
</html>