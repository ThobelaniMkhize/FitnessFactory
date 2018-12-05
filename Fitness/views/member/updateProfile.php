<h1>Profile</h1>



<form action='' method=GET>
    
    
     

<table>
<?php
	echo "<tr>

<td>Surname</td><td><input type=text name=surname value =".$member->surname."></td></tr>
    
<tr>
<td>First name</td><td><input type=text name=Fname value =".$member->Fname."></td>
 </tr>
 

<tr>
<td>Initails</td><td><input type=text name=initial value =".$member->initial."></td>
 </tr>
 

<tr>
<td>ID Number</td><td><input type=text name=memberID value =".$member->memberID."></td>
 </tr>
 
<tr>
<td>Phone number</td><td><input type=text name=phoneNo value =".$member->phoneNo."></td>
 </tr>
 

<tr>
<td>Address</td><td><input type=text name=address value =".$member->address."></td>
 </tr>
 
<tr>
<td>Email</td><td><input type=text name=email value =".$member->email."></td>
 </tr>
 
<tr>
<td>Password</td><td><input type=text name=password value =".$member->password."></td>
 </tr>
<tr><td span=2><input type=hidden name=controller value='member'>
<input type=hidden name=action value='myProfile'>
</td></tr></table>
<input type=submit class=btn btn-info value=Update>

</form>
";

?>
