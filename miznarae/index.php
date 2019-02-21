<!DOCTYPE html>
<html>

<head>
    <!-- 헤더,푸터의 스크립트,css -->
    <?php include 'head.php';?>
    
    <link rel="stylesheet" type="text/css" href="css/main-slide.css">
    <link rel="stylesheet"type="text/css"href="css/main.css"/>
    
    <script type="text/javascript">
        $(function () {
            $('.top-banner').slick({
                dots: true, // 네비게이션(아래의 점들) 보여주기
                infinite: true, //루프되게
                slidesToShow: 1, //한번에 보여주는 아이템의 개수
                // slidesToScroll: 1, // 몇개단위로 페이지가 넘어가는지 설정
                autoplay: true, //자동으로 넘어가게
                autoplaySpeed: 3000, //넘어가는 속도 설정
                // centerMode:false, //센터모드 - 좌우의 안보이는 아이템을 일부 보이게 해줌
                // centerPadding: '40px' //센터모드시 좌우의 아이템을 얼마나 보이게 해줄지 설정
            });
        });
    </script>
</head>

<body>
	<!-- 헤더 -->
	<?php include 'header.php';?>
	<?php include 'slide.php';?>

	<div class="content">
		<div class="row1">
			<section class="top-content"><!--
	--><div class="top-content__menu">
					<li>
						<a href="#">배동한 원장 진료</a>
					</li>
					<li>
						<a href="#">동계진료시간 단축안내</a>
					</li>
					<li>
						<a href="#">난임 건강보험 적용</a>
					</li>
					<li>
						<a href="#">시험관 아기 탄생</a>
					</li>
				</div><!--
					--><div class="top-content__body">
					<img src="img/Untitled-1.png" />
				</div><!--
	--></section>
			<section class="reserve clearfix">
				<h2 class="reserve__title"><i class="far fa-calendar-check"></i><span>간편 예약<span></h2>
				<div class="clearfix">
				<div class="reserve__left">
					<div class="reserve__input-container clearfix">
						<label>원장님</label>
						<input class="reserve__doctor" type="text" name="doctor">
					</div>
					<div class="reserve__input-container clearfix">
						<label>이름</label>
						<input class="reserve__name" type="text" name="name">
					</div>
					<div class="reserve__input-container clearfix">
						<label>휴대전화</label>
						<input class="reserve__phone" type="text" name="phone">
					</div>
				</div>

				<div class="reserve__right">
					<textarea class="reserve__detail" name="detail" placeholder="증상을 말씀해주세요"></textarea>
				</div>
				</div>

				<a href="#" class="reserve__button">
					예약신청
				</a>
			</section>
		</div>
		<div class="row2">
			<section class="box box--nomargin">
					<h4><img src="img/icon1.PNG" />공지사항 <i class="fas fa-plus-circle"></i></h4>

				<p>
					공지사항입니다 공지사항입니다
				</p>
				<p>
					공지사항입니다 공지사항입니다
				</p>
				<p>
					공지사항입니다 공지사항입니다
				</p>
				<p>
					공지사항입니다 공지사항입니다
				</p>
				<p>
					공지사항입니다 공지사항입니다
				</p>
				<p>
					공지사항입니다 공지사항입니다
				</p>
				<p>
					공지사항입니다 공지사항입니다
				</p>
			</section>

			<div class="box">
					
					<h4><img src="img/icon2.PNG" />진료안내</h4>
				<p>
				<strong>평일</strong><span> 오전9:00~오후6:00</span>
				</p>
				<p>
					<strong>평일야간</strong><span> 오후6:00~오후7:00</span>
				</p>
				<p>
					<strong>토요일</strong><span> 오전9:00~오후1:00</span>
				</p>
				<p>
					<strong>토요일야간</strong><span> 오전9:00~오후1:00</span>
				</p>
				<p>
					<strong>일요일</strong><span> 휴진</span>
				</p>
				<p>
					<strong>공휴일</strong><span> 오전9:00~오후1:00</span>
				</p>
				<a class="box__button" href="reserve.php">
					예약 신청
				</a>
			</div>
			<div class="box">
					
					<h4><img src="img/icon3.PNG" />증명서발급</h4>
				<p>
					<strong>1.</strong> 원무과에서 발급신청 구비서류 제출
				</p>

				<p>
					<strong>2.</strong>주치의 상담
				</p>

				<p>
					<strong>3.</strong>원무과에서 수납 증명서발행
				</p>
				<a class="box__button" href="certificate.php">
						자세히 보기
				</a>
			</div>
			<div class="box">
					
					<h4><img src="img/icon4.PNG" />이용후기 <i class="fas fa-plus-circle"></i></h4>
				<p>
					이용 후기 입니다, 이용후기 입니다
				</p>
				<p>
					이용 후기 입니다, 이용후기 입니다
				</p>
				<p>
					이용 후기 입니다, 이용후기 입니다
				</p>
				<p>
					이용 후기 입니다, 이용후기 입니다
				</p>
				<p>
					이용 후기 입니다, 이용후기 입니다
				</p>
				<p>
					이용 후기 입니다, 이용후기 입니다
				</p>
				<p>
					이용 후기 입니다, 이용후기 입니다
				</p>
			</div>
		</div>
		<div class="row3 clearfix">
			<section class="bottom_menu1">
				<div class="bottom_container">
				<div class="bottom_menu__text">
					<h2>감성분만</h2>
					<br /><br />
					<p>
						산모와 아이가 주인공이 되어 서로 감성을 느끼면서
						<br />
						출산을 하는 것을 말합니다.
					</p>
					<div class="bottom_menu__button">
						<a href="delivery.php">자세히 ></a>
					</div>
				</div>
				</div>
			</section>

			<section class="bottom_menu2">
				<div class="bottom_container">
					<div class="bottom_menu__text">
						<h2>난임센터</h2>
						<br /><br />
						<p>
							어여쁜 아이의 엄마가 될수 있습니다.
							<br />
							행복함을 느껴보세요.
						</p>
						<div class="bottom_menu__button">
							<a href="infertility.php">자세히 ></a>
						</div>
					</div>
				</div>
			</section>
		</div>


			<div class="map">
				<div class="map__title">

					<h1>오시는길
						<!-- <i class="fas fa-map-marker-alt"></i> -->
					</h1>
					<br>
					<p>미즈나래여성병원 으로 오시는 길을 알려드립니다.</p>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.0682629280755!2d127.1240102148119!3d36.792913675810425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ad7f8a2020857%3A0x255e3fa5a82649a!2z66-47KaI64KY656Y7Jes7ISx67OR7JuQ!5e0!3m2!1sko!2skr!4v1546841666608"
				 width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
	</div>

</body>

<!-- 푸터 -->
<?php include 'footer.php';?>

</html>