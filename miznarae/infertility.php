<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php' ?>
    
    <link rel="stylesheet" type="text/css" media="screen" href="css/sub.css" />
    <!-- 서브 스타일시트 -->
    
    <script type="text/javascript">
        $(function() {
            //난임센터 탭메뉴
            $("ul.infertility_panel li:not(#tab1)").hide();
            $("ul.infertility_tab li a").click(function() {
                $("ul.infertility_tab li a").removeClass("selected");
                $(this).addClass("selected");
                $("ul.infertility_panel li").fadeOut("fast");
                $($(this).attr("href")).fadeIn("fast");
                return false;
            });
        });
    </script>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="infertilityimg"></div>
    <?php include 'snb.php' ?>
    <div class="content">
        <h1 class="sub_title">난임이란</h1>
        <div class="infertility_tabs">
            <ul class="infertility_tab">
                <li><a href="#tab1" class="selected">난임이란</a></li>
                <li><a href="#tab2">원인</a></li>
                <li><a href="#tab3">검사</a></li>
                <li><a href="#tab4">치료</a></li>
                <li><a href="#tab5" class="five_tab">건강보험적용 안내</a></li>
            </ul>
            <ul class="infertility_panel">
                <li id="tab1">
                    <h3 class="sub_title_s"><div class="sub_title_line"></div>난임이란</h3>
                    <h2 class="sub_text_title">어여쁜 아이의 엄마가 될 수 있습니다.</h2>
                    <h3 class="sub_text_title_s">미즈나래여성병원은 아이의 행복함을 느끼실 수 있도록 최선을 다하겠습니다.</h3>
                    <div class="infertility_text">
                        <p><strong><span class="org">35세 미만의 여성</span></strong> : 정상적인 부부 관계를 1년 동안 가졌는데도 불구하고 임신이 되지 않는 경우<br />
                            <strong><span class="org">35세 이상의 여성</span></strong> : 정상적인 부부 관계를 6개월 동안 가졌는데도 불구하고 임신이 되지 않는 경우</p>
                    </div>
                    <div class="sub_img"><img src="img/sub/infertility01.png" /></div>
                    <div class="sub_call">
                        <h3>
                            <div class="visit_counseling"><span>방문상담</span> : 미즈나래 여성병원 3층 난임(불임) 연구실 </div>
                            <div class="call_counseling"><span>전화상담</span> : 041-570-3034</div>
                        </h3>
                    </div>
                </li>
                <li id="tab2">
                    <h3 class="sub_title_s"><div class="sub_title_line"></div>난임의 원인</h3>
                    <table class="sub_table" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <th colspan="2" style="color:#e96166;" class="firstth">여성</th>
                            <th colspan="2" style="color:#e96166;" class="firstth lastth">남성</th>
                        </tr>
                        <tr>
                            <td rowspan="2"><strong>배란요인</strong></td>
                            <td>다낭성난소증후군</td>
                            <td rowspan="3"><strong>내분비학적장애</strong></td>
                            <td rowspan="3" class="lasttd">단일유전자 돌연변이</td>
                        </tr>
                        <tr>
                            <td>조기난소부전증</td>
                        </tr>
                        <tr>
                            <td rowspan="2"><strong>난관요인</strong></td>
                            <td>난관폐색</td>
                        </tr>
                        <tr>
                            <td>난관유착</td>
                            <td rowspan="4"><strong>성선장애</strong></td>
                            <td class="lasttd">글라인펠터증후군</td>
                        </tr>
                        <tr>
                            <td rowspan="3"><strong>자궁요인</strong></td>
                            <td>자궁외임신</td>
                            <td class="lasttd">정계정맥류</td>
                        </tr>
                        <tr>
                            <td>자궁근종</td>
                            <!--                        <td rowspan="2">성선장애</td>-->
                            <td class="lasttd">부고환폐쇄 혹은 기능저하</td>
                        </tr>
                        <tr>
                            <td>자궁내유착</td>
                            <td class="lasttd">환경호르몬</td>
                        </tr>
                        <colgroup>
                            <col style="width: 20%;" />
                            <col style="width: 30%;" />
                            <col style="width: 20%;" />
                            <col style="width: 30%;" />
                        </colgroup>
                    </table>
                </li>
                <li id="tab3">
                    <h3 class="sub_title_s"><div class="sub_title_line"></div>난임의 검사</h3>
                    <table class="sub_table" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <th class="firstth" style="color:#e96166;">여성</th>
                            <th class="firstth lastth" style="color:#e96166;">남성</th>
                        </tr>
                        <tr>
                            <td>1. 기본검사 및 호르몬 검사</td>
                            <td class="lasttd">1. 정액 검사</td>
                        </tr>
                        <tr>
                            <td>2. 자궁난관 조영술 혹은 자궁난관 조영초음파</td>
                            <td class="lasttd">2. 내분비 검사</td>
                        </tr>
                        <tr>
                            <td>3. 질 초음파 검사</td>
                            <td class="lasttd">3. 염색체 검사</td>
                        </tr>
                        <tr>
                            <td>4. 황체호르몬 검사</td>
                            <td class="lasttd">4. 고환조직 검사</td>
                        </tr>
                        <colgroup>
                            <col style="width: 50%;" />
                            <col />
                        </colgroup>
                    </table>
                </li>
                <li id="tab4">
                    <h3 class="sub_title_s"><div class="sub_title_line"></div>난임의 치료</h3>
                    <div class="infertility_text">
                        <p><strong><span>인공수정</span></strong> : 운동성이 좋은 정자만을 골라내어 자궁 내로 주입하는 시술</p>
                        <span class="infertility_solution l_h">생리 2~3일<br>병원내원</span> <i class="fas fa-angle-right"></i>
                        <span class="infertility_solution">배란유도제 투여</span> <i class="fas fa-angle-right"></i>
                        <span class="infertility_solution l_h">생리 10~12일<br>초음파 검사</span> <i class="fas fa-angle-right"></i>
                        <span class="infertility_solution l_h">배란일 선정 후<br>인공수정 시행</span>
                        <p><strong><span>체외수정</span></strong> : 과배란을 통해 여러 개의 난자를 채취하고, 체외에서 난자와 정자를 수정시켜서 얻어진 배아를 자궁 내에 이식하는 시술로 현재 난임 환자들에게 가장 적극적인 불임치료 방법</p>
                        <span class="infertility_solution">과배란 유도</span> <i class="fas fa-angle-right"></i>
                        <span class="infertility_solution">난자, 정자 채취</span> <i class="fas fa-angle-right"></i>
                        <span class="infertility_solution l_h">체외에서<br>수정 후 배양</span> <i class="fas fa-angle-right"></i>
                        <span class="infertility_solution">배아이식</span> <i class="fas fa-angle-right"></i>
                        <span class="infertility_solution l_h">잔여배아<br>냉동보관</span>
                    </div>
                </li>
                <li id="tab5">
                    <h3 class="sub_title_s"><div class="sub_title_line"></div>난임시술 건강보험적용 안내</h3>
                    <div class="infertility_text">
                        <p><strong><span>1. 급여대상</span></strong><br />
                            ○ 법적 혼인상태에 있는 난임부부로 여성 연령이 만 44세 이하인 자<br />
                            - 보조생식술 진료 시작일 당일에 만 44세 이하인 경우 해당 진료기간은 급여<br />
                            ○ 보조생식술 급여기준의 보조생식술 적응 중에 해당하는 자<br />
                            &rarr; 해당 기준 이외는 보조생식술 시술행위 비급여, 약제 전액본인부담</p>
                        <table class="sub_table" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <th class="firstth">구분</th>
                                    <th class="firstth">급여대상자</th>
                                    <th class="firstth lastth">급여대상자 이외</th>
                                </tr>
                                <tr>
                                    <td>보조생식술 시술행위</td>
                                    <td>급여</td>
                                    <td class="lasttd">비급여</td>
                                </tr>
                                <tr>
                                    <td>약제</td>
                                    <td>급여</td>
                                    <td class="lasttd">전액본인부담</td>
                                </tr>
                                <tr>
                                    <td>그 외 진료비용</td>
                                    <td>급여</td>
                                    <td class="lasttd">급여</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mgt"><strong><span>2. 급여횟수</span></strong><br />
                            ○ 신선배아 4회, 동결배아 3회, 인공수정 3회-신선과 동결 횟수 교차적용 불가<br />
                            (보조생식술 시술행위 실시 전에 중단한 경우 급여횟수에서 미차감)<br />
                            ○ 지원사업에서 지원횟수와 연계산정<br />
                            - 소득수준 및 교차적용 여부와 상관없이 기 지원횟수 차감 후 적용<br />
                            - 기존 지원사업에 의한 시술이 진행 중인 경우 9월까지는 지원<br />
                            (10월 이후의 시술은 급여 적용)</p>
                        <table class="sub_table" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <th colspan="3" class="firstth">지원사업</th>
                                    <th rowspan="8" style="background: #fff; border-top:1px solid #ccc;">=&gt;</th>
                                    <th colspan="2" class="firstth lastth">급여 적용시 잔여 횟수</th>
                                </tr>
                                <tr>
                                    <td colspan="2">대상자</td>
                                    <td>지원횟수</td>
                                    <td>신선 4회</td>
                                    <td class="lasttd">동결 3회</td>
                                </tr>
                                <tr>
                                    <td rowspan="5">신선배아</td>
                                    <td rowspan="2">3회 지원대상</td>
                                    <td>신선-신선-신선</td>
                                    <td>1회</td>
                                    <td class="lasttd">3회</td>
                                </tr>
                                <tr>
                                    <td>신선-신선-신선-신선(동결대신)</td>
                                    <td>X</td>
                                    <td class="lasttd">3회</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">4회 지원대상</td>
                                    <td>신선-신선-신선</td>
                                    <td>1회</td>
                                    <td class="lasttd">3회</td>
                                </tr>
                                <tr>
                                    <td>신선-신선-신선-신선</td>
                                    <td>X</td>
                                    <td class="lasttd">3회</td>
                                </tr>
                                <tr>
                                    <td>신선-신선-신선-신선-신선(동결대신)</td>
                                    <td>X</td>
                                    <td class="lasttd">3회</td>
                                </tr>
                                <tr>
                                    <td colspan="2">동결배아</td>
                                    <td>신선-동결-동결-동결-동결(신선대신)</td>
                                    <td>3회</td>
                                    <td class="lasttd">X</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mgt"><strong><span>3. 본인부담률</span></strong><br />
                            ○ 종별과 상관없이 본인부담률 30% 적용 (남자 정자채취 행위 포함)<br />
                            - (적용기간) 보조생식술 진료기간<br />
                            - (적용범위) 보조생식술 진료기간의 요양급여비용(진찰료,보조생식술 시술행위료, 마취료, 약제비 등)<br />
                            - 입원의 경우 보조생식술 시술행위료<br />
                            - 보조생식술과 관련된 합병증도 동일 적용(타상병은 현재 본인 부담률 적용)<br />
                            - 의료급여 및 차상위는 행당 본인부담률 적용<br />
                            ○ 급여대상이 아니거나 급여횟수 초과한 경우 종별 본인부담률 적용<br />
                            - 통상적인 진찰료, 마취료 등 행위비용은 급여<br />
                            - 보조생식술 시술행위는 비급여, 관련 약제는 전액 본인부담</p>

                        <p><strong><span>4. 난임시술 의료기관</span></strong><br />
                            ○ 난임시술 의료기관에서 실시한 경우만 급여 적용<br />
                            - [모자보건법] 제11조의 3 및 동법 시행규칙 제8조에 따라 난임시술 의료기관으로 지정된 기관</p>

                        <p><strong><span>미즈나래여성병원은 난임시술 의료기관으로 지정된 기관입니다.</span></strong></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <?php include 'quickmenu.php' ?>
    <?php include 'footer.php' ?>
</body>

</html>