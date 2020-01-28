<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>updating..</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2> Update data using php</h2>	
</div>
<div class="divB">
<div class="divD">
<p>Click on menu</p>
<?php
$conn=mysqli_connect("localhost","root","","webtrack");
//$db=mysql_select_db("webtrack",$conn);

if(isset($GET['submit'])){
    $id=$_GET['id'];
    $company=$_GET['company'];
    $year1=$_GET['year1'];
    $year2=$_GET['year2'];
    $year3=$_GET['year3'];
    $year4=$_GET['year4'];

$query=mysqli_query("update companies set  company='$company',year1='$year1',year2='$year2',year3='$year3',year4='$year4' where id=''",$conn);
}
$sql="select * from companies";
$result=mysqli_query($sql,$conn);
while ($row=mysqli_fetch_array($query)){
	echo "<b><a href='upp.php?update={$row['id']}'>
	{$row['company']}</a></b>";
	echo "<br />";
}
?>	
</div>
<?php

if(isset($GET['update'])){
	$update=$GET['update'];
	$query1=mysql_query("select * from companies where id=$update,$conn");
	while($row1=mysql_fetch_array($query1)){
		echo "<form class='form' method='get'>";
		echo "<h2>Update form</h2>";
		echo "<hr/>";
		echo "<input class='input' type='hidden' name='id' value='{$row1['id']}' />";
		echo "<br/>";
		echo "<label>"."company"."</label>"."<br/>";
		echo "<input class='input' type='text' name='company' value='{$row1['company']}'/>";
		echo "<br />";

		echo "<label>". "year1:". "</label>" . "<br/>";
		echo "<input class='input' type='text' name='year1' value='{$row1['year1']}'/>";
		echo "<br />";

		echo "<label>"."year2"."</label>"."<br/>";
		echo "<input class='input' type='text' name='year2' value='{$row1['year2']}'/>";
		echo "<br />";

		echo "<label>"."year3"."</label>"."<br/>";
		echo "<input class='input' type='text' name='year3' value='{$row1['year3']}'/>";
		echo "<br />";

		echo "<label>"."year4"."</label>"."<br/>";
		echo "<input class='input' type='text' name='year4' value='{$row1['year4']}'/>";
		echo "<br />";

		echo "<input class='submit' type='submit' value='update' />";

		echo "</form>";
	}
}
if(isset($GET['submit'])){
	echo '<div class="form" id="form3"> <br><br><br><br><br><br> <span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
	
</div><?php
mysqli_close($conn);
?>
<!--</div>-->

</body>
</html>