<?php session_start(); 
foreach($_GET as $key =>$value){
	${$key}=$value;
}
foreach($_POST as $key =>$value){
	${$key}=$value;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Serena®</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link href="css/member.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/common.js"></script>
</head>

<body>
    <div class="top">
        <div class="top-inner">
            <div class="top-left"><a href="#"><i class="fas fa-map-marker-alt"></i> 매장안내</a></div>
            <dl>
              <?
                if(!$userid)
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
    </div>
    <header>
        <div class="header-inner">
            <div class="logo">
                <a href="#">
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
                        <!--<i class="fas fa-search"></i>--> <img src="images/search.png" alt="search"></button>
                </form>
            </div>
        </div>
        <div class="sub-navi">
                <div class="wrap">
                    <div class="sub-menu">
                        <ul class="sub sub1">
                            <li><a href="sub.html">Outer</a></li>
                            <li><a href="sub.html">Ops</a></li>
                            <li><a href="sub.html">Top</a></li>
                            <li><a href="sub.html">Bottom</a></li>
                        </ul>
                        <ul class="sub sub2">
                            <li><a href="sub.html">Clutch</a></li>
                            <li><a href="sub.html">Satchel</a></li>
                            <li><a href="sub.html">Tote</a></li>
                            <li><a href="sub.html">Shoulder</a></li>
                        </ul>
                        <ul class="sub sub3">
                            <li><a href="sub.html">Flat</a></li>
                            <li><a href="sub.html">Sneakers</a></li>
                            <li><a href="sub.html">Boots</a></li>
                        </ul>
                        <ul class="sub sub4">
                            <li><a href="sub.html">Earring</a></li>
                            <li><a href="sub.html">Necklace</a></li>
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
        <div class="banner">
            <a href="#">
                <div class="text">
                   <div class="text-inner">
                    <h2>Sale</h2>
                    <h1>UP TO 40% OFF</h1>
                    <button>View Now</button><br>
                    </div>
                </div>
                <video class="video" preload="auto" autoplay="autoplay" muted="" loop="true" height="300em">
                    <source src="images/vedio.mp4" type="video/mp4"></video>
            </a>
        </div>
    <section>
        <div class="product">
            <ul class="clothing">
                <h2>Clothing</h2>
                <a href="sub.html">
                    <div class="more"><!--<i class="far fa-plus-square"></i>--> More</div>
                </a>
                <li><a href="view.html"><img src="images/clothing1.jpg" alt="clothing1">
                        <div class="product-dc">
                            <p>Coat</p>
                            <p>170,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/clothing2.jpg" alt="clothing2">
                        <div class="product-dc">
                            <p>Dress</p>
                            <p>130,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/clothing3.jpg" alt="clothing3">
                        <div class="product-dc">
                            <p>Ops</p>
                            <p>110,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/clothing4.jpg" alt="clothing4">
                        <div class="product-dc">
                            <p>Blouse</p>
                            <p>90,000</p>
                        </div>
                    </a></li>
                <!--<li><img src="images/clothing5.jpg" alt="clothing5"></li>
        <li><img src="images/clothing6.jpg" alt="clothing6"></li>-->
            </ul>
            <ul class="handbag">
                <h2>Handbags</h2>
                <a href="sub.html">
                    <div class="more"><!--<i class="far fa-plus-square"></i>--> More</div>
                </a>
                <li><a href="view.html"><img src="images/bag1.jpg" alt="bag1">
                        <div class="product-dc">
                            <p>Clutch</p>
                            <p>180,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/bag2.jpg" alt="bag2">
                        <div class="product-dc">
                            <p>Satchel</p>
                            <p>220,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/bag3.jpg" alt="bag3">
                        <div class="product-dc">
                            <p>Tote</p>
                            <p>240,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/bag4.jpg" alt="bag4">
                        <div class="product-dc">
                            <p>Shoulder</p>
                            <p>350,000</p>
                        </div>
                    </a></li>
            </ul>
            <ul class="shoes">
                <h2>Shoes</h2>
                <a href="sub.html">
                    <div class="more"><!--<i class="far fa-plus-square"></i>--> More</div>
                </a>
                <li><a href="view.html"><img src="images/shoes1.jpg" alt="shoes1">
                        <div class="product-dc">
                            <p>Flat</p>
                            <p>140,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/shoes2.jpg" alt="shoes2">
                        <div class="product-dc">
                            <p>Sneakers</p>
                            <p>190,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/shoes3.jpg" alt="shoes3">
                        <div class="product-dc">
                            <p>Ankle Bootie</p>
                            <p>250,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/shoes4.jpg" alt="shoes4">
                        <div class="product-dc">
                            <p>Sneakers</p>
                            <p>160,000</p>
                        </div>
                    </a></li>
            </ul>
            <ul class="accessories">
                <h2>Accessories</h2>
                <a href="sub.html">
                    <div class="more"><!--<i class="far fa-plus-square"></i>--> More</div>
                </a>
                <li><a href="view.html"><img src="images/accessories1.jpg" alt="accessories1">
                        <div class="product-dc">
                            <p>Earring</p>
                            <p>100,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/accessories2.jpg" alt="accessories2">
                        <div class="product-dc">
                            <p>Earring</p>
                            <p>130,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/accessories3.jpg" alt="accessories3">
                        <div class="product-dc">
                            <p>Necklace</p>
                            <p>280,000</p>
                        </div>
                    </a></li>
                <li><a href="view.html"><img src="images/accessories4.jpg" alt="accessories4">
                        <div class="product-dc">
                            <p>Necklace</p>
                            <p>230,000</p>
                        </div>
                    </a></li>
            </ul>
        </div>
        <div class="scroll-up"><a href="#header-wrap" title="Top"><i class="far fa-caret-square-up"></i></a></div>
    </section>
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
                <a href="#"><img src="images/mark.gif" alt="mark1"></a>
                <p>
				고객님의 안전거래를 위해 현금성 결제 시 저희 쇼핑몰에서 가입한 구매안전(에스크로) 서비스를 이용하실 수 있습니다.
				</p>
            </div>
        </div>
    </footer>
</body>

</html>


<!--남색 #0079C1
하늘색 #A8CDE0
핑크 #F1677E
