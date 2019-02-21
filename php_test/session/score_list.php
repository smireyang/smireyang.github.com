<meta charset="utf-8">

<?php
//데이터베이스 연결
$connect=mysql_connect("localhost","kdhong","1234");
//데이터베이스 선택
mysql_select_db("kdhong_db",$connect);

//mysql 한글 깨짐 처리
mysql_query("set names utf8");

//데이터를 입력 하는 항목
if($mode=="insert"){
    $sum=$sub1+$sub2+$sub3+$sub4+$sub5;
    $avg=$sum/5;
    
    $sql="insert into stud_score(name,sub1,sub2,sub3,sub4,sub5,sum,avg)";
    $sql.="values('$name',$sub1,$sub2,$sub3,$sub4,$sub5,$sum,$avg)";
    
    $result=mysql_query($sql,$connect);
}
?>

<h3>1.성적입력하기</h3>
<form action="score_list.php?mode=insert" method="post">
    <table width="850" border="1">
        <tr>
            <td>이 름 : <input type="text" size="6" name="name">&nbsp;
                과목1 : <input type="text" size="3" name="sub1">&nbsp;
                과목2 : <input type="text" size="3" name="sub2">&nbsp;
                과목3 : <input type="text" size="3" name="sub3">&nbsp;
                과목4 : <input type="text" size="3" name="sub4">&nbsp;
                과목5 : <input type="text" size="3" name="sub5">&nbsp;
            </td>
            <td>
                <input type="submit" value="입력하기">
            </td>
        </tr>
    </table>
</form>


<!--성적 출력하기 -->
<p>
<h3>2.성적 출력하기</h3>
<p><a href="score_list.php?mode=big_first">[성적순 정렬]</a>
    <a href="score_list.php?mode=small_first">[성적역순 정렬]</a>
</p>
</p>
<!--제목행 표시 시작 -->
<table width="800" border="1">
    <tr>
        <td>순번</td>
        <td>이름</td>
        <td>과목1</td>
        <td>과목2</td>
        <td>과목3</td>
        <td>과목4</td>
        <td>과목5</td>
        <td>합계</td>
        <td>평균</td>
        <td>&nbsp;</td>
    </tr>
<!--제목행 표시 끝 -->
<?
    //select 명령 저장
    if($mode=="big_first"){
        $sql="select * from stud_score order by sum desc"; //성적순 정렬(내림차순)
    }else if($mode=="small_first"){
        $sql="select * from stud_score order by sum"; //성적순 정렬(오름차순)
    }else{
        $sql="select * from stud_score";
    }
    
    $result=mysql_query($sql);
    
    $count=1; //순번 출력하기 위한 변수 선언
    
    //데이터베이스 데이터 출력 시작
    while($row=mysql_fetch_array($result)){
        $avg=round($row[avg],1);
        $num=$row[num];
        
        echo"
        <tr>
            <td>$count</td>
            <td>$row[name]</td>
            <td>$row[sub1]</td>
            <td>$row[sub2]</td>
            <td>$row[sub3]</td>
            <td>$row[sub4]</td>
            <td>$row[sub5]</td>
            <td>$row[sum]</td>
            <td>$avg</td>
            <td><a href='score_delete.php?num=$num'>[삭제]</a></td>
        </tr>
        ";
        
        $count++;
    }
    mysql_close(); //데이터베이스 접속 종
?>
</table>