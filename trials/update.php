
<!DOCTYPE html>
<html>
<head> 
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="canvas/canvasjs.min.js"></script> 
<script src="gaddafi/jquery.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", { 
		title: {
			text: "Adding & Updating dataPoints"
		},
		data: [
		{
			type: "line",
			dataPoints: [
				{ x:5 y: 10 },
				{ x:2 y:  4 },
				{ y: 18 },
				{ y:  8 }	
			]
		}
		]
	});
	chart.render();	

	$("#addDataPoint").click(function () {

	var length = chart.options.data[0].dataPoints.length;
	chart.options.title.text = "New DataPoint Added at the end";
	chart.options.data[0].dataPoints.push({ y: 25 - Math.random() * 10});
	chart.render();

	});

	$("#updateDataPoint").click(function () {

	var length = chart.options.data[0].dataPoints.length;
	chart.options.title.text = "Last DataPoint Updated";
	chart.options.data[0].dataPoints[length-1].y = 15 - Math.random() * 10;
	chart.render();

	});
}
</script>
</head>  
<body>  
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>  
X Value:
    <input id="xValue" type="number" step="any" placeholder="Enter X-Value"> Y Value:
    <input id="yValue" type="number" step="any" placeholder="Enter Y-Value">
    <button id="renderButton">Add DataPoint & Render</button>
    <div id="chartContainer" style="height: 270px; width: 100%;">
<button id="renderButton">Add Data Point</button>  
<button id="updateDataPoint">Update Data Point</button>  
</body>
</html>