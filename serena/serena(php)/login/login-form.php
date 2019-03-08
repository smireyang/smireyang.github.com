<?php session_start(); 

foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
}
?>
 <!DOCTYPE html>
<html>
<body>
  <meta charset="utf-8">
   <div id="form_login">
    <?
    if(!$userid)
    {
    ?>
    <form name="member_form" method="post" action="./login/login.php">
           <div id="login_form">
               <div id="login">
                   <div id="login_msg">
                      <h2>Member Login</h2>
                    </div>
                   <div id="id_pw_input">
                       <ul>
                           <li class="idbox"><label for="id">ID :</label><input type="text" name="id" class="login_input" placeholder="" id="id"></li>
                           <li class="pwbox"><label for="pw">PW :</label><input type="password" name="pass" class="login_input" placeholder="" id="pw"></li>
                       </ul>
                   </div>
                   <div id="login_button">
                       <input type="submit" value="Login">
                   </div>
                   <div class="clear"></div>
                   <div id="login_line"></div>
                   <div id="join_button">
                       <a href="../member/member_form.php">
                       회원가입</a> |
                       <a href="../member/member_form.php">
                       아이디/비밀번호 찾기</a> |
                       <a href="../member/member_form.php">
                       비회원 주문조회</a>
                   </div>
               </div> 
           </div>
       </form>
    <?
    }else
    {
    ?>
    <?=$usernick?>(level:<?=$userlevel?>) 
    <a href="./login/logout.php">로그아웃</a>
    <a href="./login/member_form_modify.php">정보수정</a>
    <?
    }
    ?>
</div>
</body>
</html>