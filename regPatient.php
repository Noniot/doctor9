
<?php include "home.php"?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient registration form</title>
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
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" name="registration_form">
				<h2>Please enter patients details </h2>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="fname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="lname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="Mname" id="middle_name" class="form-control input-lg" placeholder="middle Name" tabindex="2" required>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4"autofocus="autofocus" required>
				</div>
				<div class="form-group">
					<input type="tel" name="tel" id="tel" class="form-control input-lg" placeholder="mobileNo" tabindex="4" required>
				</div>
				<div class="form-group">
				
				    <select class="form-control" name="insurance" placeholder="select" required>
				
				<option value="" disabled selected>select insurance type </option>
				<option>HMO</option>
				<option>PPOs </option>
				<option>EPOs</option>
				<option>POS</option>
				     </select>
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="5" name="diagnosis" placeholder="enter the diagnosis">
					</textarea>
				</div>
				<div class="form-group">
			       <select class="form-control" name="visit" placeholder="select" required>
				
				<option value="" disabled selected>visit type </option>
				<option>inpatient</option>
				<option>outpatient </option>
				
				   </select>
				</div>
                <div class="form-group">
					<input type="date" name="dateToday" id="date" class="form-control input-lg" placeholder="mobileNo" tabindex="4" required>
				</div>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-6"><input type="submit" name="register" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					
					
				</div>
			</form>
		</div>
		
	</div>
	<!-- Modal -->
	modal -->

</body>
</html>

<?php
include "connect.php";
if (isset($_POST['register']) )
{

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mname=$_POST["Mname"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$insurance=$_POST["insurance"];
$diagnosis=$_POST["diagnosis"];
$visit=$_POST["visit"];
$date=$_POST["date"];

$query ="INSERT INTO `patientregistration`(`fname`, `lname`, `Mname`, `email`, `MobileNo`, `Insurance`, `diagnosis`, `visitType`, `Date`) 
VALUES ('$fname','$lname','$mname','$email','$tel','$insurance','$diagnosis','$visit','$date')";

//echo " Added Successfully ";
$result = mysql_query($query,$con);
        if($result){
           // $smsg = "User Created Successfully.";
		   echo "<script language=\"javascript\">document.location.href='home.php';</script>";
        }else{
            $fmsg ="User Registration Failed";
        }
}

 ?>

