<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>연락처</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
<style type="text/css">
    *{margin: 0; padding: 0; color:#535353; font-family: font1;}
    @font-face{font-family: "font1"; src: url('NanumBarunGothic.ttf') format('truetype');}
    li{list-style: none;}
    a{text-decoration: none;}
    header{background: #E0E5F8; border-bottom: 2px solid #B4B7C0; height: 10em; line-height: 9em; padding-left: 1em; text-align: center;}
    header h1 .fa-user-alt{color:#fff; font-size:2em; margin-right: 0.1em; vertical-align: middle;}
    section{text-align: center; padding-top: 3em;}
    section>h1,section>h3{text-align: left; width:70%; margin: 0.2em auto;}
    section .fa-heart{color:#E74C3C;}
    #login_button{margin-top: 3em;}
    #login_button button{padding: 1em 0; border-radius: 5px; border: 1px solid #ccc; background: #E0E5F8; margin-bottom: 2em; width: 70%; cursor: pointer;}
</style>
</head>

<body>
    <header>
        <h1><i class="fas fa-user-alt"></i></h1>
    </header>
    <section>
        <h1><strong><?=$username?> 님</strong><i class="far fa-heart"></i></h1>
        <h3>어서오세요<i class="fas fa-heart"></i> 즐거운 하루되세요!</h3>
           <div id="login_button">
               <a href="save.php"><button>연락처 입력</button></a>
               <a href="memberlist.php"><button>연락처 보기</button></a>
               <a href="logout.php"><button>로그아웃</button></a>
           </div>
    </section>
</body>

</html>