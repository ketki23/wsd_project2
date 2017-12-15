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
  </ul>
  <ul class="nav navbar-nav navbar-right">
  </ul>
  </div>
  </div>
  </nav>
  <h3><div style="text-align:center">Enter username and password to login</h3>
  <div style="text-align:center"><div class="container-fluid">    
  <div style="text-align:center"><div class="row content">
  <div style="text-align:center">
  <form action="index.php?page=accounts&action=login" method="POST">
  <div class="container">
  <label><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="email" required><br><br>
  <label><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="password" required><br><br>
  <button type="submit">Login</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
<footer class="container-fluid text-center">
</footer>



</body>
</html>