<?php
include ('db.php');

	if (isset($_GET['edit'])) {

		if (isset($_POST)) {
			# code...
		
		$update=$_POST['update'];
		$id = $_POST['edit'];

		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM companies WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['company'];
			$year1 = $n['year1'];
			$year2 = $n['year2'];
			$year3= $n['year3'];
			$year4 = $n['year4'];
		}
	}
}


 $results = mysqli_query($db, "SELECT * FROM companies"); 
 ?>