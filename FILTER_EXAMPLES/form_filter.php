<?php
  //  if(filter_has_var(INPUT_POST,'name')){
  //    echo 'Name has a value';
  //  }else{
  //    echo 'Name does not have a value';
  //  }

  //  if(filter_has_var(INPUT_POST,'email')){   
  //      $email = $_POST['email'];
  //      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  //      echo "<br>FILTERED: {$email}";
  //     //  if(filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL)){
  //       if(filter_var($email, FILTER_VALIDATE_EMAIL)){
  //        echo 'email is valid';
  //      }else{
  //        echo 'email is invalid';
  //      }
  //  }

/*   LIST OF FILTER VALIDATIONS
Constant 				   		        Description
FILTER_VALIDATE_BOOLEAN 	 	    Validates a boolean
FILTER_VALIDATE_EMAIL 			    Validates an e-mail address
FILTER_VALIDATE_FLOAT			      Validates a float
FILTER_VALIDATE_INT 			      Validates an integer
FILTER_VALIDATE_IP 				      Validates an IP address
FILTER_VALIDATE_REGEXP 			    Validates a regular expression
FILTER_VALIDATE_URL 			      Validates a URL
FILTER_SANITIZE_EMAIL 			    Removes all illegal characters from an e-mail address
FILTER_SANITIZE_ENCODED 		    Removes/Encodes special characters
FILTER_SANITIZE_MAGIC_QUOTES 	  Apply addslashes()
FILTER_SANITIZE_NUMBER_FLOAT 	  Remove all characters, except digits, +- and optionally .,eE
FILTER_SANITIZE_NUMBER_INT 		  Removes all characters except digits and + -
FILTER_SANITIZE_SPECIAL_CHARS 	Removes special characters
FILTER_SANITIZE_FULL_SPECIAL_CHARS 	  	 
FILTER_SANITIZE_STRING 			    Removes tags/special characters from a string
FILTER_SANITIZE_STRIPPED 		    Alias of FILTER_SANITIZE_STRING
FILTER_SANITIZE_URL				      Removes all illegal character from s URL
FILTER_UNSAFE_RAW 				      Do nothing, optionally strip/encode special characters
FILTER_CALLBACK					        Call a user-defined function to filter data

*/
// //Remove non-number example
// $var = '3klb44z67';
// var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

// $var = '<script>alert(1); </script>';
// echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
$arr = array(
    "name" => "brad traversy",
    "age" => "150",
    "email" =>"brad@gmail...com"
);
$filters = array(
   "name" => array(
       "filter" => FILTER_CALLBACK,
       "options"=>"ucwords"
   ),
   "age" => array(
     "filter" => FILTER_VALIDATE_INT,
   "options"=> array(
       "min_range"=> 1,
       "max_range"=> 100
   )
   ),
   "email" => FILTER_VALIDATE_EMAIL
  );
  print_r(filter_var_array($arr, $filters));
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
