<?php
$username="";
$email="";
$error="";


$db=mysqli_connect('localhost','root','','webtrack');
if(isset($_POST['submit'])){
    $company= mysqli_real_escape_string($db,$_POST['company']);
    $year1= mysqli_real_escape_string($db,$_POST['year1']);
    $year2= mysqli_real_escape_string($db,$_POST['year2']);
    $year3= mysqli_real_escape_string($db,$_POST['year3']);
    $year4= mysqli_real_escape_string($db,$_POST['year4']);

    $sql="INSERT INTO `companies` (`id`,`company`,`year1`,`year2`,`year3`,`year4`) VALUES(NULL,'$company','$year1','$year2','$year3','$year4')";
    
    $result = mysqli_query($db, $sql);

        if($result==1)
        {       

        $error .='<p class="alert alert-success">Details added succesfully</p>';
        
        
        }
        else {       

         $error .='<p class="alert alert-danger">Submission failed. Try Again</p>';

             }
    
}
//header('location:charts.php');
?>