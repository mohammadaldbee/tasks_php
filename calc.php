<?php
$start_time = microtime(TRUE);
?>
<!DOCTYPE html>
<html>
<body>
 
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>
 
<form>
<table style="border:groove #00FF99">
 
<tr>
<td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter Number</td>
<td colspan="1">
<input name="first_value" type="text" style="color:red"/></td>
</tr>
 
<tr>
<td style="color:red; font-family:'Times New Roman'">Select Operator</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
 
<tr>
<td style="background-color:turquoise; color:black; font-family:'Times New Roman'">Enter Number</td>
<td class="auto-style5">
<input name="second_value" type="text"  style="color:red"/></td> 
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>	 
</tr>
 
<tr>
<td style="background-color:turquoise;color:black">Output = </td>
<td style="color:darkblue"><?php echo $res;?></td>
</tr>	
 

<?php
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

?>

<?php 
  echo "<br>";
  echo "<br>";
  echo "<br>";
session_start();
   
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;
      
echo"N = ".$_SESSION['views'];
  
?>
<?php

$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
 
echo '<br><br>Page generated in '.$time_taken.' seconds.<br><br>';

echo "The Script Name is : ( ". basename($_SERVER['SCRIPT_NAME'])." )<br>";
echo "The Project Name is : ( ". basename($_SERVER['PHP_SELF'],".php"). " )<br>";


if(!isset($_COOKIE[$cookie_name])) {
      echo "<br><br>Cookie named '" . $cookie_name . "' is not set!";
    } else {
      echo "<br><br>Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
      echo "<br>".  $end_time;
 
    }

?>
</body>
</html>
