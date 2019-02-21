<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>출력창</title>
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
    header{background: #E0E5F8; height: 4em; line-height: 4em; padding-left: 1em;}
    header .fas, header .far{display: inline-block; color:#fff;}
    header .fa-search{position: absolute; right:3em; top:1.5em;}
    header .fa-ellipsis-v{position: absolute; right:1em; top:1.5em;}
    header h3{display: inline-block; color:#fff; margin-left: 1em; margin-right: 0.1em;}
    section{text-align: center; padding-top: 3em;}
    #find_form ul{width: 100%;}
    #find_form ul li{display: inline-block;}
    #find_form ul li:nth-child(1) {width: 25%;}
    #find_form ul li:nth-child(2) {width: 46%; margin-right: 0.5%;}
    #find_form ul li:nth-child(3) {width: 20%;}
    #find_form ul li select{border: 1px solid #ccc; border-radius: 5px; height: 2.5em; width: 100%;}
    #find_form ul li input{border: 1px solid #ccc; border-radius: 5px; height: 2.5em; width: 100%;}
    #find_form ul li:last-child input{background: #E0E5F8;}
    #memberlist{margin: 2em auto; width: 95%;}
    #memberlist li{float: left; width: 20%; background: #EAEAEA; border-top: 2px solid #ccc; border-bottom: 2px solid #ccc; height: 2em; line-height: 2em;}
    #memberlist_con{margin: 2em auto; width: 95%;}
    #memberlist_con li{float: left; width: 20%; border-bottom: 1px solid #ccc; height: 2em; line-height: 2em;}
    #list_number{width:15%; margin: 6em auto;}
    #list_number li{float: left; width: 31%; background: #F4F4F4; border-radius: 5px; margin-right: 2%; margin-top: 2em;}
    #list_number li:nth-child(2){background: #e0e5f8; border-radius: 5px;}
</style>
</head>

<?php
include "dbconn.php";

//데이터를 입력 하는 항목
if($mode=="insert"){
    $sql="insert into pmember_list(group,name,hp) values('$group','$name','$hp')";
    
    $result=mysql_query($sql,$connect);
}
?>

<body>
    <header>
        <a href="main.php"><i class="fas fa-arrow-left"></i></a><h3>Member List</h3><i class="far fa-heart"></i> <i class="fas fa-search"></i> <i class="fas fa-ellipsis-v"></i>
    </header>
    <section>
        <form action="memberlist.php?mode=search" method="post">
               <div id="find_form">
                   <ul>
                      <li><select name="find">
                            <option value="gg">그룹</option>
                            <option value="name">이름</option>
                        </select></li>
                      <li><input type="text" name="search" required></li>
                      <li><input type="submit" value="검색"></li>
                   </ul>
               </div>
        </form>
        <ul id="memberlist">
            <li><strong>Group</strong></li>
            <li><strong>Name</strong></li>
            <li><strong>Phone</strong></li>
            <li><strong>Delete</strong></li>
            <li><strong>tel</strong></li>
        </ul>
        <!--제목행 표시 끝 -->
<?
    //select 명령 저장
    if($mode=="search"){
        $sql="select * from pmember_list where $find='$search'"; //검색모드
    }else{
        $sql="select * from pmember_list"; //일반모드
    }
    
    $result=mysql_query($sql);
    
    //데이터베이스 데이터 출력 시작
    while($row=mysql_fetch_array($result)){
        $tel=$row[hp];
        $num=$row[num];
            
        echo"
        <ul id='memberlist_con'>
            <li>$row[gg]</li>
            <li>$row[name]</li>
            <li>$row[hp]</li>
            <li><a href='pmember_delete.php?num=$num'>[삭제]</a></li>
            <li><a href='tel:$tel'>[전화연결]</a></li>
        </ul>
        ";
    }
    mysql_close(); //데이터베이스 접속 종료
?>
        
        
        <div id="list_number">
            <ul>
                <li><i class="fas fa-angle-left"></i></li>
                <li>1</li>
                <li><i class="fas fa-angle-right"></i></li>
            </ul>
        </div>
    </section>
</body>

</html>