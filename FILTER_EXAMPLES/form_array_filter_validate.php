<?php
$filters = array
(
"name" => array
  (
  "filter"=>FILTER_CALLBACK,
  "options"=>"ucwords"
  ),
"age" => array
  (
  "filter"=>FILTER_VALIDATE_INT,
  "options"=>array
    (
    "min_range"=>1,
    "max_range"=>120
    )
  ),
"email"=> FILTER_VALIDATE_EMAIL,
);
print_r(filter_input_array(INPUT_POST, $filters));

echo "<br><br><br>"
?>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
     <label>Name</label>
     <input type="text" name="name" >
     <br>
     <label>Age</label>
     <input type="text" name="age" >
     <br>
     <label>Email</label>
     <input type="text" name="email" >
     <button type="submit">Submit</button>
   </form>
