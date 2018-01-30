<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Show MySQL DB Data</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
	
<table class="table table-bordered">
 <thead>
 <tr>
 <th>Test to be done</th>
 <th>Specimen used</th>
 <th>Period</th>
 <th>Laboratory</th>
 </tr>
 </thead>
 <tbody>
 <tr>
			<?php
			include("connect.php");
			
			$result = mysql_query("SELECT * FROM patientinfo");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo"<td>".$test['id']."</td>";
				echo"<td>".$test['Test_to_be_done']."</td>";
				echo"<td>".$test['Specimen']."</td>";
				echo"<td>".$test['Period']."</td>";	
                echo"<td>".$test['Lab']."</td>";								
				echo "</tr>";
			}
			mysql_close($con);
			?>
</table>
<div class="form-group">
                                            
                                            
											<span class="pull-right">
                                                   <a href="Labresult.php" >Refresh </a> 
                                            </span>
                                        </div>

</div>
</body>
</html>