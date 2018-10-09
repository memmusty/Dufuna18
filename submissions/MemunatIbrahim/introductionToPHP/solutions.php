<?php
//Quiz 1
echo "I am Ibrahim Memunat, a computer science graduate and a software developer.<br>
I loved logical, computational thinking, and enjoy solving problem.<br>
I heard of the dufuna-fem program in a chat room, thought it would be fun, and decided to apply.<br>
Honestly, the journey so far has been amazing, and I am enthusiastic for the future weeks ahead.<BR>
I almost forgot, I am a female :)<br>";

//Quiz 2
$var1 = 100;
$var2 = 1.5;
$var3 =25;
$product = $var1*$var3;
$minus= $var2-$var1;
$div=$var3/$var2;
echo "the product of ".$var1." and ".$var3." is ".$product."<br>";
echo "the difference of ".$var2." and ".$var1." is ".$minus."<br>";
echo "the division of ".$var3."by ".$var2." is ".$div."<br>";  

//Quiz 3
$temp=34;
if($temp<=20){
    echo "It is really cold today<BR>";
}
elseif($temp>20 and $temp<30){
    echo "The weather is just perfect.<br>";
}
elseif($temp>29 and $temp<40){
    echo "It’s so hot today<Br>";
}
else{
    echo "Am I in the Sahara Desert?!<br>";
}

//Quiz 4
for($k=100;$k<151;$k++){
    echo nl2br($k."\n");
}
$i=0;
while($i<51){
    if($i%2==0)
        print nl2br($i."\n");
    $i++;
}

//Quiz 5
$names=array("memunat","ajoke","ibrahim");
$hobbies = array("singing","reading","writing");
foreach (array_combine($names,$hobbies) as $name=>$hobby){
    echo "My name is ".$name.". I love ".$hobby.".<br>";
}

//Quiz 6
function SomeMath($num1, $num2) {
    $sum = $num1 + $num2;
    $product=$num1*$num2;
    echo "The sum of $num1 and $num2 is : $sum<br>";
    echo "The  product of $num1 and $num2 is : $product";
}
SomeMath(3,8);   
?>