<?php
/*
* This file is to process the logout and remove authentication session.
*
*/
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html><body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./bootstrap/bootstrap.min.js"></script>
      <script>
         setTimeout(function(){
            window.location.href = 'login.php';
         }, 5000);
      </script>
      
	  <div class="w3-container" style="padding:50px 16px" id="about">
      <h1>Logged out. Web page redirects after 5 seconds.</h1></div><br><br><br><br><br><br><br><br>
   </body></html>