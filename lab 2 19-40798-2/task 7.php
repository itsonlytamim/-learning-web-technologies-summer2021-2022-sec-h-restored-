<?php
$star='*';
for($i=0;$i<3;$i++){
    for ($j=0;$j<=$i;$j++){
       echo $star;
    }  
    echo "<br>";
}
echo "<br>";
$num=1;
for($i=3;$i>0;$i--){
    for ($j=0;$j<$i;$j++){
       echo $num;
       $num++;
    }  
    $num=1;
    echo "<br>";
}
echo "<br>";
$alp=chr(65);
for($i=0;$i<3;$i++){
    for ($j=0;$j<=$i;$j++){
       echo $alp;
       $alp++;
    }  
    echo "<br>";
}
?>