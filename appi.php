<html>
<head>
<title>Web Track</title>
        <style>
            div.header{
                height: 75px;
                width: 315px;
                margin-top: 0%;
                background:rgb(37, 173, 236);
                padding:0;
                /*margin-right: 0%;*/
            }
            div.footer{
                height: 50px;
                width: auto;
                margin-bottom: 0%;
                background: gray;
                padding: 0;
                position: fixed;
            }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="assets/demo.css"/>
    <link rel="stylesheet" href="basic.css"/>

    <!-- Include fusioncharts core library -->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>   
    <script src="gaddafi/jquery.min.js"></script>
    <script type="text/javascript" src="js/fusioncharts.js"></script>
    <script type="text/javascript" src="js/fusioncharts.charts.js"></script>
    <script type="text/javascript" src="js/themes/fusioncharts.theme.zune.js"></script>
    <script type="text/javascript" src="app.js"></script>
<script type="text/javascript">
    //STEP 2 - Chart Data
    $(function() {
  $.ajax({
    url: "http://localhost/webtrack/chart_data.php",
    type: "GET",
    success: function(data) {
      chartData = data;
      var chartProperties = {
        caption: "Percentage profit comparison",
        xAxisName: "Company",
        yAxisName: "year4 %age profit",
        rotatevalues: "1",
        theme: "zune"
      };
  }
 }
}
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
 <div class="bg">

            <header class="header-basic">

                    <div class="header-limiter">
           
                     <h1><i><a href="#">Web<span>Track</span></a></i></h1>
           
                   <nav>
                       <a href="#" class="selected">Home</a>
                       <a href="charts.php" >charts</a>
                       <a href="viewss.php">Views</a>
                       <a href="login.php" style="color: red;"">Login</a>
                       <a href="register.php" style="color: red;"">Sign Up</a>
                      <!-- <a href="index.php?logout='1'" style="color: red;">Login</a>
                       <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
                    
                    
                       <!--<a>Welcome, <?php echo $_SESSION['username']?></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>-->
                       
                   </nav>
                  </div>
           
                </header> 
        <br/>

    <div id="chart-container">FusionCharts XT will load here!</div>

    <div class="col-md-12">
        <footer stytle: width: auto;>
          <p style="color:white;">Copyright &copy; 2020 Web Track</p>
       </footer>
    </div>

</body>
</html>