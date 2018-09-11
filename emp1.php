<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['usertype'])){
 header('location:2login.php');
}
//Restrict User or Moderator to Access Admin.php page
if($_SESSION['usertype']['usertype']=='Administrator'){
 header('location:admin.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Rd | Employee</title>
    
     <link href="emp_frontend.css" rel="stylesheet"> 
   
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
    <!-- MULTIPLE INPUT :JS-->
      
      <script src="js/jquery.js"></script>
    <script>
    function addRow(obj)
		{    
		     
			var lastTr = $('#dataTable').find('tr:last');
			//console.log(lastTr);
			var newTr = $(lastTr).clone();
			//console.log(newTr);
			$(lastTr).after(newTr);

		$(newTr).find('#Delete').attr("disabled",false);

		$(newTr).find('input[type=text]').each(function (key,temp) {
		$(temp).val("");
		$(temp).text("");
		});
	
			$(newTr).find('select').each(function(key,temp){
				var selected = $(temp).find('option:selected');
				$(temp).find('option').removeAttr('disabled');
				$(selected).removeAttr('selected');
			
			});
		}
    
    
    </script>
    
    
    
    <script>
    function myFunction() {
    document.getElementById("dataTable").deleteRow(0);
    }
    </script>
    
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
            <a class="nav-link" href="1.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="1.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="1.php">Contact Us</a>
          </li>
    </ul>
  </div>
</nav>  
        
        <!-- EMPLOYEE SELECTION OPTION-->
        
        <form action="emp_destination.php" method="post"> 
        <div class="content">

        <table class="back" >
        <tr >
        <td>
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
        </tr>
        </table>
        <br>
        
        <center><h5 style="color:red"> Data saved successfully !</h5></center>
       <table class="table" >
       <thead class="thead-dark">
       <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">E-mail ID</th>
      <th scope="col">Duty Date</th>
      </tr>
      </thead>
      <tbody id="dataTable">
      <tr>
      <th scope="row"><i class="fas fa-chevron-circle-right"></i></th>
      <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="name[]" placeholder="Name"></td>
      <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="designation[]"placeholder="Designation"></td>
      <td>
     <input type="text" class="form-control" id="formGroupExampleInput" name="email[]" placeholder="Email-Id"></td>
      <td>
     <input type="date" name="date[]" class="form-control" id="formGroupExampleInput"></td>
     </tr>
    
    
  </tbody>
</table>
      
  

<button type="button" class="btn btn-dark" name="add" onclick="addRow()" ><i class="fas fa-plus-circle"></i>&nbsp;Add row</button>
<button type="button" class="btn btn-dark" id="delete" name="add"  onclick="myFunction()" ><i class="far fa-trash-alt"></i>&nbsp;Delete row</button>
            
 
<center>        
<input class="btn btn-dark"  name="Submit" type="submit" value="Submit">
<a class="btn btn-dark" href="logout.php" role="button">Log Out</a>
</center> 
<br>

       
<center><footer>&copy;Created By :Richa Ranjan
<br>E-mail: richabelair04@gmail.com</footer></center>
 </div> 
           
</form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>