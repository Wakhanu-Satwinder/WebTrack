<?php
  include('saver.php');
  //include('functions.php');
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
               /* margin-right: 0%;*/
                padding: 0;
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
                height: 110%;
                background-position:center;
                background-repeat:no-repeat;
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
                       <a href="login.php">Home</a>
                       <a href="login.php" >Charts</a>
                       <a href="login.php">Views</a>
                       <a href="login.php" style="color: red;">Login</a>
                       <a href="register.php" class="selected" style="color: red;">Sign Up</a>
                      <!-- <a href="index.php?logout='1'" style="color: red;">Login</a>-->
                       <!--<a href="index.php?logout='1'" style="color: red;">Sign Up</a>-->

                    
                    
                       <!--<a>Welcome, <?php echo $_SESSION['username']?></a>
                       <a href="index.php?logout='1'" style="color: red;">logout</a>-->
                       
                   </nav>
                  </div>
           
                </header> 
        <br/>
        <div class="header">
                <h2>Sign Up</h2>
          </div>
          <!--div class="container" style="height:180px; width:200px;"-->
        <!---fieldset style="height:250px; width:250px;"-->
        <form  method="POST" enctype="application/x-www-form-urlencoded" action="register.php" class="form-horizontal" style='width:275px;'>

         
            <div class="input-group">
             <!--<label>Username:</label>-->
                <input type="text" name="username" placeholder="Username" maxlength="25" value="<?php echo $username; ?>" required>
           </div>
		   <div class="input-group">
             <!--<label>Email:</label>-->
             <input type="text" name="email"  placeholder="Email" maxlength="100" value="<?php echo $email; ?>" required>
           </div>
		   <div class="input-group">
             <!--<label>Password:</label>-->
             <input type="password" name="password" placeholder="Password" maxlength="10" required>
            </div>
           <div class="input-group">
			  <!--<label>Confirm password:</label>-->
			  <input type="password" name="cpassword" placeholder="Re-enter password" required>
		   </div>
           <div class="input-group">
		   <button type="submit" class="btn" name="register">Register</button>
		   </div>
		 <p>
  		   Already a member? <a href="login.php">Sign in</a>
  	     </p>
	   </form>
           </div>
        <!--/fieldset-->
        <br/>
          </div>
        
     <footer>
        <div class="col-md-12">
                <p style="color:white;">Copyright &copy; 2020 Web Track</p>
    </div>
    </footer>
    </body>
</html>
