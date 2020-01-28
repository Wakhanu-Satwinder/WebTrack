<?php
include('log.php');
//include('functions.php')
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
         <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
         <script src="gaddafi/jquery.min.js"></script>
    </head>
    <body>
        <div class="bg">

            <header class="header-basic">

                    <div class="header-limiter">
           
                     <h1><i><a href="#">Web<span>Track</span></a></i></h1>
           
                   <nav>
                       <a href="#">Home</a>
                       <a href="#" >Charts</a>
                       <a href="#">Views</a>
                       <a href="#" class="selected" " style="color: red;">Login</a>
                       <a href="register.php"  style="color: red;">Sign Up</a>
                       
                   </nav>
                  </div>
           
                </header>  
     <br/>
     
    <div class="header">
        <h2>Login</h2>

    </div>
<form method="POST"  action="login.php"  style="width:275px;">
    
      

        
            <div class="input-group" style="margin-bottom: 25px">
             <!--<label>Username:</label>-->
                <input type="text" name="name" placeholder="Username" maxlength="25"  required>
            </div>

            <div class="input-group" style="margin-bottom: 25px">
             <!--<label>Password:</label>-->
              <input type="password" name="password" placeholder="Password" maxlength="10"  required>
            </div>
              
                        
            <div class="input-group" style="margin-top:10px">
               <button type="submit" class="btn" name="login_user" id="btn-login" class="btn btn-success">Login</button>
            </div>                 
      
               
                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="register.php">
                                            Sign Up Here
                                        </a>
                                        </div>
                                        <!--<?php
                                      /* if (isset($_SESSION['message'])){
                                        echo $_SESSION['message'];
                                          }
                                          unset($_SESSION['message'])*/
  ?>-->
                                    </div>
                                </div>    
      
    
    </form> 
    <div class="col-md-12">
        <footer>
       
                <p style="color:white;">Copyright &copy; 2020 Web Track</p>
       </footer>
    </div>
  </body>
</html>