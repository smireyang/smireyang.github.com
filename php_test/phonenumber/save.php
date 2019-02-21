<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>연락처 입력창</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
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
    #save_form .fa-user-circle{color:#a5a7a8; font-size: 4em; display: inline-block; vertical-align: top; width: 15%; margin-right: 2%;}
    #save_form ul{display: inline-block; width: 58%;}
    #save_form ul li select{border: 1px solid #ccc; border-radius: 5px; height: 2.5em; width: 103%; margin-bottom: 1.5em;}
    #save_form ul li input{border: 1px solid #ccc; border-radius: 5px; height: 2.5em; margin-bottom: 1.5em; padding-left: 0.5em; width: 100%;}
    #save_form ul li:last-child input{margin-bottom: 4em;}
    #save_button #button{padding: 1em 0; border-radius: 5px; border: 1px solid #ccc; background: #E0E5F8; margin-bottom: 1.5em; width: 80%; cursor: pointer;}
    #save_button #button:last-child{background: #e1e1e1;}
</style>
</head>

<body>
    <header>
        <a href="main.php"><i class="fas fa-arrow-left"></i></a><h3>Phone number</h3><i class="far fa-heart"></i> <i class="fas fa-search"></i> <i class="fas fa-ellipsis-v"></i>
    </header>
    <section>
        <form action="memberlist_insert.php" method="post" name="memberlist">
               <div id="save_form">
                  <i class="fas fa-user-circle"></i>
                   <ul>
                      <li><select name="group">
                            <option value="가족">가족</option>
                            <option value="친구">친구</option>
                        </select></li>
                       <li><input type="text" name="name" placeholder="이름"></li>
                       <li><input type="tel" name="hp" placeholder="핸드폰 번호"></li>
                       <li><input type="text" name="address" placeholder="주소"></li>
                   </ul>
               </div>
               <div id="save_button">
                    <input type="submit" id="button" name="save" value="save">
                    <input type="reset" id="button" name="cancle" value="cancel">
               </div>
        </form>
    </section>
</body>

</html>