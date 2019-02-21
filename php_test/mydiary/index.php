<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>마이 다이어리</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
<style type="text/css">
    *{margin: 0; padding: 0; color:#535353; font-family: font1; text-align: center;}
     @font-face{font-family: "font1"; src: url('NanumBarunGothic.ttf') format('truetype');}
    body{}
    li{list-style: none;}
    a{text-decoration: none;}
    header{width:60%; margin: 3em auto; padding-left: 1em;}
    header  .fa-wallet{color:#ff69a9; font-size:2em; margin-right: 0.1em; vertical-align: middle;}
    header h1{color:;}
    section{}
    section>p{margin-bottom: 2em;}
    #main ul li input{border: 1px solid #ccc; border-radius: 5px; height: 2.5em; margin-bottom: 1.5em; padding-left: 0.5em; width: 60%; text-align: left;}
    #login_button #button{padding: 1em 0; border-radius: 5px; border: 1px solid #ccc; background: #f9bdd4; margin-bottom: 3em; width: 60%; cursor: pointer; color:#fff;}
    #join a strong{color:#fe88ba;}
    #forget_pw a{width:60%; margin: 0 auto; display: block; margin-bottom: 3em; margin-top: 0.5em;}
    #forget_pw a strong{color:#fe88ba;}
</style>
</head>

<body>
    <header>
       <i class="fas fa-wallet"></i>
        <h1>My Diary</h1>
    </header>
    <section>
        <form action="login.php" method="post" name="member">
            <div id="main">
                <ul>
                    <li><input type="text" name="id" placeholder="아이디" required></li>
                    <li><input type="password" name="pass" placeholder="비밀번호" required></li>
                </ul>
            </div>
            <div id="login_button">
                <input type="submit" id="button" name="button" value="로그인">
            </div>
        </form>
        <p id="join"><a href="join.php"><strong>가입</strong></a></p>
        <p id="forget_pw"><a href="#"><strong>비밀번호 찾기</strong></a></p>
        </div>
    </section>
</body>

</html>



<!--grin
<i class="far fa-id-badge"></i>
-->