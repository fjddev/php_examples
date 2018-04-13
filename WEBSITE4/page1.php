<?php
   if(isset($_POST['submit'])){
     session_start();
     // htmlentities: convert to html chars
     $_SESSION['name'] = htmlentities($_POST['name']);
     $_SESSION['email'] = htmlentities($_POST['email']);
     $_SESSION['message'] = htmlentities($_POST['message']);

     header('Location: page2.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <br>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-group" value="">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-group" value="">
      </div>

      <div class="form-group">
        <label>Message</label>
        <textarea name="message" class="form-control" ></textarea>
      </div>  
      <br>  
      <button type="submit" name ="submit" class="btn btn-primary">Submit</button>  

    </form><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>