<?php

class memberController
{
    public $member;
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
           $user_role =$_POST['user_role'];
           
               Member::addMember($Fname,$surname,$gender,$initial,$memberID,$address,$phoneNo,$email,$user_name,$user_role,$password);
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
           require_once ('views/logIn/logIn.php');
           
    }
    public function myProfile()
    {   
        session_start();
        $user_name = $_SESSION['user_name'];
	if (isset($_GET['surname'])) {	// is the page refreshed
			//$user_name= Member::find($user_name)->user_name;
                        //$member =Member::find($user_name);
			$surname = $_GET['surname'];
			$Fname = $_GET['Fname'];
                        $initial = $_GET['initial'];
                        $memberID = $_GET['memberID'];
                        $phoneNo = $_GET['phoneNo'];
                        $address = $_GET['address'];
                        $email = $_GET['email'];
                        $password = $_GET['password'];
                      
                        
			Member::updateMember($user_name, $surname, $Fname,$initial,$memberID,$address,$phoneNo,$email,$password);
		 $member =Member::find($user_name);
		//$user_name= Member::find($user_name);
        }
        else {
            $member =Member::find($user_name);
        }
               
		require_once('views/menuMember.php');	
      		require_once('views/member/updateProfile.php');
    }
    public function findUser()
    {
         session_start();
        $user_name = $_SESSION['user_name'];
        if (isset($_GET['surname'])) {	// is the page refreshed
			//$user_name= Member::find($user_name)->user_name;
                        //$member =Member::find($user_name);
			$surname = $_GET['surname'];
			$firstname = $_GET['firstname'];
			
		 $member =Member::find($user_name);
		//$user_name= Member::find($user_name);
        }
        else {
            $member =Member::find($user_name);
        }
		require_once('views/menuMember.php');	
      		require_once('views/member/viewProfile.php');
        
    }
            
   
	

    
    
}
	
?>
