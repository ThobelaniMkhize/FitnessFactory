<html>
    <title>VIEW ALL MEMBERS</title>
     <link rel="stylesheet" href="styleIndex.css">
    <header>
        
    </header>

     <form>
 
    <div id="container">
      <div id="content">   
<table class="data-table">
        <caption></caption>
        <thead>
            <tr>  
                <th>MEMBER ID</th>
               <th>FIRST NAME</th>
               <th>SURNAME</th>
               <th>GENDER</th>
               <th>INITIALS</th>
               <th>ID DOCUMENT</th>
               <th>ADDRESS</th>
               <th>CELL NUMBER</th>
               <th>E-MAIL</th>
               <th>USER NAME</th>
               
            </tr>
        </thead>
        <tbody>
<?php


foreach($member as $memb)
{
    echo "<tr>
           <td>$memb->user_name</td>
           <td>$memb->Fname</td>
           <td>$memb->surname</td>
           <td>$memb->gender</td>
           <td>$memb->initial</td>
           <td>$memb->memberID</td>
           <td>$memb->address</td>
           <td>$memb->phoneNo</td>
           <td>$memb->email</td>
           
        </tr>";
}
?>
</table>

<?php
//echo "<input type=hidden name=controller value = admin>";
//echo "<input type=hidden name=action value = showAllMembers>";

?>
                
    </form>    </div>
     </div>
                    
</html>
