<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class BSession
{
    //public $password;
    public $sess_id;
    public $sess_name;
    public $sess_cost;
  
   
    
    public function __construct($sess_id,$sess_name,$sess_cost)
    {
        //$this->password =$password;
        $this->sess_id=$sess_id;
        $this->sess_name =$sess_name;
        $this->sess_cost = $sess_cost;
    
        
    }
    
    public function allSession() 
      
     {
         $list = array();
        $db = Db::getInstance();   
        $req = $db->query('SELECT * FROM tblsession');
      		
      	foreach($req->fetchAll() as $session)
            {
        	$list[] = new BSession ( $session['sess_id'],$session['sess_name'],$member['sess_cost']);
            }

      	return $list;
        
    }
}