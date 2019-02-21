<meta charset="utf-8">


<?php

/*$eng_score=array(87,76,98,87,87,93,79,85,88,63,74,84,93,89,63,99,81,70,80,95);

$sum=0;

for($a=0; $a<20; $a++){
    $sum=$sum+$eng_score[$a];
}
$avg=$sum/20;

echo"합계: $sum , 평균: $avg <br>";

for($a=0; $a<20; $a++){
    echo $eng_score[$a]." ";
}*/

//

for($i=0; $i<10; $i++){
    $a[$i]=$i+1;
}
for($i=9; $i>=0; $i--){
    $b[9-$i]=$i+1;
}
for($i=0; $i<10; $i++){
    $c[$i]=$a[$i]*$b[$i];
}
for($i=0; $i<10; $i++){
    echo" $a[$i] x $b[$i] = $c[$i] <br>";
}
//

$num=array(15,13,9,7,6,12,19,30,28,26);

$count=10;

echo "정렬되기 전 :";
for($a=0; $a<10; $a++)
    echo $num[$a]." ";

echo "<br>";

for($i=$count-2; $i>=0; $i--)
{
    for($j=0; $j<=$i; $j++)
    {
        if($num[$j] > $num[$j+1])
        {
            $tmp= $num[$j];
            $num[$j]=$num[$j+1];
            $num[$j+1]=$tmp;
        }
    }
}
    echo "오름차순 정렬(버블 정렬) :";
    for($a=0; $a<10; $a++)
        echo $num[$a]." ";

//

$score=array(array(88,98,96,77,63),array(86,77,66,86,93),array(74,83,95,86,97));

for($i=0; $i<3; $i++){
    for($j=0; $j<5; $j++){
        echo"\$score[$i][$j]=".$score[$i][$j]."<br>";
    }
    echo"<br>";
}    
    for($i=0; $i<3; $i++){
        $sum=0;
        for($j=0; $j<5; $j++){
            $sum=$sum+$score[$i][$j];         
        }
        $avg=$sum/5;
        $student_num=$i+1;
        echo "$student_num 번째 학생의 점수 => 합계 : $sum, 평균은 : $avg <br>";
    }

//함수

$tel="010-277-3333";

$num_tel=strlen($tel);

echo"strlen()함수 사용 : $num_tel <br>";

$tel1=substr($tel,0,3);
$tel2=substr($tel,4,3);
$tel3=substr($tel,8,4);

echo "substr()함수 사용 : $tel1 $tel2 $tel3 <br>";

$phone=explode("-",$tel); //배열함수

echo "explode()함수 사용 : $phone[0] $phone[1] $phone[2] <br>";

//hap($a,$b)함수는 $a에서 $b까지의 합을 구한다.

function hap($a, $b)
{
    $sum=0;
    while($a<=$b)
    {
        $sum=$sum+$a;
        $a++;
    }
    return $sum;
}

$from=1;
$to=100;

$total= hap($from,$to);
echo "$from 에서 $to 까지의 합 : $total";
?>