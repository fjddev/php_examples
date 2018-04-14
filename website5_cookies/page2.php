<?php

   setCookie('username','Frank', (int)(time()* (86400 * 30))); //day
   //Remove Cookie 
   setCookie('username','Frank', (int)(time() - (3600))); // Remove Cookie
   if(count($_COOKIE)){
     echo 'There are ' . count($_COOKIE) . ' cookies<br>';
   }else{
     echo 'There are no cookies<br>';
   }
   if(isset($_COOKIE['username'])){
     echo 'User ' .$_COOKIE['username'] .  ' is set.<br>';
   }else{
     echo "User is not set.<br>";
   }