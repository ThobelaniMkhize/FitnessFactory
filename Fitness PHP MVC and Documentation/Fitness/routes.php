<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function call($controller, $action)
{
    require_once ('controllers/' . $controller . '_controller.php');
    
    switch ($controller) 
    {
        case 'pages':
           $controller = new pagesController();
            break;
        
        case 'member':
           $controller = new memberController();
           require_once ('models/member.php');
            break;  
        
        
        case 'admin':
            $controller = new adminController();
            require_once ('models/admin.php');
            break;
            
        
        case 'logIn':
            $controller = new loginController();
            require_once ('models/logIn.php');
            break;
    }
    $controller->{$action}();
}

$controllers = array('pages'=>array('home','error','getData'),'member'=> array('myProfile','findUser','makeBooking','memBookings'),'logIn'=> array('login','addMember'),'admin'=>array('showAllMembers','deleteMember','bookingSessionReport','searchMember'));

if(array_key_exists($controller, $controllers))
{
    if(in_array($action, $controllers[$controller]))
    {
        call($controller, $action);
    }
    else {
            call('pages','error');
        }
}
//else 
   //  {
    //    call('pages','error');
   //  }

?>