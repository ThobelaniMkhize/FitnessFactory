<h1>Profile</h1>




    
    
     <div id="container">
      <div id="content">   
<table class="data-table">
        <caption></caption>
        <thead>
            <tr>  
                <th>USER NAME</th>
               <th>FIRST NAME</th>
               <th>SURNAME</th>
               <th>GENDER</th>
               <th>INITIALS</th>
               <th>EMAIL</th>
               <th>PHONE NO:</th>
               
               
               
            </tr>
        </thead>
        <tbody>
    <?php




    echo "<tr>
           <td>$member->user_name</td>
           <td>$member->Fname</td>
           <td>$member->surname</td>
               <td>$member->gender</td>
                   <td>$member->initial</td>
                       <td>$member->email</td>
                           <td>$member->phoneNo</td>
        
        </tr>";

?>
</table>


<?php
echo "<input type=hidden name=controller value = member>";
echo "<input type=hidden name=action value = findUser>";


?>
