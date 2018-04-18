<?php
 require_once 'config/config.php';
 require_once 'config/db.php';

 if(isset($_POST['delete'])){
  $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

   $query = "DELETE FROM posts "
          . "WHERE id = {$delete_id}";
// die($query);
   if(mysqli_query($conn, $query)){
     header('Location: ' . ROOT_URL . '');
   }else{
     echo 'ERROR: ' . mysqli_error($conn);
   } //here
  }

 $id = mysqli_real_escape_string($conn, $_GET['id']);
 $query = 'SELECT * FROM posts where id=' . $id;

 // Get results
 $result = mysqli_query($conn, $query);

 //Fetch Data
 $post = mysqli_fetch_assoc($result);
//  var_dump($post);

 // Free Result
 mysqli_free_result($result);

 // Close Connection
 mysqli_close($conn);
 ?>
  <?php include('inc/header.php'); ?>
    <div class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
     <h1><?php echo $post['title']; ?></h1>

           <p>
           <small style="font-size:20px;">
             Created on <?php echo $post['created_at']; ?>
             by <?php echo $post['author']; ?>
           </small>
           </p>
             <p>
                <?php echo $post['body']; ?>
            </p>
            <hr>
            <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

               <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
               <input type="submit" name="delete" value="Delete" class="btn btn-danger">

            </form>
            <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id'];?>" class="btn btn-default">Edit</a>

       </div>

   
<?php include('inc/footer.php'); ?>