<?php
//session_start();
//include ('saver.php');

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



     $sql_u = "SELECT * FROM companies WHERE company='$company'";
        

      $res_u = mysqli_query($db, $sql_u);

        if (mysqli_num_rows($res_u) > 0) 
        {
            echo "Sorry... company already exists";
        }
        
        else
         {

    $sql="INSERT INTO `companies` (`id`,`company`,`year1`,`year2`,`year3`,`year4`) VALUES(NULL,'$company','$year1','$year2','$year3','$year4')";
    
    $result = mysqli_query($db, $sql);


        if($result==1)
        {       

        $error .='<p class="alert alert-success">Details added succesfully</p>';
        $_SESSION['message'] = "Company Addded"; 
        //header('location: index.php');
        
       header('location:charts.php');
        }
        else {       

         $error .='<p class="alert alert-danger">Submission failed. Try Again</p>';

             }
    
  }
}
/*$db=mysqli_connect('localhost','root','','webtrack');
if (isset($_POST['renderButton'])) {
    # code...
    $expenditure=e($db,$_POST['xValue'];
    $profit= e($db,$_POST['yValue'];

    $sql="INSERT INTO `live`(`id`,`xValue`,`yValue`) VALUES (NULL,'$ependiture','$income')";
    $result=mysqli_query($db,$sql);
}*/

?>