<?php
include('db.php');
?>
<!DOCTYPE HTML>
<html>

<head>
   <meta charset="UTF-8"/>
        
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
                width: 315px;
                margin-bottom: 0%;
                background: gray;
                padding: 0;
                position: fixed;
            }
            div.bg{
                background-image:url("img/banner.jpg");
                /*opacity:0.6;*/
                height: 100%;
                background-position:center;
                background-repeat: no-repeat;
                background-size:cover; 
                /*filter:blur(8px);
               -webkit-filter: blur(8px);*/
}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="assets/demo.css"/>
         <link rel="stylesheet" href="basic.css"/>
          <link rel="stylesheet" href="sidebar.css" type="text/css"/>
          <link rel="stylesheet" href="columns.css" type="text/css"/>
         <!--<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>-->
         <script src="gaddafi/jquery.min.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            var dps = []; //dataPoints. 

            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Live graph of percentage expenditure against income"
                },
                data: [{
                    type: "line",
                    xAxisName: "Expenditure",
                    yAxisName: "income",
                    dataPoints: dps
                }]
            });

            function addDataPointsAndRender() {
                xValue = Number(document.getElementById("xValue").value);
                yValue = Number(document.getElementById("yValue").value);
                dps.push({
                    x: xValue,
                    y: yValue
                });
                chart.render();
            }

            var renderButton = document.getElementById("renderButton");
            renderButton.addEventListener("click", addDataPointsAndRender);
        }
    </script>
    <script type="text/javascript" src="canvas/canvasjs.min.js"></script>
</head>

<body>


  <div class="some-page-wrapper">

       <header class="header-basic">

            <div class="header-limiter">
                <span class="checkbox-container">
                         <input  class="checkbox-trigger" type="checkbox"/>
                   <span class="menu-content"  >
                      <ul>
                         <li><a href="#" >Update</a></li>
                         <li><a href="#" >Live plot</a></li>
                         <li><a href="#" >View All</a></li>
                         <li><a href="#" >Update</a></li>
                         <li><a href="#" >Update</a></li>

                      </ul>
                       <span class="hamburger-menu"></span>
                  </span>
                  </span>
  
           
                     <h1><i><a href="#">Web<span>Track</span></a></i></h1>
           
                   <nav>
                       <a href="#" class="selected">Home</a>
                       <a href="charts.php" >Charts</a>
                       <a href="views.php">Views</a>
                      <!--<a>Welcome,<?php echo $_SESSION['username']?></a>-->
                       <a href="index.php?logout='1'" style="color: red;">logout</a>
                      <!-- <a href="index.php?logout='1'" style="color: red;">Login</a>
                       <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
                    
                    
                       <!--<a>Welcome, <?php echo $_SESSION['username']?></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>-->
                       
                   </nav>
                  </div>
           
                </header> 
        <br/>

    Expenditure %age:
    <input id="xValue" type="number" step="any" placeholder="Enter X-Value"> 
     %age Profit:
    <input id="yValue" type="number" step="any" placeholder="Enter Y-Value">
    <button id="renderButton">Plot</button>

    
    <div id="chartContainer" style="height: 270px; width: 100%;">

   </div>
 


    <div class="col-md-12">
        <footer stytle: width: auto;>
          <p style="color:white;">Copyright &copy; 2019 Web Track</p>
       </footer>
    </div>
</body>

</html>