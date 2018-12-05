<?php

class loginController
{
    public function login()
    {
        $user_name = filter_input(INPUT_POST,"user_name")?filter_input(INPUT_POST,"user_name"): '';
        $password = filter_input(INPUT_POST, "password")?filter_input(INPUT_POST,"password"): '';
        // $user_role = filter_input(INPUT_POST, "user_")?filter_input(INPUT_POST,"password"): '';
        
        $user = User::find($user_name,$password);
             
             
             if (!$user) {
			echo "Please provide login details";
			include ('views/logIn/logIn.php');  
		} else
		{	
                        Session_start();
			$user= User::find($user_name,$password);
			//echo "username is ".$user->role;
			
			$_SESSION['user_name'] = $user->user_name;
                        $user_role  = $user->user_role;
                        echo ' Use Role '.$user_role.' ';
			if ($user_role=='MEMBER')   
				require_once('views/menuMember.php');  //can we activate lecturer controller here???
			else
				require_once('views/menuAdmin.php');
			
		}
    }
}
?>