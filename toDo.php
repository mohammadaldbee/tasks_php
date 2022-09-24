<?php
$errors ="";
$db = mysqli_connect('localhost', 'root', '', 'todo');
if(isset($_POST['submit'])){
    $task = $_POST['task'];
    if(empty($task)){
        $erorrs="you must fill";
    }else{
        mysqli_query($db, "INSERT INTO task(task) VALUES ('$task')");
        header('location: toDo.php');
    }
}
if(isset($_GET['del_task'])){
    $id = $_GET['del_task'];
    mysqli_query($db, "DELETE FROM task WHERE id =".$id);
    header('location: toDo.php');
}
if(isset($_GET['up'])){
    $id = $_GET['up'];
    mysqli_query($db, "UPDATE task SET task = 'dddd' WHERE id =".$id);
    header('location: toDo.php');
}
$task =  mysqli_query($db, "SELECT * FROM task");
?>

<?php 
//  echo "<h1>the file name is ".basename($_SERVER['SCRIPT_NAME'])."</h1><br>";
//  echo "<h2>the project name is ".basename(dirname(__FILE__))."</h2><br>";
// 	$errors = "";


// 	$db = mysqli_connect("localhost", "root", "", "todo");


// 	if (isset($_POST['submit'])) {
// 		if (empty($_POST['task'])) {
// 			$errors = "You must fill in the task";
// 		}else{
       
// 			$task = $_POST['task'];
// 			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
// 			mysqli_query($db, $sql);
// 			header('location: index.php');
 
// 		}
// 	}	


//     if (isset($_GET['del_task'])) {
//         $id = $_GET['del_task'];
    
//         mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
//         header('location: index.php');
//     }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list</title>
    <style>
        .heading{
            width: 50%;
            margin:30px auto;
            text-align:center;
            color:red;
            background:blue;
            border:1px solid black;
            border-radius:10px;
        }
        form{
            width: 50%;
            margin:30px auto;
            padding:10px;
            background:blue;
            border:1px solid black;
            border-radius:5px;
        }
        .task_input{
            width:70%;
            height:15px;
            padding:10px;
            border:1px solid black;
        }
        .add_btn{
            height:auto;
            color:black;
            padding:10px;
            background:grey;
            border:1px solid black;
            border-radius:5px;
            color:white;
        }
        table{
            width:50%;
            margin:30px auto;
            border-collapse:collapse;
        }
        tr{
            border-bottom:1px solid black;
        
        }
        th{
            font-size:19px;
        }
        th,td{
            border:none;
            height:30px;
            padding:2px;
            
        }
        tr:hover{
            background:#E9E9E9;
        }
        .task{
            text-align:left;

        }
        .delete{
            text-align:center;

        }
        .delete{
            color:white;
            background:#a52a2a;
            padding:1px 6px;
            border-radius:3px;
            text-decoration:none;

        }
        form p {
            color:red;
        }
        
        </style>
</head>
<body>
    <div class="heading">
<h2>todo list</h2>
    </div>
    <form method="POST" action="toDo.php">
        <?php
        if(isset($erorrs)){?>
        <p><?php echo $erorrs; ?></p>
            
       <?php } ?>
        <input type="text" name="task" class="task_input">
        <button type="submit" class="add_btn" name="submit">Add task</button>
    </form>
    <table>
        <thead>
            <tr>
                <th style="text-align:left;">N</th>
                <th>task</th>
                <th>action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($task)) { ?>
            <tr>
            <td><?php echo $row['id'] ; ?></td>
            <td class="task" style="text-align:center;"><?php echo $row['task']; ?></td>
            <td class="delete"> <a href="toDo.php?del_task=<?php echo $row['id']?>">x</a></td>
            <td class="update"> <a href="toDo.php?up=<?php echo $row['id']?>">x</a></td>
        </tr>

        <?php } ?>
        
    </tbody>
</body>
</html>
