
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "mystore";

 // Create connection
 $connection = new mysqli($servername, $username, $password, $database);


  
if($connection === false){
    die("ERROR: Could not connect. " 
                . mysqli_connect_error());
}
  
$sql = "UPDATE employees SET first_name = 'Schmidt',last_name='emran' WHERE id = 1";;
if(mysqli_query($connection, $sql)){
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($connection);
} 
mysqli_close($connection);
?>