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
?>
<html>
<head>
    <title> Signup Page</title>
    
</head>
<body>
   
    <?php

    
    if(isset($_POST['submit']))
       {  //var_dump($_POST);
           $name=$_POST['name'];
           $username=$_POST['username'];
           $email=$_POST['email'];
           $gender=$_POST['gender'];
           $usertype=$_POST['usertype'];
           $password=$_POST['password'];
           $repass=$_POST['repass'];
           
       // echo $dob;
       // echo $gender;

        
     if(empty($name)||empty($username)||empty($email)||empty($gender)||empty($password)||empty($repass))
           {
               echo "A field is left blank.Fill it please.";
           }
           elseif($password!=$repass)
           {
               echo"Invalid Password";
               
           }
          elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
           echo "Only letters and white space allowed for name";
           }
          elseif (!preg_match("/^[a-zA-Z ]*$/",$username)) {
           echo "Only letters and white space allowed for username.";
           }
         elseif (!preg_match("/^[\w-]+(?:\.[\w-]+)*@(?:[\w-]+\.)+[a-zA-Z]{2,7}$/",$email)) {
         echo "Invalid email format";
        }
        else
           {
               $sql="INSERT INTO user(name,username,email,gender,usertype,password)".
                "VALUES ('$name','$username','$email','$gender','$usertype','$password')";
               $res=mysqli_query($conn,$sql);
               echo $res;
               if(!$res)
               {
                   die("Querry failed" . mysqli_error($conn));
               }
               else
               {
                   //echo"welcome";
                   
                  header("location:2login.php");
               }
               
               
           }
        }
           
       else
           {
               echo "Form not submitted";
               
           }
    

    
?>
   
</body>
</html>
<?php
    mysqli_close($conn);
?>

