<?php
include("db.php");


?>
<html>
	<head>
	<title></title>
     
      <!-- Include fusioncharts core library -->
     <script src="anychart/js/anychart-base.min.js" type="text/javascript"></script>
     
   </head>
   <body>
      <div id="container" style="width: 500px; height: 400px;"></div>
      <script>
  anychart.onDocumentLoad(function () {
    //create an instance of a pie chart
   var chart = anychart.pie();
    // set the data
   
    chart.data([
    $query = "SELECT * FROM companies";
    //storing the result of the executed query
    $result = $conn->query($query);
    //initialize the array to store the processed data
    $jsonArray = array();
    //check if there is any data returned by the SQL Query
    if ($result->num_rows > 0) {
      //Converting the results into an associative array
      while($row = $result->fetch_assoc()) {
        $jsonArrayItem = array();
        $jsonArrayItem['label'] = $row['company'];
        $jsonArrayItem['value'] = $row['year1'] && $row['year2'] && $row['year3'] && $row['year4'];
        
        //append the above created object into the main array.
        array_push($jsonArray, $jsonArrayItem);
      }
    }
    ]);
    // set chart title
    chart.title("Top 5 pancake fillings");
    // set the container element 
    chart.container("container");
    // initiate chart display
    chart.draw();
   
</script>
   </body>
</html>