<?php
session_start();
include('config.php');
$username=$_POST["un"];
$password=$_POST["pwd"];

$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect($servername,$musername,$mpassword,$dbname);
        $sql="SELECT * FROM user WHERE email='$username' or username='$username' and password='$password'";
	$result = mysqli_query($conn,$sql);
	//echo $sql;
        $count  = mysqli_num_rows($result);
	if($count==0) {  
		$message = "Invalid Email/phone or Password!";
	} 

        else 
        {
               if($username=="admin")
               {
                    $conn1 = mysqli_connect($servername,$musername,$mpassword,$dbname);
                    $result1 = mysqli_query($conn1,"SELECT * FROM new_user WHERE User_name='admin' and pwd='$password'");
                    $count1  = mysqli_num_rows($result1);
                    if($count1==0)
                    {  
                            $message = "Invalid Administrator password";
                    } 
                    else 
                    {
                             $_SESSION["pass"]="yes";
                            header("Location: admin.php");
                    }
               }
           
                else
                {
                    
                        $message = "You are successfully authenticated!";
                        
                        $_SESSION["user"]=$username;
                        $_SESSION["LoggedIn"]="yes";
                        header("Location: profile.php");
                }
	}
        echo $message;
        echo $result;
}
$conn = null;
?>
