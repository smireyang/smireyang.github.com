<!DOCTYPE html>
<html lang="ko">
<head>
<?php include 'head.php' ?>
</head>
<body>
<!-- wrap -->
<div id="wrap">
	<header id="header">
		<?php include 'header.php' ?>
	</header>
	<section>
	<div id="container">
        <div class="main_rolling_pc">
           <div class="mainimg">
               <img src="img/mainimg.jpg" alt="메리포핀스리턴즈" width="100%">
           <div class="mainimg-dc">
                <a href="https://youtu.be/ZJEDQeeB8eo" class="btn-main-link">영상보기</a>
            </div>
           </div>
            <div class="visualRoll">
                <ul class="viewImgList">
                    <li class="imglist0">
                        <div class="roll_content">
                            <a href="#">
                            <img src="img/m/bg-d_large.jpg" alt="Desney" width="100%"></a>
                            <p class="roll_txtline">
                            <img src="img/logo-d.png" alt="Desney" class="logo">
                                <a href="https://www.instagram.com/disneykorea/" target="_blank">인스타그램</a> |
                                <a href="https://www.facebook.com/DisneyKorea" target="_blank">페이스북</a> |
                                <a href="https://www.youtube.com/DisneyChannelKorea" target="_blank">유튜브</a>
                            </p>
                        </div>
                    </li>
                    <li class="imglist1">
                        <div class="roll_content">
                            <a href="#">
                            <img src="img/m/bg-m_large.jpg" alt="MARVEL" width="100%"></a>
                            <p class="roll_txtline">
                            <img src="img/logo-m.png" alt="MARVEL" class="logo">
                            <a href="https://www.instagram.com/marvelkorea/" target="_blank">인스타그램</a> |
                               <a href="https://www.facebook.com/marvel.kr" target="_blank">페이스북</a> |
                               <a href="https://www.youtube.com/MarvelKorea" target="_blank">유튜브</a> |
                               <a href="https://m.post.naver.com/my.nhn?memberNo=15200157" target="_blank">블로그</a>
                            </p>
                        </div>
                    </li>
                    <li class="imglist2">
                        <div class="roll_content">
                            <a href="#">
                            <img src="img/m/bg-s_large.jpg" alt="STARWARS" width="100%"></a>
                            <p class="roll_txtline">
                            <img src="img/logo-s.png" alt="STARWARS" class="logo">
                                <a href="https://www.instagram.com/starwarskorea" target="_blank">인스타그램</a> |
                                <a href="https://www.facebook.com/starwars.kr" target="_blank">페이스북</a> |
                                <a href="https://www.youtube.com/channel/UCGf-sXt1hwYeqLh9Y6m5obQ" target="_blank">유튜브</a>
                            </p>
                        </div>
                    </li>
                </ul>

                <div class="rollbtnArea">
                    <ul class="rollingbtn">
                        <li class="seq butt0"><a href="#butt" onclick="return false;"><img src="img/btn_rollbutt_on.png" alt="1번" /></a></li>
                        <li class="seq butt1"><a href="#butt" onclick="return false;"><img src="img/btn_rollbutt_off.png" alt="2번" /></a></li>
                        <li class="seq butt2"><a href="#butt" onclick="return false;"><img src="img/btn_rollbutt_off.png" alt="3번" /></a></li>
                        <li class="rollstop"><a href="#" class="stop" onclick="return false;"><img src="img/btn_roll_stop.png" alt="멈춤" /></a></li>
                        <li class="rollplay"><a href="#" class="play" onclick="return false;"><img src="img/btn_roll_play.png" alt="재생" /></a></li>
                    </ul>
                </div><!-- //rollbtnArea -->

            </div><!-- //visualRoll -->
        </div><!-- //main_rolling_pc -->
        
        <div class="main_rolling_mobile">
           <div class="mainimg">
           <img src="img/m/mainimg.jpg" alt="메리포핀스리턴즈" width="100%">
           <div class="mainimg-dc">
                <a href="https://youtu.be/ZJEDQeeB8eo" class="btn-main-link">영상보기</a>
            </div>
       </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#"><img src="img/m/bg-d.jpg" alt="DISNEY"></a></a>
                        <p class="swiper_txtline">
                            <img src="img/m/logo-d.png" alt="Desney" class="logo">
                                <a href="https://www.instagram.com/disneykorea/" target="_blank">인스타그램</a> |
                                <a href="https://www.facebook.com/DisneyKorea" target="_blank">페이스북</a> |
                                <a href="https://www.youtube.com/DisneyChannelKorea" target="_blank">유튜브</a>
                            </p>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="img/m/bg-m.jpg" alt="MARVEL"></a></a>
                        <p class="swiper_txtline">
                            <img src="img/m/logo-m.png" alt="MARVEL" class="logo">
                            <a href="https://www.instagram.com/marvelkorea/" target="_blank">인스타그램</a> |
                               <a href="https://www.facebook.com/marvel.kr" target="_blank">페이스북</a> |
                               <a href="https://www.youtube.com/MarvelKorea" target="_blank">유튜브</a> |
                               <a href="https://m.post.naver.com/my.nhn?memberNo=15200157" target="_blank">블로그</a>
                            </p>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="img/m/bg-s.jpg" alt="STARWARS"></a></a>
                        <p class="swiper_txtline">
                            <img src="img/logo-s.png" alt="STARWARS" class="logo">
                                <a href="https://www.instagram.com/starwarskorea" target="_blank">인스타그램</a> |
                                <a href="https://www.facebook.com/starwars.kr" target="_blank">페이스북</a> |
                                <a href="https://www.youtube.com/channel/UCGf-sXt1hwYeqLh9Y6m5obQ" target="_blank">유튜브</a>
                            </p>
                    </div>
                </div>						
                <div class="swiper-pagination"></div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                
            </div><!--//swiper-container-->
        </div><!--//main_rolling_mobile -->
    </div>
    </section>
    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>
</html>
