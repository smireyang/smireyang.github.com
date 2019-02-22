<!DOCTYPE html>
<html>

<head>
   <?php include 'head.php' ?>
    
    <link rel="stylesheet" type="text/css" media="screen" href="css/sub.css" />
    <!-- 서브 스타일시트 -->
</head>

<body>
    <?php include 'header.php' ?>
    <div class="medicalimg"></div>
    <?php include 'snb.php' ?>
    <div class="content">
        <h1 class="sub_title">산부인과</h1>
        <div class="sub_call">
            <h3><span>진료예약 및 전화 상담</span> : 041-577-8888</h3>
        </div>
        <h3 class="sub_title_s"><div class="sub_title_line"></div>진료시간</h3>
        <div class="medical_time">
            <table class="sub_table" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <th class="firstth">평일</th>
                    <td class="firsttd lasttd">오전 9:00 ~ 오후 6:00 / 야간진료 오후 7시까지</td>
                </tr>
                <tr>
                    <th>토요일</th>
                    <td class="lasttd">오전 9:00 ~ 오후 1:00 / 오후진료 오후 3시까지</td>
                </tr>
                <tr>
                    <th>공휴일</th>
                    <td class="lasttd">오전 9:00 ~ 오후 1:00</td>
                </tr>
                <tr>
                    <th>일요일</th>
                    <td class="lasttd">휴진</td>
                </tr>
                <tr>
                    <th>점심시간</th>
                    <td class="lasttd">오후 1:00 ~ 오후 2:00</td>
                </tr>
                <tr>
                    <th><span>분만/응급</span></th>
                    <td class="lasttd"><span>24시간 전문의 분만 및 응급진료 가능</span></td>
                </tr>
                <colgroup>
                    <col style="width: 50%;" />
                    <col style="width: 50%;" />
                </colgroup>
            </table>
        </div>
        <h3 class="sub_title_s"><div class="sub_title_line"></div>의료진소개</h3>
        <div class="medical_thum">
            <ul>
                <li>
                    <div class="thum"><a href="#"><img src="img/sub/medical01_p01.png" /> </a></div>
                    <div class="thum_info">
                        <p>이길우 원장</p>
                    </div>
                </li>
                <li>
                    <div class="thum"><a href="#"><img src="img/sub/medical01_p02.png" /> </a></div>
                    <div class="thum_info">
                        <p>윤창범 원장</p>
                    </div>
                </li>
                <li>
                    <div class="thum"><a href="#"><img src="img/sub/medical01_p03.png" /> </a></div>
                    <div class="thum_info">
                        <p>배동한 원장</p>
                    </div>
                </li>
            </ul>
        </div>
        <h3 class="sub_title_s"><div class="sub_title_line"></div>의료진별 진료시간</h3>
        <table class="sub_table" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <th class="firstth">&nbsp;</th>
                <th class="firstth">구분</th>
                <th class="firstth">월</th>
                <th class="firstth">화</th>
                <th class="firstth">수</th>
                <th class="firstth">목</th>
                <th class="firstth">금</th>
                <th class="firstth lastth">토</th>
            </tr>
            <tr>
                <td rowspan="2"><strong>이길우 원장</strong></td>
                <th>오전</th>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td class="lasttd">진료</td>
            </tr>
            <tr>
                <th>오후</th>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td><span>휴진</span></td>
                <td>진료</td>
                <td class="lasttd"><span class="blue">문의</span></td>
            </tr>
            <tr>
                <td rowspan="2"><strong>윤창범 원장</strong></td>
                <th>오전</th>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td class="lasttd">진료</td>
            </tr>
            <tr>
                <th>오후</th>
                <td>진료</td>
                <td>진료</td>
                <td><span>휴진</span></td>
                <td>진료</td>
                <td>진료</td>
                <td class="lasttd"><span class="blue">문의</span></td>
            </tr>
            <tr>
                <td rowspan="2"><strong>배동한 원장</strong></td>
                <th>오전</th>
                <td><span>휴진</span></td>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td><span>휴진</span></td>
                <td class="lasttd"><span>휴진</span></td>
            </tr>
            <tr>
                <th>오후</th>
                <td><span>휴진</span></td>
                <td>진료</td>
                <td>진료</td>
                <td>진료</td>
                <td><span>휴진</span></td>
                <td class="lasttd"><span>휴진</span></td>
            </tr>
        </table>
    </div>
    <?php include 'quickmenu.php' ?>
    <?php include 'footer.php' ?>
</body>

</html>