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

<body style="font-family:Times New Roman body copy;">
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
  <h2><div style="text-align:center">Welcome User</h2>





<?php
//this is how you print something
if ($data== False)
      {
        echo '<h3><div align="center">You donot have any task, click on Add task to create new Task</div></h3>';
      } else 
      {
          echo '<h3><div align="center">Below is the list of your Tasks</div></h3><br>';
        print utility\htmlTable::genarateTableFromMultiArray($data);
          echo '<h3><div align="center">Click on Edit if you want to update your existing task</div></h3>';
      }
?>


<script src="js/scripts.js"></script>
</body>
</html>