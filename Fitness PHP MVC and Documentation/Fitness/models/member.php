<?php

class Member
{
    //public $password;
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
    
    public static function find($user_name)
    {
        $db = Db::getInstance();
        //$qry = ('SELECT * FROM tblmember WHERE password = :password');
        $req= $db->query('SELECT * FROM tbluser WHERE user_name = "'.$user_name.'"');
        //$db->prepare($qry);
        //$req = $db->query($qry);
        $req->execute(array('password'=>$password));
        $member = $req->fetch();
        
        return new Member($member['user_name'], $member['user_role'],$member['Fname'],$member['surname'],$member['gender'],$member['initial'],$member['memberID'],$member['address'],$member['phoneNo'],$member['email'],$member['password']);
    }
    
    
    
    public static function addMember($Fname,$surname,$gender,$initial,$memberID,$address,$phoneNo,$email,$user_name,$user_role,$password)
    {
      
        $sql = "INSERT INTO tbluser(Fname,surname,gender,initial,memberID,address,phoneNo,email,user_name,user_role,password)" 
                ."VALUES('$Fname','$surname','$gender','$initial','$memberID','$address','$phoneNo','$email','$user_name','MEMBER','$password')";
        $db = Db::getInstance();
        //$db->prepare($sql);
       // $db->query($sql);
        
        try
        {
            $db->query($sql);
        } 
        catch (PDOException $e) 
        {
            
            echo '<script language="javascript">';
            echo 'alert("Use a different user name")';
            echo '</script>';
        }
        
    }
    
     public static function updateMember($user_name, $surname, $Fname,$initial,$memberID,$address,$phoneNo,$email,$password) {
      		$db = Db::getInstance();
      		// we make sure $studnr is an integer
      		//$studnr = intval($studnr) or die ('student number must be integer');
	  	$sql = "UPDATE tbluser SET surname = '".$surname."', Fname = '".$Fname."',initial = ' ".$initial."', "
                        . "memberID = '".$memberID."',address = '".$address."', phoneNo = '".$phoneNo."', "
                        . "email = '".$email."'   WHERE user_name = '$user_name'";
               // echo $sql;
	  	$db->prepare($sql);
	      	$db->query($sql);
                
             try
        {
            $db->query($sql);
            echo '<script language="javascript">';
            echo 'alert("UPDATED")';
            echo '</script>';
        } 
        catch (PDOException $e) 
        {
            
            echo '<script language="javascript">';
            echo 'alert("THE WAS A ERROR UPDATING")';
            echo '</script>';
        }  
                
       }
      
}
?>