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
  <li class=""><a href="index.php?page">Home</a></li>
  <li><a href="index.php?page=accounts&action=all">All Accounts</a></li>
  <li><a href="index.php?page=tasks&action=all">Todo Tasks</a></li>
  <li><a href="index.php?page=tasks&action=create">Add task</a></li>
  <li><a href="index.php?page=accounts&action=edit">Update Account</a></li>

  <li><a href="index.php">Log Out</a></li>
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

  <form action="/action_page.php">
    <div class="form-group">
      <label for="fname">First name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First name" name="fname">
    </div>

    <div class="form-group">
      <label for="lname">Last name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Last name" name="lname">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email address" name="email">
    </div>

    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone number" name="phone">
    </div>

    <div class="form-group">
      <label for="birthday">Birthday:</label>
      <input type="text" class="form-control" id="birthday" placeholder="Enter Birthday" name="birthday">
    </div>

    <div class="form-group">
      <label for="gender">Gender:</label>
      <input type="text" class="form-control" id="gender" placeholder="Enter Gender" name="gender">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    
    </div>
    <button type="submit"<!–– class="btn btn-default">Submit</button>
  </form>



<!––<form action="index.php?page=accounts&action=register" method="post">
  <!––  First name: <input type="text" name="fname"><br>
  <!––  Last name: <input type="text" name="lname"><br>
  <!––  Email: <input type="text" name="email"><br>
   <!–– Phone: <input type="text" name="phone"><br>
   <!–– Birthday: <input type="text" name="birthday"><br>
   <!–– Gender: <input type="text" name="gender"><br>
   <!–– Password: <input type="password" name="password"><br>
   <!–– <input type="submit" value="Submit form">
<!––</form>



<script src="js/scripts.js"></script>
</body>
</html>