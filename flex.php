<?php
//include('db.php');
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

         <!-- Include fusioncharts core library -->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>   
    <script src="gaddafi/jquery.min.js"></script>
    <script type="text/javascript" src="js/fusioncharts.js"></script>
    <script type="text/javascript" src="js/fusioncharts.charts.js"></script>
    <script type="text/javascript" src="js/themes/fusioncharts.theme.zune.js"></script>
    <script type="text/javascript" src="app.js"></script>

    <style>
    .row{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
         align-items: stretch;
        width: 100%;
        
    }
    .column{
        display: flex;
        flex-direction: column;
        flex-basis: 100%
        flex:50%;
        float: left;
        margin: 60px 4%;
        
 }
 .some-page-wrapper{
    margin: 15px;
   /* background-color: red;*/
 }
 @media screen and (min-width: 500px){
    .column{
        flex: 1
    }
    .double-column{
        flex: 2
    }
 }
 
 .bar{
    float: left;
    width: 50%;
 }
 .pie{
    float: right;
    width: 50%;
 }

    </style>
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
           
                     <h1><i><a href="#">Web<span>Track</span></a></i></h1>
           
                   <nav>
                       <a href="index.php" >Home</a>
                       <a href="charts.php" >Charts</a>
                       <a href="views.php class="selected"">Views</a>
                       <a href="inter.php" style="color: red;"">Login</a>
                       <a href="intereg.php" style="color: red;"">Sign Up</a>
                      <!-- <a href="index.php?logout='1'" style="color: red;">Login</a>
                       <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
                    
                    
                       <!--<a>Welcome, <?php echo $_SESSION['username']?></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>-->
                       
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
                 <div  id="pie" class="column">
                   <?php
                     include ("libchat.php");
                    ?>
                </div>

               <!--</div>-->
            </div>

        
    
     <div class="col-md-12">
        <footer stytle: width: auto;>
          <p style="color:white;">Copyright &copy; 2019 Real Estate</p>
       </footer>
    </div>
    </div>
        </body>
        </html>