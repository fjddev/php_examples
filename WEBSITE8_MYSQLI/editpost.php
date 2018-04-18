<?php
 require_once 'config/config.php';
 require_once 'config/db.php';

 if(isset($_POST['submit'])){
  $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);

   $title = mysqli_real_escape_string($conn, $_POST['title']);
   $author = mysqli_real_escape_string($conn, $_POST['author']);
   $body = mysqli_real_escape_string($conn, $_POST['body']);



   $query = "UPDATE posts SET"
          . " title = '$title', "
          . " author = '$author', "
          . " body = '$body' "
          . "WHERE id = {$update_id}";
// die($query);
   if(mysqli_query($conn, $query)){
     header('Location: ' . ROOT_URL . '');
   }else{
     echo 'ERROR: ' . mysqli_error($conn);
   }

 }
 
 $id = mysqli_real_escape_string($conn, $_GET['id']);
 echo $id;
 $query = 'SELECT * FROM posts where id=' . $id;

 // Get results
 $result = mysqli_query($conn, $query);

 //Fetch Data
 $post = mysqli_fetch_assoc($result);
var_dump($post);

 // Free Result
 mysqli_free_result($result);

 // Close Connection
 mysqli_close($conn);
 
 ?>
 <?php include ('inc/header.php');
?>
    <div class="container">
      <h1>Edit Post</h1>
       <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
       <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
       </div>
       <div class="form-group">
          <label>Author</label>
          <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
       </div>
       <div class="form-group">
          <label>Body</label>
          <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
       </div>   
       <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
       <input type="submit" name="submit" value="Submit" class="btn btn-primary">   

        
       </form>
      </div>
    <?php include('inc/footer.php');   

