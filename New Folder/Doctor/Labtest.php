

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>labtest page</title>
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
<div class="navbar navbar-default navbar-default" role="navigation">
	<div class="container">
            <div class="navbar-header" col>
                <ul class="nav nav-tabs">
   <li class="active"><a href="#">Home</a></li>
   <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               Patients
               <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li><a href="regPatient.php">Patients details</a></li>
               <li class="divider"></li>
               <li><a href="Labtest.php">Diagnosis</a></li>
               <li class="divider"></li>
               <li><a href="Labresult.php">Labcheck</a></li>
            </ul>
         </li>
   
    <li><a href="index.php">Logout</a></li
   
</ul>
				
				
				
            </div>
	</div>

</div>
<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Doctor labtest</h2>
               
                               <br />
            </div>
        </div>
		<div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong style="color:green;">   Enter Details for test </strong>  
                            </div>
                            <div class="panel-body">
							 <form role="form" action="" method="POST">
							             <div class="form-group input-group">

                                            <label for="test">Select test to be done</label>
											<select class="form-control"  name="test" required>
											<option></option>
											<option>APOE Genotyping, Alzheimer Disease</option>
											<option>Arbovirus serology</option>
											<option>Apolipoprotein A-I</option>
											</select>
                                        </div>
										<div class="form-group input-group">

                                            <label for="test">Select the specimen</label>
											<select class="form-control"  name="specimen" required>
											<option></option>
											<option>blood</option>
											<option>Stool</option>
											<option>urine</option>
											
											</select>
                                        </div>
										<div class="form-group input-group">

                                            <label for="test">Select days/hours to be done</label>
											<select class="form-control"  name="days" required>
											<option></option>
											<option>24-Hour </option>
											<option>72 Hour </option>
											</select>
                                        </div>
										<div class="form-group input-group">

                                            <label for="test">Select laboratory</label>
											<select class="form-control"  name="lab" required>
											<option></option>
											<option> lab A</option>
											<option>lab B</option>
											</select>
                                        </div>
										<div class="row">
										<div class="form-group input-group">
                                            
                                             <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="submit">SUBMIT</button>
                                        </div>
										
										
										</div>
							 </form>
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
if (isset($_POST['submit']) )
{

$test=$_POST["test"];
$specimen=$_POST["specimen"];
$days=$_POST["days"];
$lab=$_POST["lab"];

$query ="INSERT INTO `patientinfo`(`Test_to_be_done`, `Specimen`, `Period`, `Lab`) VALUES ('$test','$specimen','$days','$lab')"; 

//echo " Added Successfully ";
$result = mysql_query($query,$con);
        
           
        if($result){
           
include "connect.php";

$query = "select * from patientinfo ";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo"ITEMS SENT";
	echo"<table>";
echo "<tr><td>" . $row['Test_to_be_done'] . "</td><br><td> " . $row['Specimen'] . "</td><td> " . $row['Period'] . "</td><td> " . $row['Lab'] . "</td></tr>";
echo"<table>";
echo"</table>";

}
        }else{
            $fmsg ="User Registration Failed";
        }
}

 ?>

