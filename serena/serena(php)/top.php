<div class="top-inner">
            <div class="top-left"><a href="#"><i class="fas fa-map-marker-alt"></i> 매장안내</a></div>
            <dl>
              <?
                if(!$_SESSION[userid])
                {
                ?>
               <div class="login">
                <dt><a href="#">로그인</a></dt>
                <dd> <? include 'login/login-form.php' ?> </dd>
                <a href="./member/member_form.php">회원가입</a> <a href="#">마이 페이지</a> <a href="#"><i class="far fa-heart"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
                <?
                }else
                {
                ?>
                <div class="login">
                <a href="./login/logout.php">로그아웃</a>
                <a href="#">마이 페이지</a> <a href="#"><i class="far fa-heart"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
                <?
                }
                ?>
            </dl>
        </div>