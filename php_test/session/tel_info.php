<meta charset="utf-8">
<style type="text/css">
    *{vertical-align: middle;}
</style>

<?php
//데이터베이스 연결
$connect=mysql_connect("localhost","kdhong","1234");
//데이터베이스 선택
mysql_select_db("kdhong_db",$connect);

//mysql 한글 깨짐 처리
mysql_query("set names utf8");

//데이터를 입력 하는 항목
if($mode=="insert"){
    $sql="insert into tel(name,hp,gg,memo) values('$name','$hp','$group','$memo')";
    
    $result=mysql_query($sql,$connect);
}
?>

<h4>1.연락처 저장</h4>
<form action="tel_info.php?mode=insert" method="post">
    <table width="900" border="1">
        <tr>
            <td>이 름 : <input type="text" size="6" name="name">&nbsp;
                핸드폰 : <input type="tel" size="16" name="hp">&nbsp;
                그 룹 : <select name="group">
                            <option value="친구">친구</option>
                            <option value="가족">가족</option>
                        </select>&nbsp;
                메 모 : <input type="text" size="30" name="memo" placeholder="30자이내로 작성">&nbsp;
            </td>
            <td>
                <input type="submit" value="저장하기">
            </td>
        </tr>
    </table>
</form>


<!--연락처 목록 -->
<p>
    <h4>2.연락처 목록</h4>
    <form action="tel_info.php?mode=search" method="post">
         <table width="350" border="1">
            <tr>
                <td>검 색 : <select name="find">
                                <option value="name">이름</option>
                                <option value="gg">그룹</option>
                            </select>&nbsp;
                            <input type="text" size="10" name="sear">
                </td>
                <td>
                    <input type="submit" value="검색하기">
                </td>
             </tr>
        </table>
    </form>
</p>
<!--제목행 표시 시작 -->
<table width="900" border="1">
    <tr>
        <td>이름</td>
        <td>핸드폰번호</td>
        <td>그룹</td>
        <td>메모</td>
        <td>삭제</td>
        <td>전화연결</td>
    </tr>
<!--제목행 표시 끝 -->
<?
    //select 명령 저장
    if($mode=="search"){
        $sql="select * from tel where $find='$sear'"; //검색모드
    }else{
        $sql="select * from tel"; //일반모드
    }
    
    $result=mysql_query($sql);
    
    //데이터베이스 데이터 출력 시작
    while($row=mysql_fetch_array($result)){
        $tel=$row[hp];
        $num=$row[num];
            
        echo"
        <tr>
            <td>$row[name]</td>
            <td>$row[hp]</td>
            <td>$row[gg]</td>
            <td>$row[memo]</td>
            <td><a href='tel_delete.php?num=$num'>[삭제]</a></td>
            <td><a href='tel:$tel'>[전화연결]</a></td>
        </tr>
        ";
    }
    mysql_close(); //데이터베이스 접속 종료
?>
</table>

