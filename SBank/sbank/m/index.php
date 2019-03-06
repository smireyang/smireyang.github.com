<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <section>
        <div class="mb_ixVisual">
            <p class="mb_prevbtn"><img src="../img/back.png" alt="back">
                <!--<i class="fas fa-angle-left"></i>-->
            </p>
            <p class="mb_nextbtn"><img src="../img/next.png" alt="next">
                <!--<i class="fas fa-angle-right"></i>-->
            </p>
            <div class="mb_sliderVisual">
                <div class="mb_visualImg1">
                    <a href="#" onclick="">
                        <h2 class="mb_visualImg1_text"><span class="yellow">새로운 시작!</span><br>S스마트뱅킹 one up<br> <span class="red">2019.2.8 오픈</span></h2>
                    </a><img src="../img/i_can_fly.svg" alt="visualImg1">
                </div>
                <div class="mb_visualImg2">
                    <h2 class="mb_visualImg2_text"><span class="red">사랑하는 사람</span>에게<br>마음을 전하세요.<br>에스은행이 함께 합니다.</h2><img src="../img/super_thank_you.svg" alt="visualImg2">
                </div>
                <!-- <span class="visualImg4">풍성한 가을 당신의 모든 순간에 S뱅크가 함께합니다.</span> -->
                <!-- <span class="visualImg5">깊어지는 겨울, 좋은 사람들과 함께 따뜻한 동화같은 하루</span> -->
            </div>
        </div>
        <!-- //비주얼 image -->
        <!-- tab menu-->
        <div class="tabs">
            <ul class="tab">
                <li><a href="#Easy-banking" class="selected">간편뱅킹</a></li>
                <li><a href="#financial-product">금융상품</a></li>
                <li><a href="#exchange-rate-report">환율정보</a></li>
                <li><a href="#news">새소식</a></li>
            </ul>
            <ul class="panel">
                <li id="Easy-banking">
                    <div class="Easy-banking">
                        <a href="#"><i class="fas fa-search-dollar"></i>
                            <!--<i class="fas fa-coins"></i>-->계좌조회</a>
                        <a href="#"><i class="fas fa-dollar-sign"></i>즉시이체</a>
                        <a href="#"><i class="fas fa-file-invoice-dollar"></i>거래내역</a>
                        <a href="#"><img src="../img/bankbook.png" alt="bankbook">통장개설</a>
                        <a href="#"><i class="fas fa-money-check-alt"></i>카드조회</a>
                        <a href="#"><i class="far fa-credit-card"></i>
                            <!--<i class="fas fa-money-check"></i>-->카드등록</a>
                    </div>
                </li>
                <li id="financial-product">
                    <div class="financial-product">
                        <a href="#"><img src="../img/transfer.png" alt="">입출금</a>
                        <a href="#"><i class="fas fa-hand-holding-usd"></i>예금</a>
                        <a href="#"><i class="fas fa-piggy-bank"></i>적금/청약</a>
                        <a href="#"><i class="fas fa-comment-dollar"></i>대출</a>
                        <a href="#"><i class="fas fa-won-sign"></i>외환</a>
                        <a href="#"><i class="fas fa-chart-line"></i>펀드</a>
                    </div>
                </li>
                <li id="exchange-rate-report">
                    <div class="exchange-rate-report">
                        <div class="title">환율정보</div><span class="date">2019.02.15 17:56:50</span>
                        <div class="usd"><img src="../img/united-states.png" alt="USD"> <span>USD</span> 1,143.16</div>
                        <div class="jpy"><img src="../img/japan.png" alt="JPY"> <span>JPY</span> 1,041.12</div>
                        <div class="eur"><img src="../img/european-union.png" alt="EUR"> <span>EUR</span> 1,298.24</div>
                        <div class="cny"><img src="../img/china.png" alt="CNY"> <span>CNY</span> 175.63</div>
                    </div>
                </li>
                <li id="news" class="news">
                    <h3>새소식</h3>
                    <div><a href="#">추가약정서(가계대출 기업대출 금리우대용) 개정 안내</a> <span class="date">2019.02.15</span></div>
                    <div><a href="#"><span>휴면예금 서민금융진흥원 출연 안내</span></a> <span class="date">2019.02.10</span></div>
                    <div><a href="#"><span>예금금리 변경 안내</span></a> <span class="date">2019.02.09</span></div>
                    <div><a href="#"><span>S스마트뱅킹(one up!) 개편 안내</span></a> <span class="date">2019.02.08</span></div>
                    <a class="btnMore" href="#">더보기</a>
                </li>
            </ul>
        </div>
        <!--tab menu End-->
    </section>
    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

</html>
