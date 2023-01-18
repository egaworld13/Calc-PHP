<?php
//* Automaticlu load all classes to main file.
spl_autoload_register('myAutoLoader');
function myAutoLoader($className){
  //* Folder that includes index file or file which represent loaded page.
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'includes') !==false){
  $path ='../classes/';
  
}else{
  $path = 'classes/';
}
  $extension = '.class.php';
  require_once $path . $className . $extension;
}



?>