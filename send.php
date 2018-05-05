<?php
$username=$_POST["un"];
$msg=$_POST["msg"];
$mail=$_POST["email"];
$ip=$_POST["ip"];
include('config.php');    
                        $conn = new mysqli($servername, $musername, $mpassword, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    
                     $sql="SELECT id+1 FROM ".$username." order by id desc limit 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id =$row["id+1"];
                           
                        }
                    } else {
                        $id =1;
                    }

                    $conn->close();
                    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $musername, $mpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO ".$username." (id,message,date,ip)
    VALUES ('$id','$msg',sysdate(),'".$ipup."')";
    
    // use exec() because no results are returned
    $conn->exec($sql);


	
	
// Create the email and send the message
$to = $mail; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New Confession Recieved";
$email_body = "You have received a new confession \nCheck your profile Right now at http://confess.shadowsoft.esy.es";
$headers = "From: Confession@shadowsoft.esy.es\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: info@shadowsoft.esy.es";	
mail($to,$email_subject,$email_body,$headers);
header("Location: welcome.html");
return true;			

   header("Location: welcome.html");
    session_start();

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>