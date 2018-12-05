<h1></h1>




    
    
     <div id="container">
      <div id="content">   
<table class="data-table">
        <caption></caption>
        <thead>
            <tr>  
                <th>Session Booked</th>
               
               <th>Date</th>
            
               
               
               
            </tr>
        </thead>
        <tbody>
    <?php


 foreach ($booking as $book) {
    
 

    echo "<tr>
        <td>
                 $book->sess_id
                 $book->sess_name
                     </td>
           <td>$book->book_date</td>
         </tr>";

}
?>
</table>


<?php
echo "<input type=hidden name=controller value = member>";
echo "<input type=hidden name=action value = memBookings>";


?>
