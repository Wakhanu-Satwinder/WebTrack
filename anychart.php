<?php
include("db.php");
?>
<html>
	<head>
	<title></title>
      <script src="anychart/js/anychart-base.min.js" type="text/javascript"></script>
   </head>
   <body>
      <div id="container" style="width: 500px; height: 400px;"></div>
      <script>
  anychart.onDocumentLoad(function () {
    // create an instance of a pie chart
    var chart = anychart.pie();

chartData = data;
      var chartProperties = {
        caption: "Percentage profit comparison",
        xAxisName: "Company",
        yAxisName: "year4 %age profit",
        rotatevalues: "1"



    
   

    /* set the data
    chart.data([
      <?php include('app.js');?>
      /*["Chocolate", 5],
      ["Rhubarb compote", 2],
      ["Crêpe Suzette", 2],
      ["American blueberry", 2],
      ["Buttermilk", 1]
    ]);*/
    // set chart title
    chart.title("Top 5 pancake fillings");
    // set legend position
     chart.legend().position("right");
// set items layout
     chart.legend().itemsLayout("vertical");
    // set the container element 
    chart.container("container");
    // initiate chart display
    chart.draw();
  });
</script>
   </body>
</html>