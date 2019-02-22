<!DOCTYPE html>
<html lang="en">
	<head>
	    
	    <!-- 서브메뉴 맞게 보여주기위해 -->
	    <?php
	        $pageName = basename($_SERVER['PHP_SELF']);
	    ?>
	    <!-- 헤더,푸터의 스크립트,css -->
	    <?php include 'head.php';?>
	    
        <link rel="stylesheet" type="text/css" media="screen" href="css/consult.css">
	</head>

	<body>
	<?php include 'header.php';?>
    <div class="core"></div>
    <?php include 'snb.php';?>

		<div id="wrap">
			<div id="title">
				<h3>온라인상담</h3>
			</div>
			<div id="bar">
			 	<span></span>
			</div>
			<div id="form">
				<fieldset>
					<p>
						<label for="name">이름</label>
						<input type="text" name="name" id="name" placeholder="내용을 입력해주세요">
					</p>
					<p>
						<label for="tel">연락처</label>
						<input type="tel" name="tel" id="tel" title="자리1" placeholder="000"> -<input type="tel" name="tel2" title="자리2" placeholder="0000"> -<input type="tel" name="tel2" title="자리3" placeholder="0000">
					</p>
					<p>
						<label for="email">이메일</label>
						<input type="email" name="email" id="email" placeholder="내용을 입력해주세요">
					</p>
					<p>
						<label for="grouping">분류</label>
						<select>
						 <option value="Dropdown">Dropdown</option>
						</select>
					</p>
					<p>
						<label for="subject">제목</label>
						<input type="text" name="subject" id="subject" placeholder="내용을 입력해주세요">
					</p>
					<p>
						<label for="message">내용</label>
						<textarea name="message" id="message">내용을 입력해주세요</textarea>
					</p>
					<p>
						<label for="password">비밀번호</label>
						<input type="password" name="password" id="password" placeholder="내용을 입력해주세요">
					</p>
				</fieldset>
				<div class="button">
					 <button class="ab">등록</button>
					 <button class="bb">취소</button>
				</div>
			</div>
		</div>
    <?php include 'quickmenu.php' ?>
	<!-- 푸터 -->
	<?php include 'footer.php';?>
    </body>

</html>
