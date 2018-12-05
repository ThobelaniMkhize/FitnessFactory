

<script language=javascript>
function validNumber(anum)
{
if (isNaN(anum)) return false;
return true;
}

function validate(email)
{



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

<form action='' method=GET  onsubmit="return validate(email.value)">
    
    
     

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
<td>ID Number</td><td><input type=text name=memberID value =".$member->memberID."  pattern=[0-9]{13}  title=13 digits code></td>
 </tr>
 
<tr>
<td>Phone number</td><td><input type=text name=phoneNo value =".$member->phoneNo."  pattern=[0-9]{10}  title=10 digits code></td>
 </tr>
 

<tr>
<td>Address</td><td><input type=text name=address value =".$member->address."></td>
 </tr>
 
<tr>
<td>Email</td><td><input type=text name=email value =".$member->email."></td>
 </tr>
 

 
<td span=2><input type=hidden name=controller value='member'>


<input type=hidden name=action value='myProfile'>

</table>
<input type=submit class=btn btn-info value=Update>

</form>
";

?>
