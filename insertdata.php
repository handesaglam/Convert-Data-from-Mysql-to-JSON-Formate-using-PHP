
<?php


if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test";
    


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    
  

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    


    $query = "INSERT INTO `users`(`fname`, `lname`, `age`) VALUES ('$fname','$lname','$age')";
    
    $result = mysqli_query($connect,$query);
    
 

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <form action="insertdata.php" method="post">

            <input type="text" name="fname" required placeholder="First Name"><br><br>

            <input type="text" name="lname" required placeholder="Last Name"><br><br>

            <input type="number" name="age" required placeholder="Age" min="10" max="100"><br><br>

            <input type="submit" name="insert" value="Add Data To Database">

        </form>

    </body>

</html>


