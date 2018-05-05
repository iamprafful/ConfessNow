<?php
include('config.php');
$name=$_POST["FName"].' '.$_POST["LName"];
$email=$_POST["email"];
$username=$_POST["UName"];
$password=$_POST["pwd"];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $musername, $mpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (username,email,password,name)
    VALUES ('$username','$email','$password','$name')";
    $count = "INSERT INTO counter (page,times)
    VALUES ('$username','0')";
    $table="create table ".$username."(id varchar(10), message varchar(1000), date varchar(20), ip varchar(30))";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn->exec($table);
    $conn->exec($count);
    echo "Account created successfully";
    session_start();
    $_SESSION["user"]=$username;
    $_SESSION["LoggedIn"]="yes";
    header("Location: profile.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

