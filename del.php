<?php

$username="";
$email="";
$error="";


$db=mysqli_connect('localhost','root','','webtrack');

if(isset($_POST['delete'])){

    $company= mysqli_real_escape_string($db,$_POST['company']);
    $year1= mysqli_real_escape_string($db,$_POST['year1']);
    $year2= mysqli_real_escape_string($db,$_POST['year2']);
    $year3= mysqli_real_escape_string($db,$_POST['year3']);
    $year4= mysqli_real_escape_string($db,$_POST['year4']); 


    $sql="SELECT * FROM companies WHERE company='$company'";
    $result=mysqli_query($db,$sql);


     if (mysqli_num_rows($result) > 0) 
        {

       $query="DELETE FROM companies WHERE company='$company'";
       //$que=""INSERT INTO `companies` (`id`,`company`,`year1`,`year2`,`year3`,`year4`) VALUES(NULL,'$company','$year1','$year2','$year3','$year4')";"
       $res=mysqli_query($db,$query);
       header("location:index.php");
     
      if($result==1)
        {       

        $error .='<p class="alert alert-success">Updated succesfully</p>';
        $_SESSION['message'] = "Company Addded"; 
        //header('location: index.php');
        
       header('location:charts.php');
        }
        else {       

         $error .='<p class="alert alert-danger">Submission failed. Try Again</p>';

             }
           }
  ?>