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

<body style="font-family:Times New Roman Body Copy;">

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>                        
  </button>
  <a class="navbar-brand" href="index.php?page=tasks&action=all">Task Application</a>
  </div>
  <div class="collapse navbar-collapse" id="Navigationbar">
  <ul class="nav navbar-nav">
      <li class=""><a href="index.php?page=tasks&action=all">Home</a></li>
      <li><a href="index.php?page=accounts&action=show">Profile Page</a></li>
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
    <h3 align = "center">Hello user, kindly enter the below details for creating a new task</h3>
  <form form action="index.php?page=tasks&action=create" method="post">
      <div class="form-group">
          <label for="Title">Title of Task:</label>
          <input type="text" class="form-control" id="Title" placeholder="Enter task name" name="Title" required>
      </div>

      <div>
          <label form="createddate"><b>Created Date:</b></label>
          <input type="text" class="form-control" id="createddate"  name="createddate" value="System will auto-generate date" disabled>
      </div><br>

    <div class="form-group">
      <label for="owneremail">Owner Email:</label>
      <input type="text" class="form-control" id="owneremail" placeholder="Enter Owner email" name="owneremail">
    </div>

    <div class="form-group">
      <label for="duedate">Due Date:</label>
      <input type="date" class="form-control" id="duedate" placeholder="Enter Due Date" name="duedate">
    </div>

    <div class="form-group">
      <label for="message">Message:</label>
      <input type="text" class="form-control" id="message" placeholder="Enter Message" name="message">
    </div>

    <div class="form-group">
      <label for="isdone">Is Done:</label>
      <input type="number" class="form-control" id="isdone" placeholder="Enter Status, if task is complete enter 1 else 0 "  min="0" max="1" name="isdone">
    </div>


 <!––<form action="index.php?page=tasks&action=create" method="post">
   <!––  Owner Email: <input type="text" name="owneremail" value="; <?php echo $data->owneremail; ?>">
 <!––    Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>">
  <!––   Message: <input type="text" name="message" value="<?php echo $data->message; ?>">
  <!––   Is Done: <input type="text" name="isdone" value="<?php echo $data->isdone; ?>">
     <input type="submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>