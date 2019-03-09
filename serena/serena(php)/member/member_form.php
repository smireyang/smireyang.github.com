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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-migrate-1.4.1.min.js"></script>
    <script src="../js/common.js"></script>
    <script>
        function check_input(){
            if(!document.member_form.id.value){
                alert("아이디를 입력하세요");
                document.member_form.id.focus();
                return;
            }
            if(!document.member_form.pass.value){
                alert("비밀번호를 입력하세요");
                document.member_form.pass.focus();
                return;
            }
            if(!document.member_form.pass_confirm.value){
                alert("비밀번호확인을 입력하세요");
                document.member_form.pass_confirm.focus();
                return;
            }
            if(!document.member_form.name.value){
                alert("이름을 입력하세요.");
                document.member_form.name.focus();
                return;
            }
            if(!document.member_form.nick.value){
                alert("닉네임을 입력하세요.");
                document.member_form.nick.focus();
                return;
            }
            if(!document.member_form.hp2.value || !document.member_form.hp3.value){
                alert("휴대폰 번호를 입력하세요");
                document.member_form.hp2.focus();
                return;
            }
            if(document.member_form.pass.value != document.member_form.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다. 다시 입력해주세요.");
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
<div class="top">
        <div class="top-inner">
            <div class="top-left"><a href="#"><i class="fas fa-map-marker-alt"></i> 매장안내</a></div>
            <dl>
              <?
                if(!$_SESSION[userid])
                {
                ?>
               <div class="login">
                <dt><a href="#">로그인</a></dt>
                <dd> <? include '../login/login-form.php' ?> </dd>
                <a href="#">회원가입</a> <a href="#">마이 페이지</a> <a href="#"><i class="far fa-heart"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
                <?
                }else
                {
                ?>
                <div class="login">
                <a href="../login/logout.php">로그아웃</a>
                <a href="#">마이 페이지</a> <a href="#"><i class="far fa-heart"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
                <?
                }
                ?>
            </dl>
        </div>
    </div>
    <header>
        <div class="header-inner">
            <div class="logo">
                <a href="../index.php">
                    <h1>Serena</h1><span>®</span>
                </a>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Handbags</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Sale</a></li>
                </ul>
            </div>
            <div class="searchbar">
                <form>
                    <input type="text" class="input-search" />
                    <button>
                        <!--<i class="fas fa-search"></i>--> <img src="../images/search.png" alt="search"></button>
                </form>
            </div>
        </div>
        <div class="sub-navi">
                <div class="wrap">
                    <div class="sub-menu">
                        <ul class="sub sub1">
                            <li><a href="../sub.php">Outer</a></li>
                            <li><a href="../sub.php">Ops</a></li>
                            <li><a href="../sub.php">Top</a></li>
                            <li><a href="../sub.php">Bottom</a></li>
                        </ul>
                        <ul class="sub sub2">
                            <li><a href="../sub.php">Clutch</a></li>
                            <li><a href="../sub.php">Satchel</a></li>
                            <li><a href="../sub.php">Tote</a></li>
                            <li><a href="../sub.php">Shoulder</a></li>
                        </ul>
                        <ul class="sub sub3">
                            <li><a href="../sub.php">Flat</a></li>
                            <li><a href="../sub.php">Sneakers</a></li>
                            <li><a href="../sub.php">Boots</a></li>
                        </ul>
                        <ul class="sub sub4">
                            <li><a href="../sub.php">Earring</a></li>
                            <li><a href="../sub.php">Necklace</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>
    <div class="message">
           <div class="message-inner">
            <a href="#">
                <h5>무료 배송 & 무료 선물포장 서비스 I 자세히 보기</h5>
            </a>
            <a href="#">
                <h5>소중한 사람을 위한 기프트 5% 할인 코드: SRGIFT2019ㅣ자세히 보기</h5>
            </a>
            <a href="#">
                <h5>온라인 단독 상품 최대 40% 세일!(기존 30%+추가10%) I 바로가기</h5>
            </a>
            </div>
        </div>
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
                                   <div id="id2"><a href="#" onclick="check_id()">중복확인</a></div>
                                   <div id="id3">4~12자의 영문 소문자,숫자와 특수기호(_)만 사용</div>
                                </li>
                                <li><input type="password" name="pass"></li>
                                <li><input type="password" name="pass_confirm"></li>
                                <li><input type="text" name="name"></li>
                                <li><div id="nick1"><input type="text" name="nick"></div>
                                   <div id="nick2"><a href="#" onclick="check_nick()">중복확인</a></div>
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
    <div class="clear"></div>
    <footer>
        <div class="foot-inner">
            <div class="customer">
            <h2><i class="fas fa-mobile-alt"></i> 1599-0000</h2>
                <p><span>OPEN PM 1:00 - PM 5:00</span> SAT/SUN/HOLIDAY OFF</p>
            </div>
            <!-- company-info -->
            <div class="company-info">
                <address>
                    <span>세레나<span>®</span></span>
                    <span>서울특별시 강남구</span> <span>대표 김예나</span><br>
                    사업자 등록번호 101-00-00000 <span>통신판매업 신고번호 제 2019-서울강남-00000</span>
                </address>
                <p>© 2019 Serena All rights reserved.</p>
            </div>
            <!-- //company-info -->
            <div class="mark">
                <a href="#"><img src="../images/mark.gif" alt="mark1"></a>
                <p>
				고객님의 안전거래를 위해 현금성 결제 시 저희 쇼핑몰에서 가입한 구매안전(에스크로) 서비스를 이용하실 수 있습니다.
				</p>
            </div>
        </div>
    </footer>
    
   
</body>
</html>