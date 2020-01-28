<?php
include('upd.php');
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
        <div class="some-page-wrapper">


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
                       <a href="index.php">Home</a>
                       <a href="charts.php" >Charts</a>
                       <a href="views.php">Views</a>
                      <a style="color: yellow;"><i>Welcome, <?php echo $_SESSION['username']?></i></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>
                      <!-- <a href="index.php?logout='1'" style="color: red;">Login</a>
                       <a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->
                    
                    
                       <!--<a>Welcome, <?php echo $_SESSION['username']?></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>-->
                       
                   </nav>
                  </div>
           
                </header> 
        <br/>
     
  
<div class="col-md-4">
 <form action="delete.php" class="form-control" method="POST" style="width:220px; height:70px;">
      <div class="input-group" style="margin-bottom: 10px" style="height:50px; width:180px;">
        <input type="text" id="company" name="company" placeholder="Company Name"  required /> <br/>
     </div>
     <!--<p  style="margin-bottom: 10px;"><b><i><h5>Enter Yearly %age profit:</h5></i></b></p>
     <div class="input-group" style="margin-bottom: 10px; width:150px;">
        <input type="text" id="year1" name="year1"  placeholder="year1" maxlength="3" required /> <br/>
     </div>
     <div class="input-group" style="margin-bottom: 10px; width:150px; ">
        <input type="text" id="year2" name="year2" placeholder="year2"  maxlength="3" required/> <br/>
     </div>
     <div class="input-group" style="margin-bottom: 10px; width:150px;" >
        <input type="text" id="year3" name="year3" placeholder="year3" maxlength="3" required /> <br/>
     <div>
     <div class="input-group" style="margin-bottom: 10px; width:150px;">
        <input type="text" id="year4" name="year4" placeholder="year4" maxlength="3" required /> <br/>
     </div>

    <div class="input-group" style="margin-top:10px">
        <button type="submit" class="btn" name="submit" class="btn btn-success">Update</button>
    </div> -->
    <div class="input-group" style="margin-top:10px">
        <button type="submit" class="btn" name="delete" class="btn btn-success">Delete</button>
    </div>
    
 </form>
</div>



<!--<div class="footer">
        <div class="col-md-4">
                <p style="color:white;">Copyright &copy; 2020 Web Track</p>
    </div>
    </footer>-->
</body>

</html>