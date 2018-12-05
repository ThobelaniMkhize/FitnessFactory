<?php
include 'models/booking.php';
include 'models/session.php';


class memberController
{
    public $member;
    public $session;
    public  $booking;
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
    
    
    public function  makeBooking()
    {
        
        session_start();
        $user_name = $_SESSION['user_name'];
        
        $session = BSession::allSession();
         if(isset($_POST['submit']))
        {
           
           $sess_id = $_POST['sess_id'];;  
           $book_date = $_POST['book_date'];
          
           
           Booking::makeBooking($user_name,$sess_id,$book_date);
            $member =Member::find($user_name);
        }
          
           
  require_once('views/menuMember.php');
 require_once('views/member/makeBooking.php');
              
          
        
    }
    
     public static function memBookings()
     {
         session_start();
        $user_name = $_SESSION['user_name'];
        if (isset($_GET['sess_id'])) {	// is the page refreshed
			//$user_name= Member::find($user_name)->user_name;
                        //$member =Member::find($user_name);
			$surname = $_GET['sess_id'];
			$firstname = $_GET['book_date'];
			
		$booking=Booking::memBookings($user_name);
		
        }
        else {
           $booking= Booking::memBookings($user_name);
        }
        require_once('views/menuMember.php');
        require_once('views/member/viewBookings.php');	
        
        
     }
            
   
	

    
    
}
	
?>
