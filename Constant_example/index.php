<?php
// Case sensitive
define( 'NAME', 'John' );

// Case insensitive
define( 'LAST', 'Morris', true );

// Scope
echo NAME . "<br>";
echo last . "<br>";

function my_func() {
  echo NAME . LaSt;
}

my_func();