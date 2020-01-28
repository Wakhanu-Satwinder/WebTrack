<?php

include ("libchart/libchart/classes/libchart.php");
$chart=new LineChart(500,250);
$dataSet= new XYDataSet();

include("db.php");
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

$chart->setTitle('Line graph for companies against respective profits');
$chart->render("generated/demo2.png");

echo "<img alt='LineChart' src='generated/demo2.png' style='border:1px solid gray:'/>";
   }else{
       echo "no company found in the database";

}
?>