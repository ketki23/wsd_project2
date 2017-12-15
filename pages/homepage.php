<!doctype html>

<html lang="en">
<body style="background-color:tan;">
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

<body>


<h2><div style="text-align:center">
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h2>

<h2><div style="text-align:center"><a href="index.php?page=accounts&action=all">Show All Accounts</a></h2>
<h2><div style="text-align:center"><a href="index.php?page=tasks&action=all">Show All Tasks</a></h2>

<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container"><div style="text-align:center">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required><br><br>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br><br>

        <button type="submit">Login</button>
    </div>


</form>
<h2><div style="text-align:center"><a href="index.php?page=accounts&action=register">Register</a></h2>


<script src="js/scripts.js"></script>
</body>
</html>