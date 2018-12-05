<?php
include 'models/bookSessionReports.php';

class adminController
{

    
    
public function showAllMembers()
    {
        $member = Admin::allMember();
        require_once ('views/menuAdmin.php');
        
        require_once ('views/admin/viewMember.php');
    }
    public function deleteMember()
    {
      //  $member = Admin::allMember();
     
         $user_name =$_GET['user_name'];
            
     
        
        
        Admin::deleteMember($user_name);
        
        $member = Admin::allMember();
       
         require_once ('views/menuAdmin.php');
        
        require_once ('views/admin/deleteMember.php');
        
        
    }
    
    public function  showAllBookings()
    {
        $booking = Booking::allBookings();
        require_once ('views/menuMember.php');
    }
      public function bookingSessionReport() 
     {
             /*if (isset($_GET['date1']))  
        
     {  
                $date1 = $_GET['date1'];
                $date2 = $_GET['date2'];
            } 
    
        else 
                {
                $prev = date_create('first day of October 2018');
             
   $date1 = $prev->format('Y-m-d');
              
  
                $future = date_create('first day of November 2018');
              
  $date2 = $future->format('Y-m-d');
            }    */
          
  if (isset($_GET['firstdate']))  
            {  
             
   $firstdate = $_GET['firstdate'];
                $seconddate = $_GET['seconddate'];
 

               $booking = Bookings::bookingSessionReport($firstdate,$seconddate);
     
           $totalList = Bookings::bookingSessionReport($firstdate,$seconddate);
                
        
        $total = Bookings::tot($firstdate,$seconddate);
                
           
     //$total = $totalList[0]->totalAmnt + $totalList[1]->totalAmnt + $totalList[2]->totalAmnt + $totalList[3]->totalAmnt;
  
          require_once('views/menuAdmin.php');		
     	    
            require_once('views/Admin/bookingSessionReports.php');
      
      } else 
                {
                  $prev = date_create('first day of October 2018');
 
                $firstdate = $prev->format('Y-m-d');
   
             $future = date_create('first day of November 2018');
                $seconddate = $future->format('Y-m-d');
             
   $booking = Bookings::bookingSessionReport($firstdate,$seconddate);
                $totalList = Bookings::bookingSessionReport($firstdate,$seconddate);
                
     
           $total = Bookings::tot($firstdate,$seconddate);
                
      
          //$total = $totalList[0]->totalAmnt + $totalList[1]->totalAmnt + $totalList[2]->totalAmnt + $totalList[3]->totalAmnt;
            
    require_once('views/menuAdmin.php');		
     	    
                require_once('views/Admin/bookingSessionReports.php');
         
      }
            
            
           
    }
}

