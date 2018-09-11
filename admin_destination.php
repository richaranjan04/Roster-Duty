<?php
$host="localhost";
$dbuser="root";
$dbname="mysite";
$password="";

$conn=mysqli_connect($host,$dbuser,$password,$dbname);
if(mysqli_connect_error())
{
    die("Connection Failed" . mysqli_connect_error());
}
session_start();
?>

<html>
<head>
    <title> Rd |Administrator</title>
</head>
<body>
 <?php
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/Applications/XAMPP/xamppfiles/htdocs/vendor/autoload.php';
    
    if(isset($_POST['Submit']))
    { 
        $month=$_SESSION["month"];
        $year=$_SESSION["year"];
        echo $month;
        echo $year;
        $sql="UPDATE dutylist SET approve='Y' WHERE month='$month' and year='$year'";
        $res=mysqli_query($conn, $sql);
        
        $sql1="SELECT email,date FROM dutylist WHERE month='$month' and year='$year' and approve='Y'";
        $res1=mysqli_query($conn, $sql1);
        $row=mysqli_fetch_assoc($res1);
        //echo $row["email"];
        //echo $row["date"]; 

$mail = new PHPMailer(true);                              
try {
    
    $mail->SMTPDebug = 2;                                
    $mail->isSMTP();             
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;         
    $mail->Username = 'richabelair04@gmail.com';         
    $mail->Password = 'richa0404';                       
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;                                   
    
    $mail->setFrom('richabelair04@gmail.com', 'Administrator');
    $mail->addAddress($row['email'], 'Employee');     
    
    $mail->isHTML(true);                               
    $mail->Subject = 'Roster Duty';
    $mail->Body    = 'Your duty has been assigned this wekend kindly be present.';
    

    $mail->send();
    header("location:admin1.php");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    
}
          
?>    
</body>
</html>