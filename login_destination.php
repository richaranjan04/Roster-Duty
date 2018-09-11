<?php
session_start();

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
    <title> Login Page</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
       {
          
           $username=$_POST['username'];
           $pass=$_POST['pass'];
           $usertype=$_POST['usertype'];
         // echo $username;
         // echo $pass;
           
           
           if(empty($username)||empty($pass)||empty($usertype))
           {
               echo "A field is left blank.Fill it please.";
           }
           elseif (!preg_match("/^[a-zA-Z ]*$/",$username)) {
           echo "Only letters and white space allowed for username.";
           }
          
           else
           {
               $sql="SELECT * FROM user where username='$username' and password='$pass'";
              
          
               $res=mysqli_query($conn,$sql);
              
               
               //var_dump($res);
               if(!$res)
               {
                   die("Querry failed" . mysqli_error($conn));
               }
               
               
               $row=mysqli_fetch_assoc($res);
                  // echo $result['usertype'];
               if($pass!=$row['password'])
               {
                   echo " Wrong password entered !";
               }
               
               $count=mysqli_num_rows($res);
               if($count==1)
               { 
                $_SESSION['usertype']=array(
                'username'=>$row['username'],
                'password'=>$row['password'],
                'usertype'=>$row['usertype']);
                   
   $role=$_SESSION['usertype']['usertype'];
   //Redirecting User Based on Role
                   switch($role){
                   case 'Administrator':
                   header('location:admin.php');
                   break;
                   case 'Employee':
                   header('location:emp.php');
                   break;
                   }
                }

            }
        }
        
    
    else
           {
            echo "Not a user ! Want to create an account ?";
           
           }
?>
   
   
</body>
</html>
<?php
    mysqli_close($conn);
?>

