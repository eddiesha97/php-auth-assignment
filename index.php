<?php session_start();

/*
* This file should be a secure protected file, which cannot be accessed unless the user
* has successfully logged in with his/her credentials from users.txt.
* 
* This file should display a dashboard with data from the northwind database
*/
?>

<html><body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</html>

<?php
    echo "<h1> Hi " .$_SESSION[""]. ", you have been logged in. </h1>";
    echo "<br><form action='logout.php' method='get'><button type='submit'>LOGOUT</button></form>";
?>

<html><body>
<img src="dashboard.png">
</html>

