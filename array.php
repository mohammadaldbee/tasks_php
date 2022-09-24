<?php //1
$color = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet,
the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."<br>";
?>
<?php //2
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<?php //3
$c = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($c) ;
foreach($c as $coun => $capital)
{
echo "The capital of $coun is $capital" ;
}
?>
<?php //4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);
?>
<?php //5
$original = array( '1','2','3','4','5' );
echo 'Original array : '."<br>";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " <br> After inserting '$' the array is : "."<br>";
foreach ($original as $x) 
{echo "$x ";}
echo "<br>"
?>
<?php //6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $x => $x_value) {
  echo  $x . " = " . $x_value;
  echo "<br>";
}
?>

<?php //7
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "<br>";
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo "<br>";
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
    echo "<br>";
echo $temp_array[$i].", ";
}
echo "<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
    echo "<br>";
echo $temp_array[$i].", ";
}
?>


<?php //8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$res = array_merge($array1, $array2);
echo "<br>";
print_r($res);
echo "<br>";
?>

<?php //9
$colors = array("red","blue", "white","yellow");
$x = count($colors);
echo "array ( ";
    
for($i = 0; $i < $x ; $i++){
    echo "<br>";
    echo strtoupper($colors[$i]);
}
echo "<br>";
echo ")";

?>
<?php //10
$colors = array("RED","BLUE", "WHITE","YELLOW");
$x = count($colors);
echo "<br>";
echo "array (";
for($i=0;$i<$x;$i++){
    echo "<br>";
    echo strtolower($colors[$i]);
}
echo ")";
echo "<br>";
?>

<?php //11
$a = 200;
while($a<250){
    echo $a.",";
    $a+=4;
}
?>

<?php //12
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);

echo "<br>"; 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
echo "<br>"; 
?>
<?php //12
$my_array = array("abcd","abc","de","hj45jj","g","wer");
$coun = count($my_array);
$small=strlen($my_array[0]);
$large=strlen($my_array[0]);
for($i=0;$i<$coun;$i++){
    if(strlen($my_array[$i])<$small){
$small = strlen($my_array[$i]);
    }
    if(strlen($my_array[$i])>$large)
    $large = strlen($my_array[$i]);
}
echo "<br>"; 
echo $small." ".$large;
echo "<br>"; 
?>

<?php //13
$a=range(11,20);
shuffle($a);
for ($i=0; $i< 10; $i++)
{
echo $a[$i].' ';
}
echo "<br>";
?>
<?php //14
$arr = array( 2, 0, 10, 1, 12, 6, -12);
$e = count($arr);
$q = $arr[0];
for($i=0;$i<$e;$i++){
if($arr[$i]!==0 && $arr[$i]<$q){
    $q = $arr[$i];}
}
echo $q;
?> 



