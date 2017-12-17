<!doctype html>

<html lang="en">
<head>
    <title>Tasks</title>
  <m eta charset="utf-8">
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
    
    
    }
       
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>                        
  </button>
  <a class="navbar-brand" href="#">Task Application</a>
  </div>
  <div class="collapse navbar-collapse" id="Navigationbar">
  <ul class="nav navbar-nav">
  <li class="active"><a href="index.php?page">Home</a></li>
  <li><a href="index.php?page=accounts&action=all">All Accounts</a></li>
  <li><a href="index.php?page=tasks&action=all">Todo Tasks</a></li>
  <li><a href="index.php?page=tasks&action=create">Add task</a></li>
  <li><a href="index.php?page">Log Out</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
  </ul>
  </div>
  </div>
  </nav>
  

  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
<div style="text-align:center">
<h3>Account details for the user:<?php echo $data->fname; ?>&nbsp<?php echo $data->lname; ?></h3> 
Email: <?php echo $data->email; ?><br>
First Name: <?php echo $data->fname; ?><br>
Last Name: <?php echo $data->lname; ?><br>




<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>

    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>