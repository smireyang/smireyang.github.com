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
    <? include 'head.php' ?>
</head>

<body>
    <div class="top">
        <? include 'top.php' ?>
    </div>
    <header>
        <div class="header-inner">
            <div class="logo">
                <a href="index.php">
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
                            <li><a href="sub.php">Outer</a></li>
                            <li><a href="sub.php">Ops</a></li>
                            <li><a href="sub.php">Top</a></li>
                            <li><a href="sub.php">Bottom</a></li>
                        </ul>
                        <ul class="sub sub2">
                            <li><a href="sub.php">Clutch</a></li>
                            <li><a href="sub.php">Satchel</a></li>
                            <li><a href="sub.php">Tote</a></li>
                            <li><a href="sub.php">Shoulder</a></li>
                        </ul>
                        <ul class="sub sub3">
                            <li><a href="sub.php">Flat</a></li>
                            <li><a href="sub.php">Sneakers</a></li>
                            <li><a href="sub.php">Boots</a></li>
                        </ul>
                        <ul class="sub sub4">
                            <li><a href="sub.php">Earring</a></li>
                            <li><a href="sub.php">Necklace</a></li>
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
    <section>
        <div class="product-view-inner">
            <div class="content">
                <!-- location -->
                <div class="page-path"><a href="index.php">Home</a>><a href="sub.php">Clothing</a>><a href="#" style="color:#0c2340; text-decoration-line:line-through;">Detail-View</a></div>
                <!-- //location -->
                <!-- body -->
                <div class="product-view-wrap">
                    <!-- product-view -->
                    <section class="product-view">
                        <!-- view-pager -->
                        <a href="#" class="question"><img src="images/clothing2.jpg" alt="dress"></a>
                        <div class="view-info">
                            <div class="title">
                                <span>STYLE NUMBER SR0000</span>
                                <h1>드레스</h1>
                            </div>
                            <!-- --------가격영역---------- -->
                            <dl class="info">
                                <dt>
                                    <span> 판매가</span> </dt>
                                <dd>
                                    <em>130,000</em>
                                    <a href="#">30%</a>
                                </dd>
                            </dl>
                            <dl class="info">
                                <dt>컬러</dt>
                                <dd>
                                    뉴 아이보리
                                    <ul class="color-type">
                                        <li>
                                            <a href="#">
                                                <span class="color"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl> <!-- 사이즈 영역 -->
                            <!-- 일반상품 사이즈 목록 -->
                            <dl class="info">
                                <dt>사이즈</dt>
                                <dd>
                                    <select>
                                        <option>000</option>
                                        <option>002</option>
                                        <option>004</option>
                                    </select>
                                    <a href="#" class="size-guide">사이즈 가이드</a>
                                </dd>
                            </dl>
                            <!-- 수량선택 영역 -->
                            <dl class="info">
                                <dt>수량</dt>
                                <dd>
                                    <select>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select> </dd>
                            </dl> <!-- 배송방법및배송비 영역 -->
                            <dl class="info">
                                <dt>배송방법/배송비</dt>
                                <dd>
                                    <span>일반택배(무료배송)</span>
                                </dd>
                            </dl>
                            <!-- btn-wrap -->
                            <div class="btn-wrap">
                                <div>
                                    <a href="#" class="btn btn-buy">바로 구매</a>
                                </div>
                                <div>
                                    <a href="#" class="btn">쇼핑백 담기</a>
                                    <a href="#" class="btn">위시리스트에 추가</a>
                                </div>
                                <div class="gift-service">
                                    <div>
                                        <p class="left">무료배송 &amp; 무료선물포장 서비스</p>
                                        <p id="p_layer">자세히보기</p>
                                    </div>
                                    <div id="p_layer_dc">
                                        <p>구매 금액과 관계 없이 전 상품 무료 배송 서비스를 제공해 드리며, 구매 시 선물 포장 서비스를 선택하시면, 세레나만의 럭셔리한 선물포장 서비스를
                                        제공해 드립니다.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //view-info -->
                    </section>
                </div>
                <!-- //product-view -->
                <!-- view-content -->
                <div class="tabs view-content">
                    <ul class="menu-list">
                        <li><a href="#tabs-1" class="selected">상품상세정보</a></li>
                        <li><a href="#tabs-2">상품리뷰 (0)</a></li>
                        <li><a href="#tabs-3">상품 Q &amp; A(1)</a></li>
                        <li><a href="#tabs-4">배송/반품/교환 안내</a></li>
                    </ul>
                    <ul class="panel">
                        <li id="tabs-1">
                            <div class="tabs-1">
                                <!-- explanation -->
                                <section class="section">
                                    <h2>상품설명</h2>
                                    <p>
                                        반소매, 멋진 웨이스트 밴드, 그리고 윤곽을 돋보이게 하는 솔기 선이 돋보이는 드레스입니다. 오피스룩 혹은 주말 외출복 언제나 활용하기 좋은 아이템으로 가지런한 메탈 버튼 장식으로 고급스러운 마무리가 돋보입니다.<br><br>• 64% 폴리에스터, 31% 레이온, 5% 스판<br>• 뒷면 중앙 히든 지퍼 여밈 <br>• 길이: 54" (137 cm)<br>• 드라이 클리닝
                                    </p>
                                </section>
                                <!-- //explanation -->
                                <!-- detail-cut -->
                                <div class="detail-cut">
                                    <h2>DETAIL</h2>
                                    <p><img alt="" src="images/clothing2.jpg"><br></p>
                                </div>
                                <!-- //detail-cut -->
                                <!-- data -->
                                <section class="section product-data">
                                </section> <!-- //data -->
                                <section class="section product-data">
                                    <header>
                                        <h2>취급 시 주의사항</h2>
                                    </header>
                                    <div style="margin-top:-5px;">
                                        <p>1. 이 제품은 반드시 세탁전문점에서 드라이클리닝하십시오.<br>2. 연한 색상의 제품은 반드시 깨끗한 용제로 드라이클리닝하십시오.<br>3. 드라이클리닝 시 단추와 액세서리는 반드시 은박지를 씌우십시오.<br>4. 물에 젖거나 땀이 많이 묻으면 이염, 변색, 탈색될 수 있으니 신속히 세탁하십시오.<br>5. 저온(80~120℃)에서 헝겊을 덮고 다림질하십시오.<br>6. 마찰에 의해 올 뜯김, 보푸라기가 발생할 수 있으므로 주의하십시오.</p>
                                    </div>
                                </section>
                                <section class="section product-data">
                                    <header>
                                        <h2>상품정보</h2>
                                        <span>(전자상거래 등에서의 상품정보제공 고시에 따라 작성되었습니다.)</span>
                                    </header>

                                    <table class="table-row">
                                        <colgroup>
                                            <col style="width: 300px;">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <th>종류</th>
                                                <td class="left">원피스</td>
                                            </tr>
                                            <tr>
                                                <th>제품 주소재</th>
                                                <td class="left">겉감 레이온(비스코스) 35%, 겉감 폴리에스터 61%, 겉감 폴리우레탄 4%, 배색 폴리에스터 100%, 안감 폴리에스터 100%</td>
                                            </tr>
                                            <tr>
                                                <th>색상</th>
                                                <td class="left">뉴 아이보리</td>
                                            </tr>
                                            <tr>
                                                <th>치수</th>
                                                <td class="left">000,002,004,006</td>
                                            </tr>
                                            <tr>
                                                <th>제조자</th>
                                                <td class="left">SERENA LIMITED</td>
                                            </tr>
                                            <tr>
                                                <th>수입자/병행수입</th>
                                                <td class="left">세레나</td>
                                            </tr>
                                            <tr>
                                                <th>제조국</th>
                                                <td class="left">한국</td>
                                            </tr>
                                            <tr>
                                                <th>세탁방법 및 취급시 주의사항</th>
                                                <td class="left">1. 이 제품은 반드시 세탁전문점에서 드라이클리닝하십시오.<br>2. 연한 색상의 제품은 반드시 깨끗한 용제로 드라이클리닝하십시오.<br>3. 드라이클리닝 시 단추와 액세서리는 반드시 은박지를 씌우십시오.<br>4. 물에 젖거나 땀이 많이 묻으면 이염, 변색, 탈색될 수 있으니 신속히 세탁하십시오.<br>5. 저온(80~120℃)에서 헝겊을 덮고 다림질하십시오.<br>6. 마찰에 의해 올 뜯김, 보푸라기가 발생할 수 있으므로 주의하십시오.</td>
                                            </tr>
                                            <tr>
                                                <th>제조연월</th>
                                                <td class="left">2019.01</td>
                                            </tr>
                                            <tr>
                                                <th>품질보증기준</th>
                                                <td class="left">1. 본 제품은 정부 고시 소비자분쟁해결 기준에 의거 고객의 정당한 피해를 보상해 드립니다. - 원단불량, 부자재 불량, 봉제불량, 사이즈 부정확, 부당표시(미표시 및 부실표시) 및 소재구성 부적합으로 인한 세탁사고: 구입일로부터 1년이내분은 무상수리, 교환, 구입가 환불함. 단, 봉제불량은 1년 경과 후에도 무상수선, - 사이즈가 맞지 않거나 디자인, 색상불만 제품 : 구입 후 7일 이내로서 제품에 손상이 없는 경우 동일가격, 동일제품으로 교환함. 상하 일착인경우 한쪽에만 이상이 있어도 일착으로 처리함. 단, 소재 및 디자인이 다른 경우엔 해당 의류만 교환 2. 소비자 부주의에 의한 제품훼손 및 세탁잘못으로 인한 변형 및 품질보증기간(1년)이 경과한 제품에 대해서는 보상의 책임을 지지않으며, 수선가능시에는 실비로 수선해 드립니다.</td>
                                            </tr>
                                            <tr>
                                                <th>AS책임자</th>
                                                <td class="left">세레나 고객상담실 : 1599-0000</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                                <!-- //product-link -->
                            </div>
                        </li>
                        <!-- //tabs-1 -->
                        <li id="tabs-2">
                            <div class="tabs-2">
                                <section class="section review-wrap">
                                    <header>
                                        <h2>상품리뷰</h2>
                                        <div class="right">
                                            <a href="#">리뷰작성</a>
                                        </div>
                                    </header>
                                    <div class="review">
                                        <div class="box01">
                                            <h3>TOTAL</h3>    
                                            <span>0%</span>
                                        </div>
                                        <div class="box02">
                                            <h3>별점</h3>
                                            <dl>
                                                <dt>품질</dt>
                                                <dd>
                                                    <span>0%</span>
                                                </dd>
                                                <dt>포장</dt>
                                                <dd>
                                                    <span>0%</span>
                                                </dd>
                                                <dt>배송</dt>
                                                <dd>
                                                    <span>0%</span>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="box03">
                                            <h3>사이즈</h3>
                                            <dl>
                                                <dt>작아요</dt>
                                                <dd>
                                                <span>0%</span>
                                                </dd>
                                                <dt>딱 맞아요</dt>
                                                <dd>
                                                <span>0%</span>
                                                </dd>
                                                <dt>커요</dt>
                                                <dd>                               
                                                <span>0%</span>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="box04">
                                            <h3>컬러</h3>
                                            <dl>
                                                <dt>밝아요</dt>
                                                <dd>
                                                  <span>0%</span>
                                                </dd>
                                                <dt>화면과 같아요</dt>
                                                <dd>
                                                   <span>0%</span>    
                                                </dd>
                                                <dt>어두워요</dt>
                                                <dd>
                                                <span>0%</span>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </section>
                                <div class="product-review">
                                    <!-- table-header -->
                                    <div class="table-header">
                                        전체 <em>0</em>건
                                        <div class="right">
                                                <a href="#">전체</a>
                                                <a href="#">포토리뷰</a>
                                                <a href="#">텍스트 리뷰</a>
                                            <script>
                                            </script>
                                            <select>
                                                <option>최근 등록순</option>
                                                <option>최고 평점순</option>
                                                <option>최저 평점순</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- //table-header -->
                                    <!-- review-table -->
                                    <div class="review-table">
                                        <table>
                                            <colgroup>
                                                <col style="width: 145px;">
                                                <col>
                                                <col style="width: 145px;">
                                                <col style="width: 100px;">
                                                <col style="width: 160px;">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td colspan="5">
                                                        <p>작성된 리뷰가 없습니다.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- //tabs-2 -->
                        </li>
                        <li id="tabs-3">
                            <div class="tabs-3">
                                <!-- product-qna -->
                                <section class="section product-qna">
                                    <header>
                                        <h2>상품 Q&amp;A</h2>
                                        <span>전체 <em>1</em>건</span>
                                        <div class="right">
                                            <a href="#">문의하기</a>
                                        </div>
                                    </header>
                                    <!-- qna-table -->
                                    <div class="qna-table">
                                        <table>
                                            <colgroup>
                                                <col style="width: 15%">
                                                <col style="width: 30%;">
                                                <col style="width: 30%;">
                                                <col style="width: 20%;">
                                                <col style="width: 20%;">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td class="text-q">Q</td>
                                                    <td class="left title">
                                                        <a href="#">
                                                            <span>비밀글입니다.</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        u******2
                                                    </td>
                                                    <td>2019.01.18</td>
                                                    <td>
                                                        <span>답변완료</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- //qna-table -->
                                </section>
                                <!-- //product-qna -->
                            </div>
                        </li>
                        <!--tabs-3-->
                        <li id="tabs-4">
                            <section class="section ship">
                                <header>
                                    <h2>배송/반품/교환 안내</h2>
                                </header>
                                <table class="table-row">
                                    <colgroup>
                                        <col style="width: 180px;">
                                        <col>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>배송비</th>
                                            <td class="left">
                                                무료배송
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>배송기간</th>
                                            <td class="left">
                                                <p>결제일 다음날부터 3일 이내 발송 (토,일 공휴일 제외)</p>
                                                <div class="list-text">
                                                    <p>
                                                        - 산간·도서 지역은 배송 기일이 추가적으로 소요 될 수 있으며, 상품의 재고상황에 따라 배송 기일이 다소 지연될 수도 있습니다.
                                                    </p>
                                                    <li>
                                                        - 본 상품은 오프라인 매장과 동시 판매 되고 있어 주문 결제 완료 후 상품 준비 도중 매장에서 판매 완료될 경우 발송 지연 또는 품절이 될 수 있사오니 이점 양해 바랍니다.
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>교환/반품 유의사항</th>
                                            <td class="left">
                                                반품 배송비 : 2,500 (도서산간 : 5,000)<br>
                                                반품 및 교환신청은, 상품서비스를 공급 받으신 날로부터 7일이내 가능합니다.
                                                <div class="list-text">
                                                    <p>- 고객님의 단순 변심으로 인한 반품 시 반품택배비는 고객님이 부담해야 합니다.<br>
                                                        단, 교환/반품 상품 중 상품불량 또는 상품정보 상이로 인한 반송비는 Serena에서 부담 합니다.</p>
                                                    <p>- 교환은 주문하신 상품의 사이즈 교환만 가능합니다.</p>
                                                    <p>- 교환 상품은 반송 상품이 Serena에 도착, 확인된 뒤에 새 주문 건으로 등록되어 배송됩니다.</p>
                                                    <p>- 단순 변심의 경우 처음 배송된 상품 상태와 다를 시 (세탁/착용 후 외출하신 경우) 교환 및 반품이 불가합니다.</p>
                                                    <p>- 상품의 택과 라벨, 신발/상품 박스, 기타 부속품(단추, 벨트 등)에 대한 훼손 및 분실이 발생할 경우 교환 및 반품이 불가합니다.</p>
                                                    <p>- 고객 부주의에 의한 제품 훼손 및 세탁 잘못에 의한 변형, 품질보증기간(1년)이 경과한 제품의 품질 이상에 대해서 책임을 지지 않으며,<br>수선 가능 시에는 유상수선 해드립니다.</p>
                                                    <p>- 화장품 구입 후 상품에 이상이 있을 경우 공정거래위원회 고시 품목별 소비자분쟁해결기준에 의거한 보상 및 제품관련 서비스를 받을 수 있습니다.</p>
                                                    <p>- 시계 구입 후 단 한번이라도 착용하였을 경우, 시계줄 줄임을 하였을 경우, 시계 본체 및 케이스 후면, 시계줄 등의 보호필름을 제거하였을 경우,&nbsp;<br>택을 제거하였을 경우 교환/환불이 불가능합니다. 교환 및 환불은 제품을 한번도 착용하지 않았고 모든 구성품이 포함된 상태일 경우에 가능합니다.</p>
                                                    <p>- 교환/반품 신청은 배송완료 후 마이페이지에서 접수하시면 됩니다.</p>
                                                    <p>- 주문하신 상품별로 반품/교환조건이 다를 수 있습니다.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                        </li>
                    </ul>
                </div>
                <!--tab menu End-->
            </div>
        </div>
        </form>
        </div>
        <div class="scroll-up" ><a href="#header-wrap" title="Top"><i class="far fa-caret-square-up"></i></a></div>
    </section>
    <footer>
        <div class="foot-inner">
            <div class="customer">
            <h2><i class="fas fa-mobile-alt"></i> 1599-0000</h2>
                <p>OPEN PM 1:00 - PM 5:00 SAT/SUN/HOLIDAY OFF</p>
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