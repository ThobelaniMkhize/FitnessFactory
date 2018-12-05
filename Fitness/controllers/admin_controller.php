<?php

include 'models/admin.php';

class adminController
{

     public $member;
    
public static function showAllMembers()
    {
        $member = Admin::allMember();
        require_once ('views/menuAdmin.php');
        
        require_once ('views/admin/viewMember.php');
    }
    
}


?>