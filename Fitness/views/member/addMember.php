<?php

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
               <?php
               include "Header.php"
               ?>
               <form method="POST" action="">
                     
                   
                   <div class="input-group">
                     <label>NAME</label>  
                     <input type=text name=Fname required ="">  
                   </div>
                   
                   <div class="input-group">
                     <label>SURNAME</label>    
                     <input type=text name=surname required ="">
                   </div>
                     
                   
                   <div class="input-group">
                    <label>GENDER</label> 
                    <!--<input type=text name=gender>-->
                    <select name="gender">
                        <option>Male</option>
                        <option>Female</option>
                     </select>
                   </div>
                     
                   
                   <div class="input-group">
                     <label>INITIALS</label> 
                     <input type=text name=initial required ="">
                   </div>
                     
                   <div class="input-group">
                     <label>ID NUMBER</label> 
                     <input type=text name=memberID required ="">
                   </div>
                   
                   
                   <div class="input-group">  
                     <label>ADDRESS</label> 
                     <input type=text name=address required ="">
                   </div>
                     
                   
                   <div class="input-group">
                     <label>CELL NUMBER</label> 
                     <input type=text name=phoneNo required ="">
                   </div>
                     
                   
                   <div class="input-group">
                     <label>E-MAILE</label> 
                     <input type=text name=email required ="">
                   </div>
                     
                   <div class="input-group">
                     <label>USER NAME</label> 
                     <input type=text name=user_name required ="">
                   </div>
                   
                   <div class="input-group">
                     <label>PASSWPRD</label> 
                     <input type=password name=password required ="">
                   </div>
                   
                     
                     
                     <input type=submit name=submit class="btn btn-info" value=Submit >  
                     <input type=hidden name=controller value='member'>
                     <input type=hidden name=action value='addmember'>
                 
                </form>
             
           </div>  
      </body>  
 </html>

