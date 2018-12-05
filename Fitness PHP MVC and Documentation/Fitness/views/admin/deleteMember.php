<html>
    <title>VIEW ALL MEMBERS</title>
     <link rel="stylesheet" href="styleIndex.css">
    <header>
        
    </header>

     <style>
         
    input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
         
     </style>
     <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
 
    <div id="container">
      <div id="content">   
          <form>
 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for user name.." title="Type in a name">
 </form>
<table class="data-table" id="myTable">
    
        <caption></caption>
        <thead>
            <tr>  
               <th></th>
               <th>FIRST NAME</th>
               <th>SURNAME</th>
               <th>GENDER</th>
               <th>INITIALS</th>
               <th>ID NUMBER</th>
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
    echo "<form><tr>
           <td><input type=text hidden name= user_name value='$memb->user_name'></td>
           <td>$memb->Fname</td>
           <td>$memb->surname</td>
           <td>$memb->gender</td>
           <td>$memb->initial</td>
           <td>$memb->memberID</td>
           <td>$memb->address</td>
           <td>$memb->phoneNo</td>
           <td>$memb->email</td>
           <td>$memb->user_name</td>
     
       
           <td><input type = submit value ='remove' class=delete_btn>    </tr>
           <input type=hidden name=controller value = admin>
            <input type=hidden name=action value = deleteMember></form>";
    
    
}
?>
</table>

<?php
echo "<input type=hidden name=controller value = admin>";
echo "<input type=hidden name=action value = deleteMember>";

?>
                
     </div>
     </div>
                    
</html>
