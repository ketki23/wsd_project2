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
  <a class="navbar-brand" href="#">Task Application</a>
  </div>
  <div class="collapse navbar-collapse" id="Navigationbar">
  <ul class="nav navbar-nav">
  <li class=""><a href="index.php?page">Home</a></li>
  <!––<li><!––<a href="index.php?page=accounts&action=all"><!––All Accounts</a><!––</li>
  <!–– <li><!–– <a href="index.php?page=tasks&action=all"><!––Todo Tasks</a><!–– </li>
  <!–– <li><!–– <a href="index.php?page=tasks&action=create"><!––Add task</a><!–– </li>
  <!–– <li><!–– <a href="index.php?page=accounts&action=edit"><!––Update Account</a><!–– </li>

  <!––<li><!––<a href="index.php"><!––Log Out</a><!––</li>
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

 



<form action="index.php?page=accounts&action=register" method="post">

    <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" minlength="1" required >
    </div>

    <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" minlength="1" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required >
    </div>

    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
    </div>

    <div class="form-group">
        <label for="phone">Birthday:</label>
        <input type="text" class="form-control" id="birthday" placeholder="birthday" name="birthday">
    </div>

    <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="text" class="form-control" id="gender" placeholder="gender" name="gender">
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password" minlength="6" required >
    </div>
    <!––First name: <input type="text" name="fname" required>
    <!––Last name: <input type="text" name="lname" required>
    <!––Email: <input type="text" name="email" required>
    <!––Phone: <input type="text" name="phone">
    <!––Birthday: <input type="text" name="birthday">
    <!––Gender: <input type="text" name="gender">
    <!––Password: <input type="password" name="password" required>
    <input type="submit" value="Register">
</form>



<script src="js/scripts.js"></script>
</body>
</html>