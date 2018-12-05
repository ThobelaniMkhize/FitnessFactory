<?php




?>

<!DOCTYPE html>  
 <html>
      <head>  
           <title>Fitness Factory
               
           </title>  
 <script language=javascript>
function validNumber(anum)
{
if (isNaN(anum)) return false;
return true;
}

function validate( password, password2, email)
{

if (password != password2)
{alert ("passwords not the same");
return false;
}

valid = false;
for (i=0; i<email.length; i++)
{
    if (email[i] == '@')
	valid = true;
}
if (!valid) 
{
alert ("invalid email");
}
return valid;
}


</script>
      </head>  
      
      
        
      
      <body>  
           <br /><br />  
           <div> 
               <?php
               include "Header.php"
               ?>
               <div class="hed">REGISTRATION</div>
               <form method="POST" action="" onsubmit="return validate( password.value, password2.value, email.value)">
                     
                   
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
                     
                   <div class="input-group" required ="">
                     <label>ID NUMBER</label> 
                     <input type=text name=memberID  pattern="[0-9]{13}"  title="13 digits code"  required ="">
                   </div>
                   
                   
                   <div class="input-group">  
                     <label>ADDRESS</label> 
                     <input type=text name=address required ="">
                   </div>
                     
                   
                   <div class="input-group">
                     <label>CELL NUMBER</label> 
                     <input type=text name=phoneNo  pattern="[0-9]{10}"  title="10 digits code"   required ="" >
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
                    <div class="input-group">
                     <label>RETYPE PASSWPRD</label> 
                     <input type=password name=password2 required ="">
                   </div>
                   
                     
                     
                     <input type=submit name=submit class="btn btn-info" value=Submit >  
                     <input type=hidden name=controller value='logIn'>
                     <input type=hidden name=action value='addMember'>
                 
                </form>
             
           </div>  
      </body>  
 </html>

