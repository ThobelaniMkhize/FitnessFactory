<html>
    <title>Booking Session Report</title>
    <head>
        <style>
            form, .content {
  width: 100%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  color: black;
  border-radius: 0px 0px 10px 10px;
}
        </style>
    <div class="hed">BOOKING REPORT</div>
<form name=form1 method = GET onchange='form1.submit();'>
    <table>
        <td>
            <br><STRONG>Choose Initial Date:</STRONG><input type="date" name="firstdate" value="<?php echo $firstdate; ?>" class="form-control"/>
        </td>
        
        <td>
            <br><STRONG>Choose Final Date:</STRONG><input type="date" name="seconddate" value="<?php echo $seconddate; ?>" class="form-control"/>
        </td>
    </table>
<?php
echo "<input type=hidden name=controller value = admin>";
echo "<input type=hidden name=action value = bookingSessionReport>";

?>

   
<?php if ($booking) 
{ ?>
    
<table>
    
<tr><th> BOOKING ID</th><th >SESSION ID</th><th>MEMBER ID</th><th>BOOK DATE</th>
</tr>
<?php

foreach ($booking as $bk)
{
echo "<tr>
    
<td>$bk->bk_id</td>
<td>$bk->sess_id </td>
<td>$bk->mem_id</td>
<td>$bk->book_date</td>
        
            
</tr>";

}


}
?>
<tfoot><tr><?php
print "<p align=\"CENTER\"><h2>The Bookings Between ".$firstdate." And ".$seconddate.": ".$total."<h2></p>";
//echo '<table align center>  <tr> Total Bookings Between '.$date1.' And '.$date2.': '.$total.';</tr> </table>';
//echo 'Total Bookings Between '.$date1.' And '.$date2.': '.$total.'';
echo"</td></tr></tfoot>
</table><br>";

?>
                </div>
            </div>
        </div>
     </div>
       </form>             
</html>

