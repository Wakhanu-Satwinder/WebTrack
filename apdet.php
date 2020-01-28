<!DOCTYPE html>
<html>
<head>
	<title>Update Record-</title>
</head>
<body>
<?php

   if (isset($_POST['update'])) {
   	# code...
   	include('db.php');
     if (! $db) {
     	die('could not connect:'.mysqli_error());
     	# code...
     }
       //if(isset($GET['update'])){
       
       //}
     $id=  $_POST['id'];
    $company= $_POST['company'];
    $year1= $_POST['year1'];
    $year2= $_POST['year2'];
    $year3= $_POST['year3'];
    $year4= $_POST['year4'];

  //$sql="UPDATE companies ( company='$company',year1='$year1',year2='$year2',year3='$year3',year4='$year4') WHERE  id='$id' ";
  //$query="UPDATE companies SET company='$company', year1='.$year1',year2='.$year2' ,year3='.$year3',year4='.$year4' ";
  $query="UPDATE `companies` SET `year1` = '$year1', `year2` = '$year2', `year3` = '$year3', `year4` = '$year4' WHERE `companies`.`id`='$id'";
  //mysql_select_db('webtrack');
  $retval=mysqli_query($db,$query);
  if(! $retval){
  	die('Could not update data:'.mysqli_error());

  }
  echo "Updated data Successfully\n";
  mysqli_close($db);
   }
   else{
   	?>

   	<form method="post" action="<?php $PHP_SELF ?>">
   	   <table width="400" border="0" cellspacing="1" cellpadding="2">
   	   <tr>
   	       <td><input class='input' type='hidden' name='id' id="id" value='{$row1['id']}'/></td>
   	   </tr>
   	   	<tr>
   	   		<td width="100">Company</td>
   	   		<td><input type="text" name="company" id="company"></td>
   	   	</tr>
   	   	<tr>
   	   		<td width="100">year1</td>
   	   		<td><input type="text" name="year1" id="year1"></td>
   	   	</tr>
   	   	<tr>
   	   		<td width="100">year2</td>
   	   		<td><input type="text" name="year2" id="year2"></td>
   	   	</tr>
   	   	<tr>
   	   		<td width="100">year3</td>
   	   		<td><input type="text" name="year3" id="year3"></td>
   	   	</tr>
   	   	<tr>
   	   		<td width="100">year4</td>
   	   		<td><input type="text" name="year4" id="year4"></td>
   	   	</tr>
   	   	<tr>
   	   	    <td width="100"></td>
   	   	</tr>
   	   	<tr>
   	   		<td width="100"></td>
   	   		<td>
   	   			<input name="update" type="submit" id="update" value="Update">
   	   		</td>
   	   	</tr>
   	   </table>
   	</form>
  <?php 
   }
?>

</body>
</html>