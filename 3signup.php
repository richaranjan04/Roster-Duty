<!doctype html>
<html lang="en">
  <head>
    <title>Signup Page</title>
    
     <link href="3signup.css" rel="stylesheet"> 
   
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
      
</head>
<body>
      
<div class="container">
    
<!--NAVIGATION BAR-->    

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">
        <img src="Internship/cmpdilogoNew.jpg" width="40" height="40" alt="" >
        </a>
        <a class="navbar-brand animated jello" href="#"><b>Roster Duty</b></a>
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
       
        
<div class="boody">

      
      <br>
      <br>
      <br>
      <br>
      <!--SIGNUP FORM-->
      

<h1 class=" head" ><i class="fas fa-user-circle"></i> &nbsp;Signup</h1>
    
<form action="signup_destination.php" method="POST">
          
<div class="form-group padtop">

<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Name</span>
</div>
<input type="text" name="name" class="form-control" placeholder="Name" aria-label="name" aria-describedby="basic-addon1">  

</div>

<br>

<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Username</span>
</div>
<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<br>

<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">E-mail</span>
</div>
<input type="text"  name="email"class="form-control" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">

</div>

<br>
    
<div class="input-group-prepend  ">
<span class="input-group-text " id="basic-addon1">Gender&nbsp;&nbsp; </span> &nbsp;&nbsp;&nbsp;<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div></div> 
       
<br>
    
<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Password</span>
</div>
<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>
   
<br> 
    
<div class="input-group ">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Re-Enter Password</span>
</div>
<input type="password" name="repass" class="form-control" placeholder="Re-Enter Password" aria-label="Username" aria-describedby="basic-addon1">
</div>
    
<br>
  
<select class="form-control" name="usertype">
<option>Administrator</option>
<option>Employee</option>
</select>
  
<br>
  
<center><input class="btn btn-primary" name="submit" type="submit" value="Submit"></center>

</div>   
</form>

        <!--FOOTER-->
        <div class="myinfo">
        <center><footer>&copy;Created By :Richa Ranjan <br>
        E-mail: richabelair04@gmail.com</footer></center></div>
       
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>