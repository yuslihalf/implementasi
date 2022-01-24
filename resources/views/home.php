<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>

    <title>Welcome to ItSolutionStuff.com</title>
    <style type="text/css">
        body{
            text-align: center;
        }
    </style>
</head>

<body>

<h1>Website Home Page</h1>
<img src="<?php echo $_SESSION['image'];  ?>">
<p><strong>Id: </strong> <?php echo $_SESSION['id'];  ?> </p>

<p><strong>Name: </strong><?php echo $_SESSION['name'];  ?></p>

<p><strong>Email: </strong><?php echo $_SESSION['email'];  ?></p>
<a href="https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://codingrakitan.000webhostapp.com/" >Sign out</a>

</body>

</html>