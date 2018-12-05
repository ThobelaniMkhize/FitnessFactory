<?php
  require_once('connection.php');
  if (isset($_POST['controller']) && isset($_POST['action'])) 
  {
    $controller = $_POST['controller'];
    $action     = $_POST['action'];


  }
  
  else 
      if (isset($_GET['controller']) && isset($_GET['action'])) 
  {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];


  } 
      
  else 
      {
        /*$controller = 'member';   //default controller
        $action     = 'addMember';	//default action*/
        $controller = 'logIn';   //default controller
        $action     = 'login';	//default action
      }

require_once('routes.php');

?>
 