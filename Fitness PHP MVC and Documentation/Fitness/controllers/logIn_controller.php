<?php
include "models/member.php";
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
    public function addMember()
           
    { 
           //$password = 'member1';
           


           if(isset($_POST['submit']))
        {
           $Fname = $_POST['Fname'];;
           $surname = $_POST['surname'];;  
           $gender = $_POST['gender'];
           $initial = $_POST['initial'];
           $memberID = $_POST['memberID'];
           $address = $_POST['address'];
           $phoneNo = $_POST['phoneNo'];
           $email = $_POST['email'];
           $password = $_POST['password'];
           
           $user_name =$_POST['user_name'];
           echo "user name is".$user_name;
          // $user_role =$_POST['user_role'];
           
           Member::addMember($Fname,$surname,$gender,$initial,$memberID,$address,$phoneNo,$email,$user_name,'aaa',$password);
               //$user = User::find($user_name,$password);
           require_once ('views/logIn/logIn.php');
        }
          else if(!isset($_POST['submit']))
          {
              require_once 'views/member/addmember.php';

              
          }
         else 
             {
                     echo'No Values';
            }
           
          //include ("models/member.php");
            $_SESSION['user_name'] = $_POST['user_name'];
             $member =Member::find($user_name);
         
           
    }
}
?>