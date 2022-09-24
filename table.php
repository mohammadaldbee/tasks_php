<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<?php include 'head.php';?>

<body style="margin: 0px;">


    <h1>List of Employees</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
                <th>action</th>
				<!-- <th>Action</th> -->
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "mystore";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}
        //     $sql2 = "INSERT INTO employees (first_name, last_name, email,phone,address)
        //     VALUES  ('siuuuuu', 'manch', 'hello@gmail.com',55556666,'amman')";
        //    $connection->query($sql2);
            // read all row from database table
			
            // $sql2 =  "DELETE FROM employees WHERE id=14";
            //    $connection->query($sql2);
            $sql2= "UPDATE employees SET first_name = 'dddd',last_name='emrdddan' WHERE id = 2";
            $connection->query($sql2);
            if(isset($_GET['del_task'])){
                $id = $_GET['del_task'];
                mysqli_query($database, "DELETE FROM employees WHERE id =".$id);
                header('location: table.php');
            }
            
            $sql = "SELECT * FROM employees";

              

            $result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) { 
               echo "<tr>
                    
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>" . $row["address"] . "</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='update'>Update</a>
                        <a class='btn btn-danger btn-sm' href=''>Delete</a>
                    </td>
                  
                </tr>";
            }

            ?>
           
        </tbody>
    </table>
      

<br>
<br>

    <table class="table">
    <center><h2>join</h2></center>
        <tr>
       
    <th>FirstName</th> 
          <th>LastName</th> 
          <th>Email</th> 
          <th>Phone</th> 
        <th>fav_color</th>
        </tr>
        
        <tbody>
        <?php
          $sql3='SELECT employees.first_name,employees.last_name,employees.email,employees.phone,employee.fav_color
          FROM employees 
          JOIN employee ON employees.id=employee.id';
           $result1 = $connection->query($sql3);
    while($row = $result1->fetch_assoc()) { ?>
           <?php     echo "<tr> 
                   
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>" . $row["fav_color"] . "</td>
                    
                </tr>";
           } ?>

            $connection->close();
           
        </tbody>
    </table>
    <?php include 'footer.php';?>
    
</body>
</html>
