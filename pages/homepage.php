<!doctype html>

<html lang="en">
<body style="background-color:tan;">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
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