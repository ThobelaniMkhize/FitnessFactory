<DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <title>LOG IN
        <link rel="stylesheet" href="styleIndex.css">
        </title>
        
   <?php
   include "HomeHeader.php";
   ?>
		
        
        <form action ="" method ="POST">
            <table>
                <tr>
                    <td align="center"> 
                        <label>USER NAME</label>
                        <input type =text name =user_name><br><br>
                    </td>

                    
                </tr>
                <tr>
                    <td align="center">
                        <label>PASS WORD</label>
                        <input type =password name =password><br><br>
                    </td>
                </tr>
                <tr>
                        <td>
                        <input type =submit name =btnSubmit value ="LOG IN"/>
                        </td>
                </tr>
                <tr>
                    <td>
                    
            Not yet a member? <a href="?controller=logIn&action=addMember">Sign up</a>
                  
                  </td>
                </tr>
              </table>
            
               <input type =hidden name =controller value =logIn>
               <input type =hidden name =action value =login> 
            
        </form>


    </body>
</html>