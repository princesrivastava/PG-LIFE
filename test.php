<?php
$a = "Hello World!"
$b = &a;
$a = "Hi $b";
echo $a." ";
echo $b;
?>