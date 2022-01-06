<?php 

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $userslist = "users.txt";
  $string =  file_get_contents($userslist);
  $content = explode("\n", $string);
  $data = array();

  $success = false;
  foreach ($content as $users) {
      $userdetail = array_map("trim", explode("|", $users));

      if (!isset($userdetail[1])) {
          $userdetail[1] = null;
      }
      $data[$userdetail[0]] = $userdetail[1];


      if ($username == $userdetail[0] && $password == $userdetail[1]) {
          $success = true;
          break;
      }
  }
  if ($success) {
    session_start();
    $_SESSION["$user_name"] = $username;
    header("Location: index.php");
} else {
    echo "<br> You have entered the wrong username or password. Please try again. <br>";
}
}
			
 ?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

#regForm {
  background-color: #ffffff;
  margin: 20px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

button {
  background-color: black;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
<form id="regForm" method="POST">
  <h1>Login</h1>
  <div class="tab">Username:
    <p><input placeholder="Username..."  name="username"></p>
	Password:
    <p><input placeholder="Password..."  name="password" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="submit" id="login" name="login">Login</button>
    </div>
  </div>
  

</form>
<br><br><br>



</body>
</html>
