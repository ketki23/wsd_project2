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

<form action="index.php?page=tasks&action=save&id=<?php echo $data-> id; ?>" method="post">

    <div class="form-group">
      <label for="owneremail">Owner Email:</label>
      <input type="text" class="form-control" id="owneremail" placeholder="Enter Owner email" name="owneremail" value="<?php echo $data->owneremail; ?>">
    </div>

<div class="form-group">
      <label for="duedate">Due Date:</label>
      <input type="text" class="form-control" id="duedate" placeholder="Enter Due Date" name="duedate" value="<?php echo $data->duedate; ?>">
    </div>


    <div class="form-group">
      <label for="message">Message:</label>
      <input type="text" class="form-control" id="message" placeholder="Enter Due Date" name="message" value="<?php echo $data->message; ?>">
    </div>

    <div class="form-group">
      <label for="isdone">Is Done:</label>
      <input type="text" class="form-control" id="isdone" placeholder="Enter status" name="isdone" value="<?php echo $data->isdone; ?>">
    </div>

    <!–– Owner Email: <input type="text" name="owneremail" value="<?php echo $data->owneremail; ?>">
   <!––  Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>">
    <!–– Message: <input type="text" name="message" value="<?php echo $data->message; ?>">
    <!–– Is Done: <input type="text" name="isdone" value="<?php echo $data->isdone; ?>">
    <input type="submit" value="Submit form">
</form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>