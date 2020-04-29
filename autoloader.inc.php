<?php
spl_autoload_register( function($class){
  $classPath = 'classes/';
  $extention = '.class.php';
  $fullPath = $classPath . $class . $extention;
  include_once($fullPath);
});
?>
