<meta charset="utf-8">

<?php
$connect=mysql_connect("localhost","kdhong","1234");
mysql_select_db("kdhong_db",$connect);

mysql_query("set names utf8");

/*$sql="insert into biz_card (num, name, company, tel, hp, address)";
$sql.="values(1,'홍길동','미래전자','031-276-1829',"; //.= 연결연산자
$sql.="'010-8723-2837','경기도 용인시 신갈동 388-23번지')";*/

$sql="select * from biz_card";
$result=mysql_query($sql); // (,$connect) :생략가능

//row()
$fields=mysql_num_fields($result);
echo"필드 갯수 : $fields";
//

$number=1;

/*if($result){
    echo"레코드 삽입 완료!";
}else{
    echo"레코드 삽입 실패! 에러 확인 요망!";
}

mysql_close($connect);*/
?>


<h2>데이터 읽어오기</h2>
<table width="800" border="1">
    <tr>
        <td>순번</td>
        <td>이름</td>
        <td>회사명</td>
        <td>전화번호</td>
        <td>핸드폰번호</td>
        <td>주소</td>
    </tr>
    <?
    /*while($row=mysql_fetch_array($result)){
        echo"
        <tr>
        <td>$number</td>
        <td>$row[name]</td>
        <td>$row[company]</td>
        <td>$row[tel]</td>
        <td>$row[hp]</td>
        <td>$row[address]</td>
        </tr>
        ";
        $number++;
    }
    mysql_close();*/
    
    //row() p.250
    while($row=mysql_fetch_row($result)){
        echo"<tr>";
        echo"<td>$number</td>";
        for($i=1; $i<$fields; $i++){
            echo"<td>$row[$i]</td>";
        }
        echo"</tr>";
        $number++;
    }
    mysql_close();
    ?>
</table>