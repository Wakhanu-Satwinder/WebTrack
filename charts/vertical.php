<?php

include ("libchart/libchart/classes/libchart.php");

$chart= new VerticalBarChart(500,250);
$dataSet=new XYDataSet();
include 'db.php';

$query= "select company,year4 from companies";

   //execution query

   $result=mysqli_query($db,$query);
   //get no of rows returned
   $num_results=$result->num_rows;

   if($num_results>0){
       while($row=$result->fetch_assoc()){
           extract($row);
           $dataSet->addPoint(new Point("{$company} {$year4})", $year4));
       }
       //finalise dataset
       $chart->setDataSet($dataSet);

  $chart->setTitle("Percentage profits for various companies");
  $chart->render("generated/demo1.png");
  //pull generated chart wher it was stored
       echo "<img alt='VerticalBarChart' src='generated/demo1.png' style='border:1px solid gray:'/>";
   }else{
       echo "no company found in the database";
}
?>
