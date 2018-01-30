<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login page</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Doctor Login page</h2>
               
                               <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong style="color:blue;">   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="" method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            
                                            <input type="email" class="form-control" name="email" placeholder="Enter your User Email. . . . ." autofocus="autofocus"/>
                                        </div>
                        <div class="form-group input-group">
                                            
                                            <input type="password" class="form-control" name="password"  placeholder="Enter your Password. . . . ." />
                                        </div>
                                    <div class="form-group">
                                            
                                            
											<span class="pull-right">
                                                   Not registered<a href="registration.php" > click here </a> 
                                            </span>
                                        </div>
                                     <div class="form-group input-group">
                                            
                                             <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login">Sign in</button>
                                        </div>
                                     
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
<?php
include "connect.php";
IF(ISSET($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$cek = mysql_num_rows(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
	$data = mysql_fetch_array(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
	IF($cek > 0)
	{
		
		//session_start();
		$_SESSION['email'] = $data['email'];
		$_SESSION['name'] = $data['full_name'];
		echo "<script language=\"javascript\">document.location.href='home.php';</script>";
	}else{
		echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='index.php';</script>";
	}
}
?>
