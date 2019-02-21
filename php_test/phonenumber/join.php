<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>회원가입</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
<style type="text/css">
    *{margin: 0; padding: 0; color:#535353; font-family: font1;}
    @font-face{font-family: "font1"; src: url('NanumBarunGothic.ttf') format('truetype');}
    body{background: #f1f8fb;}
    li{list-style: none;}
    a{text-decoration: none;}
    header{background: #E0E5F8; height: 4em; line-height: 4em; padding-left: 1em;}
    header .fas, header .far{display: inline-block; color:#fff;}
    header .fa-search{position: absolute; right:3em; top:1.5em;}
    header .fa-ellipsis-v{position: absolute; right:1em; top:1.5em;}
    header h3{display: inline-block; color:#fff; margin-left: 1em; margin-right: 0.1em;}
    section{text-align: center; padding-top: 4em;}
    #join_form ul{display: inline-block; width: 70%;}
    #join_form ul p{color:aqua; margin-bottom: 1.5em;}
    #join_form ul li input{border: 1px solid #ccc; border-radius: 5px; height: 2.5em; margin-bottom: 2em; padding-left: 0.5em; width: 100%;}
    #join_form ul li:last-child input{margin-bottom: 5em;}
    #join_button #button{padding: 1em 0; border-radius: 5px; border: 1px solid #ccc; background: #E0E5F8; margin-bottom: 1em; width: 30%; cursor: pointer;}
    #join_button #button:first-child{margin-right: 1em;}
    #join_button #button:last-child{background: #e1e1e1;}
</style>
</head>
<?
  if($check){
      echo"<script>
      $(function(){
        $('.check').after('<p>아이디가 중복됩니다. 다시입력하세요</p>');
      });
      </script>";
  }  
?>

<body>
    <header>
        <a href="index.php"><i class="fas fa-arrow-left"></i></a><h3>회원가입</h3><i class="far fa-heart"></i> <i class="fas fa-search"></i> <i class="fas fa-ellipsis-v"></i>
    </header>
    <section>
        <form action="insert.php" method="post" name="member">
               <div id="join_form">
                   <ul>
                      <li><input type="text" name="id" placeholder="아이디" class="check"></li>
                       <li><input type="password" name="pass" placeholder="비밀번호"></li>
                       <li><input type="text" name="name" placeholder="이름"></li>
                       <li><input type="email" name="email" placeholder="이메일"></li>
                   </ul>
               </div>
               <div id="join_button">
                  <input type="submit" id="button" name="save" value="저장">
                  <input type="reset" id="button" name="cancle" value="취소">
               </div>
        </form>
    </section>
</body>

</html>