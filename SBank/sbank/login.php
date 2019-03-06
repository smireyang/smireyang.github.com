<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'head.php' ?>
</head>
<body>
    <?php include 'sub-header.php' ?>
    <section>
    <div class="bankingConInner">
     <div class="bankingTop">
        <img src="img/organizing_project.svg" alt="bankingTopimg">
        <div class="Topdc">
        <p>· S은행은 보안강화 등을 이유로 보안카드번호(3개 이상 또는 전체)를 요구하지 않습니다.<br>· S은행 홈페이지는 인터넷 주소창이 녹색으로 표시되거나 보안 자물쇠가 있습니다.<br>
        · 수사기관 등 공공기관은 어떤 명목으로도 통장 비밀번호 등 금융정보를 묻거나 범죄에 연루되었다는 등의 이유로 돈을 요구하지 않습니다.</p>
        </div>
    </div>
      <div class="certForm">
         <div class="certformInner">
          <h3 class="certTitle">공인인증서 로그인</h3>
          <input type="submit" value="공인인증서 로그인" class="certButton">
          <div class="certCenter">
              <div class="part1"><a href="#"><img src="img/padlock.png" alt="공인인증센터"><span>공인인증센터</span></a></div>
              <div class="part2">
                  <ul>
                      <li><a href="#">인증서 발급/재발급</a> |</li>
                      <li><a href="#">타행/타기관인증서등록</a></li>
                  </ul>
              </div>
             </div>
          </div>
      </div>
      <div class="loginForm">
       <form class="login" id="loginForm">
        <h3 class="loginTitle">이용자 ID 로그인</h3>
        <input type="text" class="loginInput" placeholder="아이디" autofocus required>
        <input type="password" class="loginInput" placeholder="사용자 암호" required>
        <input type="submit" value="로그인" class="loginButton">
        <span><a href="#">아이디 조회</a></span>  <span><a href="#">사용자암호변경/재등록</a></span>  <span><a href="#">회원가입</a></span>
    </form>
    </div>
    <div class="bankingBot">
        <p><span class="red">※</span>고객님의 소중한 정보는 정보보호 국내외 인증을 획득한 SBank의 정보보호 프로그램에 의해 안전하게 보호되고 있습니다.</p>
        <p><i class="fas fa-exclamation-circle"></i> 인터넷뱅킹 종료 시, 안전한 금융거래를 위하여 반드시 [로그아웃] 버튼을 눌러 종료하시기 바랍니다.</p></div>
        </div>
    </section>
    <footer>
        <?php include 'footer.php' ?>
    </footer>
    <!-- // ### footer ### end -->
</body>
</html>