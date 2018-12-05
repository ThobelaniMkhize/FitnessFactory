<?php
//require_once('views/member/addMember.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class getData
{
public function getdata()
{
  $data['myname'] = $_POST['Fname'];
  $data['mysurname'] = $_POST['surname'];
  
  $this->load->view('member_controller.php', $data);
 } 
    
    
}
