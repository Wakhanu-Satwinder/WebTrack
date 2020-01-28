
<?php
   include ("libchart/libchart/classes/libchart.php");
   
   //new pie chart instance
   $chart =new PieChart(415, 265);
   //data set instance
   $dataSet= new XYDataSet();
   //actual data
   //get data from database through database connection

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
       //set chart title
       $chart->setTitle(' Yearly profit of various companies');
       //render as an image and store under folder
       $chart->render("generated/1.png");
       //pull generated chart wher it was stored
       echo "<img alt='Pie chart' src='generated/1.png' style='border:1px solid gray:'/>";
   }else{
       echo "no company found in the database";
   }
?>


