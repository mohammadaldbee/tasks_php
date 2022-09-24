<?php //1
for($i=1;$i<10;$i++){
echo $i."-";
}
echo ($i);
echo "<br>";
?>

<?php //2
$sum=0;
for($i=0;$i<31;$i++){
    $sum+=$i;
}
echo $sum;
echo "<br>";
?>

<?php //3
function nestedAlphabet(){

    for ($i=0; $i < 5; $i++) { 
        for ($j=4; $j >=0; $j--) { 
            if ($j <= $i) {
                echo  chr(ord('A')+$i)." ";
            }else{
                echo "A"." ";
            }
        }
        echo "<br>";
    }
}
nestedAlphabet()
?>
<?php //4
function numbers(){

    for ($i=0; $i < 5; $i++) { 
        for ($j=4; $j >=0; $j--) { 
            if ($j <= $i) {
                echo  (1+$i)." ";
            }else{
                echo "1"." ";
            }
        }
        echo "<br>";
    }
}
numbers();
?>
<?php //5
function numbers1(){

    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            if ($j == $i) {
                echo  (1+$i)." ";
            }else{
                echo "0"." ";
            }
        }
        echo "<br>";
    }
}
numbers1();
?>
<?php //6
$i=5;
$sum=1;
for($a=1;$a<=$i;$a++){
    
    $sum*=$a;
}
echo "<br>";
echo $sum;
echo "<br>";
?>

<?php //7
// PHP code to get the Fibonacci series
function Fibonacci($n){
  
    $num1 = 0;
    $num2 = 1;
  
    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter++;
    }
}
Fibonacci(10);
?>
<?php //8
$text = "orange Coding academy";
$text2 = strtolower($text);
$sum=0;
for($i=0;$i<strlen($text);$i++){
if($text2[$i] ==="c") {
$sum+=1;
}
}
echo "<br>";
echo $sum;
?>
<?php //9

echo "<table border =\"3\">";
	for ($row=1; $row <= 6; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 5; $col++) { 
		   $p = $col * $row;
                echo "<td>$col*$row=$p</td> \n";
			}
	echo "</tr>";
		}
		echo "</table>";
?>
<?php //10
for($i=1;$i<=50;$i++){
    if($i%3==0){
        echo "Fizz ";}
        if($i%5==0){
            echo "Buzz ";
        }

        if($i%3!==0 && $i%5!==0) {
            echo $i.' ';
        }
    
}echo "<br>";
echo "<br>";
?>
<?php //11

$sum=0;
for($i=0; $i<=4; $i++)
{
for($j=0; $j<=$i; $j++)
{
$sum++; 
echo  $sum." ";
}
echo '<br>';
}
?>

<?php //12

for($i=0;$i<=4;$i++){
    for($j=1;$j<=4-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=0;$k<=$i;$k++){
        if ($k > $i) {
            echo "A";
        }else{
            echo  chr(ord('A')+$k)." ";
        }
    }
echo "<br />";}
?>
<?php
for($i=0;$i<=3;$i++){
    for($j=4;$j>=4-$i;$j--){
        echo "&nbsp;&nbsp;";
    }$s = 0;
    for($k=3;$k>=$i;$k--){
        
        if ($k >= $i) {
            echo  chr(ord('A')+$s)." ";  
        }else{
            echo "A ";
        }$s++;
    }
echo "<br />";}

?>

