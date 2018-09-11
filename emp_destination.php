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
    <title> Employee </title>
</head>
<body>
    <?php
    if(isset($_POST['Submit']))
       {   
        
         $month=$_POST['month'];
           $year=$_POST['year'];
        
        $count=count($_POST['name']);
           for($i=0;$i<$count;$i++)
           {
               
                $name[$i]=$_POST['name'][$i];
                $designation[$i]=$_POST['designation'][$i];
                $email[$i]=$_POST['email'][$i];
                $date[$i]=$_POST['date'][$i];
               
               
        if(empty($name[$i])||empty($designation[$i])||empty($email)||empty($date[$i]))
           {
               echo "A field is left blank.Fill it please.";
           }
          elseif (!preg_match("/^[a-zA-Z ]*$/",$name[$i])) {
           echo "Only letters and white space allowed for name";
           }
          elseif (!preg_match("/^[a-zA-Z ]*$/",$designation[$i])) {
           echo "Only letters and white space allowed for designation.";
           }
         elseif (!preg_match("/^[\w-]+(?:\.[\w-]+)*@(?:[\w-]+\.)+[a-zA-Z]{2,7}$/",$email[$i])) {
         echo "Invalid email format";
        }
        else
        {  
     $sql="INSERT INTO dutylist(name,designation,email,date,month,year,approve)".
     "VALUES ('$name[$i]','$designation[$i]','$email[$i]','$date[$i]','$month','$year','N')";
     $res=mysqli_query($conn,$sql);
        
            
     echo $res;
     
     if(!$res)
     {
     die("Querry failed" . mysqli_error($conn));
     }
      else
     {
     header("location:emp1.php"); 
      }
    }
   }
}
?>
   
</body>
</html>
<?php
    mysqli_close($conn);
?>

