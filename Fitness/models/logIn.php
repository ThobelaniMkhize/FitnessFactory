<?php
    
 class User
 {
     public $user_name;
      public $user_role;
     
     public function __construct($user_name,$user_role)
     {
         $this->user_name = $user_name; 
         $this->user_role  = $user_role;               
  
     }
     
     public static function find($user_name, $password)
     {
       
     	$list = array();
      		$db = Db::getInstance();
	  	$sql = "SELECT user_name, user_role FROM tbluser WHERE  user_name = '$user_name' AND password= '$password' ";
	  	$req = $db->query($sql);
		$i=0;
      		// we create a list of Student objects from the database results
         	foreach ($req->fetchAll() as $user) {
        		$list[] = new User($user['user_name'], $user['user_role']);
			$i++;
        	}
        	if ($i>0)
			return $list[0];  //this contains the username and role in an object
	  	else
			return false;
    	}
 }
?>