<?php
include('db.php');
 session_start();
    if(!isset($_SESSION['username'])){
      die(header("location: login.php"));
  }
?>
<!DOCTYPE html>
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
                width: auto;
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
         <!--<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>-->
         <script src="gaddafi/jquery.min.js"></script>

       <link rel="stylesheet" href="sidebar.css" type="text/css"/>
       <link rel="stylesheet" href="columns.css" type="text/css"/>
          <!-- Include fusioncharts core library -->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>   
    <script src="gaddafi/jquery.min.js"></script>
    <script type="text/javascript" src="js/fusioncharts.js"></script>
    <script type="text/javascript" src="js/fusioncharts.charts.js"></script>
    <script type="text/javascript" src="js/themes/fusioncharts.theme.zune.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="fus.js"></script>
   </head>

   
    <body>
        <!-- Preloader -->
        <!--<div class="preloader d-flex align-items-center justify-content-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>-->

                  
        <div class="bg">

            <header class="header-basic">

                    <div class="header-limiter">

<span class="checkbox-container">
  <input  class="checkbox-trigger" type="checkbox"/>
  <span class="menu-content"  >
    <ul>
       <li><a href="update.php" >Update</a></li>
       <li><a href="liveplot.php" >Live plot</a></li>
       <li><a href="views.php" >View All</a></li>
       <li><a href="index.php" >Add Company</a></li>
       

    </ul>
    <span class="hamburger-menu"></span>
  </span>
  
</span>
<h1><i><a href="#">Web<span>Track</span></a></i></h1>
           
                   <nav>
                       <a href="index.php" >Home</a>
                       <a href="charts.php" class="selected">Charts</a>
                       <a href="views.php" >Views</a>
                       <!--<a href="login.php" style="color: red;"">Login</a>
                       <a href="register.php" style="color: red;"">Sign Up</a>-->
                      <!-- <a href="index.php?logout='1'" style="color: red;">Login</a>
                       <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
                    
                    
                       <a style="color: yellow;"><i>Welcome, <?php echo $_SESSION['username']?></i></a>
                       <a href="login.php?logout='1'" style="color: red;">logout</a>
                       
                   </nav>
                  </div>
           
                </header> 
        <br/>
        <div class="some-page-wrapper">

            <!--<div class="row">-->
                <div id="bar"  class="column">
                   <!--<div style="float: left; width: 40%">-->
                    <div id="chart-container">FusionCharts XT will load here!</div>
                         <script type="text/javascript" src="WebTrack/app.js"></script>
                    </div>
                    </div>
                <br/>
                <br/>
                 
                 
                  <!--<div style="float: right; width: 60%">-->
                 <div  id="pie" class="column" style="margin-top: 10px;" >
                   <div id="chat-container" >FusionCharts XT will load here!</div>
                         <script type="text/javascript" src="WebTrack/fus.js"></script>
                        
                    </div>
                </div>

               <!--</div>-->
            </div>

        
    
     <div class="col-md-12">
        <footer stytle: width: auto;>
          <p style="color:white;">Copyright &copy; 2020 Web track</p>
       </footer>
    </div>
    </div>
        </body>
        </html>

</body>
</html>