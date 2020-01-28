<?php
include ('db.php');

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM companies WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['company'];
			$year1 = $n['year1'];
			$year2 = $n['year2'];
			$year3= $n['year3'];
			$year4 = $n['year4'];
		}
	}


 $results = mysqli_query($db, "SELECT * FROM companies"); 
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

        <?php if (isset($_SESSION['message'])): ?>
         <div class="msg">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
        ?>
         </div>
       <?php endif ?>

        <!--<div class="bg">-->
        <div class="some-page-wrapper">


            <header class="header-basic">

                    <div class="header-limiter">


                     <span class="checkbox-container">
                         <input  class="checkbox-trigger" type="checkbox"/>
                    <span class="menu-content"  >
                      <ul>
                         <li><a href="#" >Update</a></li>
                         <li><a href="liveplot.php" >Live plot</a></li>
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
         <div class="some-page-wrapper">

            <!--<div class="row">-->
                <div id="bar"  class="column">
                   <!--<div style="float: left; width: 40%">-->
                    <<table>
	<thead>
		<tr>
			<th>Company</th>
			<th>year1</th>
			<th>year2</th>
			<th>year3</th>
			<th>year4</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['company']; ?></td>
			<td><?php echo $row['year1']; ?></td>
			<td><?php echo $row['year2']; ?></td>
			<td><?php echo $row['year3']; ?></td>
			<td><?php echo $row['year4']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="db.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
                    </div>
                    </div>
                <br/>
                <br/>
                 
                  <!--<div style="float: right; width: 60%">-->
                 <div  id="pie" class="column">
                   <div class="col-md-4">
 <form action="index.php" class="form-control" method="POST" style="width:220px; height:370px;">
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <div class="input-group" style="margin-bottom: 10px" style="height:50px; width:180px;">
        <input type="text" id="company" name="company" placeholder="Company Name" value="<?php echo $company; ?>" required /> <br/>
     </div>
     <p  style="margin-bottom: 10px;"><b><i><h5>Enter Yearly %age profit:</h5></i></b></p>
     <div class="input-group" style="margin-bottom: 10px; width:150px;">
        <input type="text" id="year1" name="year1"  placeholder="year1" value="<?php echo $year1; ?>" required /> <br/>
     </div>
     <div class="input-group" style="margin-bottom: 10px; width:150px; ">
        <input type="text" id="year2" name="year2" placeholder="year2" value="<?php echo $year2; ?>" required/> <br/>
     </div>
     <div class="input-group" style="margin-bottom: 10px; width:150px;" >
        <input type="text" id="year3" name="year3" placeholder="year3" value="<?php echo $year3; ?>" required /> <br/>
     <div>
     <div class="input-group" style="margin-bottom: 10px; width:150px;">
        <input type="text" id="year4" name="year4" placeholder="year4"  value="<?php echo $year4; ?>" required /> <br/>
     </div>

    <div class="input-group" style="margin-top:10px">
        <?php include ('man.php'); if ($update == true): ?>
	          <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
        <?php endif ?>
    </div>
 </form>
</div>
                </div>

               <!--</div>-->
            </div>








<!--<div class="footer">
        <div class="col-md-4">
                <p style="color:white;">Copyright &copy; 2020 Web Track</p>
    </div>
    </footer>-->
    ?>
  </body>
</html>