<?php

include ("libchart/libchart/classes/libchart.php");
$chart=new LineChart(500,250);
$serie1= new XYDataSet();

include("db.php");
$query= "select company,year4 from companies";

   //execution query

   $result=mysqli_query($db,$query);
   //get no of rows returned
   $num_results=$result->num_rows;
   if($num_results>0){
       while($row=$result->fetch_assoc()){
           extract($row);
           $serie1->addPoint(new Point("{$company} {$year4})", $year4));
       }
$serie2= new XYDataSet();

$query= "select company,year3 from companies";

   //execution query

   $result=mysqli_query($db,$query);
   //get no of rows returned
   $num_results=$result->num_rows;
   if($num_results>0){
       while($row=$result->fetch_assoc()){
           extract($row);
           $serie2->addPoint(new Point("{$company} {$year3})", $year3));
       }

$dataSet=new XYSeriesDataSet();
$dataSet=addSerie("company",$serie1);
$dataSet=addSerie("company",$serie2);
       //finalise dataset
       $chart->setDataSet($dataSet);

$chart->setTitle('Line graph for companies against respective profits');
$chart->render("generated/demo4.png");

echo "<img alt='seriesChart' src='generated/demo4.png' style='border:1px solid gray:'/>";
   }else{
       echo "no company found in the database";
}
}
?>