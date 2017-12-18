

<!doctype html>


<html lang="en">
<body style="background-color:Snow;">
<head>

  <title>Task Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
    .navbar  /* Remove the navbar's default margin-bottom and rounded borders */ 
    {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    .row.content {height: 515px} /* Set height of the grid  */
     
    .sidenav 
    {
      padding-top: 40px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    footer /* Set black background color */
    {
      background-color: #555;
      color: white;
      padding: 20px;
    }
    
    }
       
    }
    </style>
    
</head>


<body style="font-family:Times New Roman Body Copy;">


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>                        
  </button>
  <a class="navbar-brand"  href="">Task Application</a>
  </div>
  <div class="collapse navbar-collapse" id="Navigationbar">
  <ul class="nav navbar-nav">
  <li class="active"><a href="index.php?page">Home</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
  </ul>
  </div>
  </div>
  </nav>
  <h3 style="font-family:Times New Roman Body Copy;"><div style="text-align:center">Enter username and password to login</h3><br><br>
  <div style="text-align:center"><div class="container-fluid">    
  <div style="text-align:center"><div class="row content">
  <div style="text-align:center">
  <form action="index.php?page=accounts&action=login" method="POST">
  <div class="container">
  <label><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="email" required><br><br>
  <label><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="password" required><br><br>
  <button type="submit">Login</button><br><br>
  <p style="font-family:Times New Roman Body Copy;"><b>New User?<br>
          click on the link below to register</b></p>
  <h2><a href="index.php?page=accounts&action=register">Register</a></h2>

  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
<footer class="container-fluid text-center"><!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</footer>


<!--
/*
<?php
session_start();
if(key_exists('userID', $_SESSION))
{
  echo '<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>';
  echo '<h1><a href="index.php?page=accounts&action=logout">logout</a></h1>';
  echo '<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>';


}
else 
{
echo '<h1><a href="index.php?page=accounts&action=register">Register</a></h1>';
echo '<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>


</form>';
}
?>
*/
-->
<script src="js/scripts.js"></script>
</body>
</html>
