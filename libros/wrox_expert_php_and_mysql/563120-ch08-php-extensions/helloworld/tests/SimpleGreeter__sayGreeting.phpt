--TEST--
SimpleGreeter::sayGreeting() member function
--SKIPIF--
<?php 

if(!extension_loaded('helloworld')) die('skip ');

 ?>
--FILE--
<?php
echo 'OK'; // no test case for this function yet
?>
--EXPECT--
OK