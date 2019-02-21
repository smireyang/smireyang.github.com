<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>연락처</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
<style type="text/css">
    *{margin: 0; padding: 0; color:#535353; font-family: font1;}
     @font-face{font-family: "font1"; src: url('NanumBarunGothic.ttf') format('truetype');}
    body{background: #f1f8fb;}
    li{list-style: none;}
    a{text-decoration: none;}
    header{background: #E0E5F8; border-bottom: 2px solid #B4B7C0; height: 8em; line-height: 8em; padding-left: 1em;}
    header h1 .fa-address-book{color:#fff; font-size:2em; margin-right: 0.1em; vertical-align: middle;}
    header h1 .fa-heart{font-size:0.8em;}
    section{text-align: center; padding-top: 3em;}
    section>p{margin-bottom: 2em;}
    #main ul li input{border: 1px solid #ccc; border-radius: 5px; height: 2.5em; margin-bottom: 1.5em; padding-left: 0.5em; width: 60%;}
    #forget_pw a{width:60%; margin: 0 auto; text-align: left; display: block; margin-bottom: 3em; margin-top: 0.5em;}
    #forget_pw a strong{color:#8c797b;}
    #login_button #button{padding: 1em 0; border-radius: 5px; border: 1px solid #ccc; background: #E0E5F8; margin-bottom: 3em; width: 60%; cursor: pointer;}
    #sns .fab{font-size:1.8em; color:#d1d1d1;}
    #sns .fa-facebook-f{margin-right: 0.3em; margin-bottom: 1em;}
    #member p a strong{color:#ffd7e1;}
</style>
</head>

<body>
    <header>
        <h1><i class="far fa-address-book"></i>연락처<i class="far fa-heart"></i></h1>
    </header>
    <section>
        <p><strong>Sign in with Email</strong></p>
        <form action="login.php" method="post" name="member">
            <div id="main">
                <ul>
                    <li><input type="text" name="id" placeholder="아이디" required></li>
                    <li><input type="password" name="pass" placeholder="비밀번호" required></li>
                </ul>
                <p id="forget_pw"><a href="#"><strong>Forget password? Click Here!</strong></a></p>
            </div>
            <div id="login_button">
                <input type="submit" id="button" name="button" value="Confirm">
            </div>
        </form>

        <div id="sns">
            <a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div id="member">
            <p><a href="join.php"><strong>Create a new profile</strong></a></p>
        </div>
    </section>
</body>

</html>



<!--grin
<i class="far fa-id-badge"></i>
-->