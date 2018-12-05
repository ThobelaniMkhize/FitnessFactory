<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ('Member.php');

class Admin
{
      public $user_name;
    public $Fname;
    public $surname;
    public $gender;
    public $initial;
    public  $memberID;
    public $address;
    public $phoneNo;
    public $email;
    public $user_role;
    public $password;
    
    public function __construct($user_name,$user_role,$Fname,$surname,$gender,$initial,$memberID,$address,$phoneNo,$email,$password)
    {
        //$this->password =$password;
        $this->user_name =$user_name;
        $this->user_role =$user_role;
        $this->Fname = $Fname;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->initial = $initial;
       $this->password=$password;
        $this->address = $address;
        $this->phoneNo = $phoneNo;
        $this->email = $email;
        $this->memberID=$memberID;
        
    }
    
    public static function allMember()
    {
        $list = array();
        $db = Db::getInstance();   
        $req = $db->query('SELECT * FROM tbluser');
      		
      	foreach($req->fetchAll() as $member)
            {
        	$list[] = new Member( $member['user_name'],$member['user_role'],$member['Fname'],$member['surname'],$member['gender'],$member['initial'],$member['memberID']
                        ,$member['address'], $member['phoneNo'],$member['email'],$member['password']);
            }

      	return $list;
    }
     public static function searchMember($name)
    {
        $list = array();
        $db = Db::getInstance();   
        $req = $db->query('SELECT * FROM tbluser Fname ='.$name.'');
      		
      	foreach($req->fetchAll() as $member)
            {
        	$list[] = new Member( $member['user_name'],$member['user_role'],$member['Fname'],$member['surname'],$member['gender'],$member['initial'],$member['memberID']
                        ,$member['address'], $member['phoneNo'],$member['email'],$member['password']);
            }

      	return $list;
    }
    
    
    
    public static function deleteMember($user_name)
    {
            $sql = $sql="CALL deleteUser  ('$user_name')";;  
                $db = Db::getInstance();
                //$db->query($sql);
		try 
                {
		$db->query($sql);
                }
		catch(pdoexception $e) 
                {
		 echo $e;
                }
    }
}
?>