<?php 
   $path = '/dir1/myfile.php';
   $file = 'file1.txt';
/*
  //  //Return filename
  //  echo basename($path);

   // //Return filename without  ext
  //  echo basename($path, '.php');

   // //Return the dir name from path
  //  echo dirname($path);

  // //Check if file exists
  //echo file_exists($file);

  // Get abs path
  //echo realpath($file);

  // //Checks to see if file (folder not file)
  // echo is_file($file);

  // //Check if writeable
  // echo is_writable($file);

  // // Check if readable
  // echo is_readable($file);

  // // Get File size,(in bytes)
  // echo filesize($file);

  // // Create a directory
  //mkdir('texting');


// Remove dir(Nothing can be in it)
rmdir('testing');


// copy file
echo copy ('file1.txt', 'file2.txt');

// Rename file
//rename('file2.txt', 'myfile.txt');

//  Delete file
unlink('myfile.txt');


// write from file to string
echo file_get_contents($file);

// Write string to file
// Returns filsize in bytes
// Replaces what is in the file
echo file_put_contents($file, 'Goodbye World');

// Append to file
$current = file_get_contents($file);
$current .= 'Goodby World';
file_put_contents($file, $current);

// Using file handles
//  1. reading
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
fclose($handle);
*/
// Using file handles
//  1. writing
$handle = fopen('file2.txt', 'w');
$txt = "John Doe\n";
fwrite($handle, $txt);
$txt = "Steve Smith\n";
fwrite($handle, $txt);
fclose($handle);
