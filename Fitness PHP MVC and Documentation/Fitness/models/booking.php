<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Booking
{
  public $user_name;
  public  $sess_id;
  public $bk_id;
  public  $book_date;
  public $sess_name;

  
   public function __construct($user_name,$sess_id,$bk_id,$book_date,$sess_name)
   {
       $this->user_name=$user_name;
               
               $this->sess_id=$sess_id;
               $this->bk_id=$bk_id;
               $this->book_date=$book_date;
               $this->sess_name=$sess_name;
               
               
               
   }
   
  public static function allBookings() 
          {
             $list = array();
        $db = Db::getInstance();   
        $req = $db->query('SELECT b.* s.sess_name FROM tblbooking b ,tblsession s WHERE s.sess_id = b.sess_id');
      		
      	foreach($req->fetchAll() as $booking)
            {
        	$list[] = new Booking ( $booking['user_name'],$booking['sess_id'],$member['bk_id'],$booking['book_date'],$booking['price'],$booking['sess_name']);
            }

      	return $list;

          }
  public static function memBookings($user_name)
          {
       $list = array();
              $db = Db::getInstance();
        //$qry = ('SELECT * FROM tblmember WHERE password = :password');
        $req= $db->query('SELECT b.*,s.sess_name FROM tblbooking b,tblsession s WHERE s.sess_id = b.sess_id AND  user_name = "'.$user_name.'"');
        //$db->prepare($qry);
        //$req = $db->query($qry);
        
        foreach ( $req->fetchAll() as $booking)
        {
          $list[] = new Booking ( $booking['user_name'],$booking['sess_id'],$member['bk_id'],$booking['book_date'],$booking['sess_name']);
        }
        return $list;
          }
          
  public static function makeBooking($user_name,$sess_id,$book_date)
          {
                      $sql = "INSERT INTO tblbooking(user_name,sess_id,book_date)" 
                             ."VALUES('$user_name','$sess_id','$book_date')";
        $db = Db::getInstance();
        //$db->prepare($sql);
        
        try
        {
            $db->query($sql);
            echo '<script language="javascript">';
            echo 'alert("successfully booked")';
            echo '</script>';
        } 
        catch (PDOException $e) 
        {
            
            echo '<script language="javascript">';
echo 'alert("you are already booked for this date")';
echo '</script>';
        }
        

          }
  
}

