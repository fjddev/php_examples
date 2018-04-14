<?php
  if(isset($_POST["submit"])){
     $username = htmlentities($_POST["username"]);
      
     $user_time = time() + (86400 * 30);
     setcookie('username', $username, $user_time); //One hour

  
     header("Location: page2.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cookies</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="text" name="username" placeholder="Enter User Name">

      <input type="submit" name="submit" value="Submit">
   </form>
  
</body>
</html>