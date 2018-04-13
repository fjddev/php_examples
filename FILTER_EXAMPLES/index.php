<?php
$string="Peter is a great guy!";

echo filter_var($string, FILTER_CALLBACK,
array("options"=>"strtoupper"));
?> 