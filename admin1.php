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
if(empty($_SESSION['usertype'])){
 header('location:2login.php');
}
//Restrict User or Moderator to Access Admin.php page
if($_SESSION['usertype']['usertype']=='Employee'){
 header('location:emp.php');
}

?>

<html lang="en">
  <head>
    <title>Rd | Administrator</title>
    
     <link href="admin.css" rel="stylesheet"> 
   
     <link rel="shortcut icon" href="Internship/logo.ico">
        
    

    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
     
    <!--Animation-->
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> 
      
    <!--FontAwsome-->
      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   
      <!--GOOGLE FONTS-->
      
      <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
      
      <!--STYLE TABLE-->
      <style>
   table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:black;
    font-family: 'Hind', sans-serif;
    color: white;
}
    </style>

    </head>
    
    <body>
     
    <div class="container">
    
        <!--NAVIGATION BAR-->
            
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">
        <img src="Internship/cmpdilogoNew.jpg" width="40" height="40" alt="" >
        </a>
        <a class="navbar-brand animated jello" href="#"><b>
            Roster Duty</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
    </ul>
  </div>
</nav>  
        
        <!-- EMPLOYEE SELECTION OPTION-->
 <div class="contain">     
     
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 

        <table class="back" >
        <tr >
        <td >
        <select name="month" class="form-control">
          <option>Select month</option>
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select></td>
        <td>
        <select name="year" class="form-control">
        <option>Select year</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        
        </select></td>
        <td><center><input class="btn btn-outline-light left" type="submit" name="Submit" value="Submit"></center></td>
        </tr>
        </table>
        <br>
  
</form>
   <center><h5 style="color:Green"> Roster Duty sanctioned by HOD .</h5></center>    
 <?php
    if(isset($_POST['Submit']))
       {   
           $month=$_POST['month'];
           $year=$_POST['year'];
           $_SESSION["month"]=$month;
           $_SESSION["year"]=$year;
           
        
    
     $sql="SELECT name, designation, email,date FROM dutylist WHERE month='$month' and year='$year' ";
     
    if($res = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($res) > 0){
        
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Designaation</th>";
                echo "<th>Email</th>";
                echo "<th>Date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr >";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['designation'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    } else{
        echo "No Matching records are found.";
    }
} else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    }
?>
 </div> 
<br>
<br>


<!--<center><input class="btn btn-dark" type="submit" name="Submit" value="Approve"></center>-->
 <form action="admin_destination.php" method="post">

<center>    
<input class="btn btn-dark" type="submit" name="Submit" value="Approve">

<a class="btn btn-dark" href="logout.php" role="button">Log Out</a>
</center> 
</form> 
        
        
        
<br>
<center><footer>&copy;Created By :Richa Ranjan
<br>E-mail: richabelair04@gmail.com</footer></center>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>