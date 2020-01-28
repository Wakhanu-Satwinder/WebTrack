<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Real Estate</title>
        <style>
            div.header{
                height: 40px;
                width: 200px;
                margin-top: 0%;
                background:rgb(37, 173, 236);
               /* margin-right: 0%;*/
            }
            div.footer{
                height: 50px;
                width: auto;
                margin-bottom: 0%;
                background: gray;
                padding: 0;
                position: fixed;
            }
            .button{
                background-color:#1c87c9;
                border:none;
                color:white;
                padding:20px 34px;
                text-align:center;
                display:inline-block;
                font-size:20px;
                margin:4px 2px;
                cursor:pointer;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="assets/demo.css"/>
         <link rel="stylesheet" href="basic.css"/>
         <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
         <script src="gaddafi/jquery.min.js"></script>
    </head>
    <body>
        <div class="bg">

            <header class="header-basic">

                    <div class="header-limiter">
           
                     <h1><i><a href="#">Real<span>Estate</span></a></i></h1>
           
                   <nav>
                       <a href="#" class="selected">Home</a>
                       <a href="building.php" >Apartments</a>
                       <a href="rooms.php">Bookings</a>
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


<div class="col-md-4">
 <form action="index.php" class="form-control" method="POST" style="width:220px; height:370px;">
     <div class="input-group" style="margin-bottom: 10px" style="height:50px; width:180px;">
        <input type="text" id="company" name="company" placeholder="Company Name" required /> <br/>
     </div>
     <p><b><i><h5>Enter Yearly %age profit:</h5></i></b></p>
     <div class="input-group" style="margin-bottom: 10px; width:150px;">
        <input type="text" id="year1" name="year1"  placeholder="year1" required /> <br/>
     </div>
     <div class="input-group" style="margin-bottom: 10px; width:150px; ">
        <input type="text" id="year2" name="year2" placeholder="year2" required/> <br/>
     </div>
     <div class="input-group" style="margin-bottom: 10px; width:150px;" >
        <input type="text" id="year3" name="year3" placeholder="year3" required /> <br/>
     <div>
     <div class="input-group" style="margin-bottom: 10px; width:150px;">
        <input type="text" id="year4" name="year4" placeholder="year4" required /> <br/>
     </div>

    <div class="input-group" style="margin-top:10px;">
        <button type="submit" class="btn" name="submit" class="btn btn-success">Submit</button>
    </div>
 </form>
</div>

        <footer>
        <div class="col-md-12">
                <p style="color:white;">Copyright &copy; 2019 Real Estate</p>
     </footer>
    </div>
    </body>
</html>