<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php';?>
		<link rel="stylesheet" type="text/css" href="css/certificate.css" />
	</head>

	<body>
		<?php include 'header.php';?>
		<div id="header"></div>
		<?php include 'snb.php' ?>
		<div id="info">
			<h1 class="sub_title">증명서 발급</h1>
			<p>의료법 제 21조 제 3항 및 시행규칙 제 13조 제 3항에 의거 의무기록(검사 결과지, 초진 기록지, 입·퇴원 기록지, 수술 기록지 등)은 환자의 동의 없이 의무기록 열람 및 사본을 발급 받을 수 없습니다.</p>
				<div id="bar" class="bar"></div>
		</div>
<hr>
		<div id="rull">
			<h3 class="sub_title_s"><div class="sub_title_line"></div>신청 및 발급 절차</h3>
			<p>원무과에서 발급신청/구비서류 제출->주치의 상담->원무과에서 수납, 증명서 발행
			<br>입원(퇴원) 중 발급을 원하시는 경우 병동 간호사실에 신청하시면 됩니다. 진단서, 소견서, 의무기록 사본 등(진단명, 수술명 포함서류)의 서류는 주치의가 직접 작성하여야 하므로 주치의 일정에 따라 내원하여 주시기 바랍니다.</p>
		</div>
<hr>
		<div id="top-box">
			<h3 class="sub_title_s"><div class="sub_title_line"></div>구비 서류</h3>
				<div class="tabs">
    				<input type="radio" name="tabs" id="tab2" checked="checked">    
    				<label for="tab2">환자 본인, 배우자 및 직계 가족이 신청하는 경우</label>
      			<div class="tab">
      				<article>
      					<p>환자 본인
      					<br>본인 신분증 사본 (주민등록증, 운전면허증, 여권 등)</p>
      					
      					<p>배우자 및 가족
      					<br>1. 신청자의 신분증 사본
      					<br>2. 가족관계증명서 또는 주민등록 등본
      					<br>3. 환자가 자필서명한 동의서
      					<br>4. 환자의 신분증 사본(만 17세 미만 제외)</p>
      					
      					<button class="full-size" onclick="location.href='http://www.miznarae.co.kr/common/file/download?file_number=108'">진료기록열람 및 사본 발급 동의서 다운받기</button>
     				</article>
     			</div>
     			<input type="radio" name="tabs" id="tab3">    
    				<label for="tab3">그외 대리인이 신청하는 경우</label>
      			<div class="tab">
      				<article class="article2">
      				<p>1. 대리인의 신분증 사본</p>
       				<p>2. 환자가 자필 서명한 동의서와 위임장</p>
       				<p> - 만 14세 미만은 법정대리인이 작성</p>
       				<p> - 법정 대리 확인 서류 첨부 (가족관계증명서, 신분증사본)</p>
       				<p class="a2-end">3. 환자 신분증 사본 (만 17세 미만은 제외)</p>
       				<button onclick="location.href='http://www.miznarae.co.kr/common/file/download?file_number=108'">진료기록열람 및 사본 발급 동의서 다운받기</button>
       				<button onclick="location.href='http://www.miznarae.co.kr/common/file/download?file_number=107'">진료기록열람 및 사본 발급 위임장 다운받기</button>
     				</article>
     			</div>
  			</div>				
		</div>
		<?php include 'quickmenu.php' ?>
		<?php include 'footer.php'; ?>
	</body>
</html>
