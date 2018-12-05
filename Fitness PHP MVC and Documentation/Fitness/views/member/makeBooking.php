<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>  
 <html>
      <head>  
           <title>Fitness Factory
               
           </title>  
      </head>  
      
      
        
      
      <body>  
           <br /><br />  
           <div> 
               
               <div class="hed">MAKE BOOKING</div>
               <form method="POST" action="">
                     
                   
                
              <div class="input-group">
                    <label>SELECT SESSION</label> 
                    <!--<input type=text name=gender>-->
                    <?php 
                    echo "<select name='sess_id'>";
                        
                        foreach($session as $sess)
                        {
                        echo "<option value ='".$sess->sess_id."'>".$sess->sess_name."</option>";
                        }
                        
                    echo "</select>";
                     ?>
                   </div>
                     
                   
                   <div class="input-group">
                     <label>BOOK DATE</label> 
                     <input type=date name=book_date required ="">
                   </div>
                     
                   
                     
                     <input type=submit name=submit class="btn btn-info" value=Submit >  
                     <input type=hidden name=controller value='member'>
                     <input type=hidden name=action value='makeBooking'>
                 
                </form>
             
           </div>  
      </body>  
 </html>

