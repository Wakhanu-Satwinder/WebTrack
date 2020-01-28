<html>
<head>
<title>My first chart using FusionCharts Suite XT</title>
<!-- Include fusioncharts core library -->
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>   
    <script src="gaddafi/jquery.min.js"></script>
    <script type="text/javascript" src="js/fusioncharts.js"></script>
    <script type="text/javascript" src="js/fusioncharts.charts.js"></script>
    <script type="text/javascript" src="js/themes/fusioncharts.theme.zune.js"></script>
<script type="text/javascript">
    //STEP 2 - Chart Data
    const chartData = [{
        "label": "Venezuela",
        "value": "290"
    }, {
        "label": "Saudi",
        "value": "260"
    }, {
        "label": "Canada",
        "value": "180"
    }, {
        "label": "Iran",
        "value": "140"
    }, {
        "label": "Russia",
        "value": "115"
    }, {
        "label": "UAE",
        "value": "100"
    }, {
        "label": "US",
        "value": "30"
    }, {
        "label": "China",
        "value": "30"
    }];

    //STEP 3 - Chart Configurations
    const chartConfig = {
     type: "column2d",
        renderAt: "chart-container",
        width: "550",
        height: "350",
        dataFormat: "json",
        dataSource: {
          chart: chartProperties,
          data: chartData
        }
    };
    FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts(chartConfig);
    fusioncharts.render();
    });
</script>
</head>
<body>
    <div id="chart-container">FusionCharts XT will load here!</div>
</body>
</html>