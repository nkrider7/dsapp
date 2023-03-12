<?php
$dob = $_POST["dob"];
$name = $_POST["name"];
$class = $_POST["class"];
$mname  = $_POST["mname"];
$fname  = $_POST["fname"];
$address  = $_POST["add"];
$gender  = $_POST["gender"];
$cat= $_POST["category"];
$email = $_POST["email"];  
$mobile = $_POST["mobile"];


?>
<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>DS College </title>
</head>
<style type="text/css">
	body {
		margin:0px;
	    padding: 0px;
	}
	header {
		display: flex;
		align-items: center;
		justify-content: center;
		height: 200px;
		background-color:white;
	}

	table {
		/*display: flex;*/
		justify-content: center;
width: 100%;
}

	}
	tr {
			
border: 2px solid gray;
	}
	th {
		font-size:15px;
border: 2px solid gray ;
	}
	td {
		font-size:15px;
		
border: 2px solid gray ;
	}
	#print {
		align-self: center;
		height:30px;
		font-size: 20px;
	}
	
	@media only screen and (max-width:400px){
		form {
			background-color: red;

		}
	}
</style>
<body>
<header>
	
	<img align="center" src="./ds.png" height="130px">
</header>

	
	<table><h3>Personal Information <h3/>
		<tr>
			<th>Class</th>
			<td><?php echo $class ?></td>
			<th>Stream</th>
			<td>Computer Application</td>


		</tr>
		<tr>
			<th>WEB Reg no.</th>
			<td>200112000093</td>
			<th>College App no</th>
			<td>DSC1114232</td>
<th rowspan="6"><img src="./pf.png" alt="image" height="150px" width="150px"></th>
		</tr>
		<tr>
			<th>Student Name </th>
			<td><?php echo $name ?></td>
			<th>Category</th>
			<td>OBC</td>

		</tr>

<tr>
			<tr>
			<th>College App</th>
			<td>DSC12121 </td>
			<th>Aadhar no</th>
			<td>987654321012</td>

		</tr>
			<th>Mother Name</th>
			<td><?php echo $mname ?></td>
			<th>Father Name </th>
			<td><?php echo $fname ?></td>

		</tr>
		
		<tr>
			<th>Gender</th>
			<td><?php echo $gender ?> </td>
			<th>Date of Birth</th>
			<td><?php echo $dob ?></td>

		</tr>
		
		
		<tr>
			<th >Address </th>
			<td colspan="4"><?php echo $address ?></td>
			
		</tr>
			<tr>
			<th>Email</th>
			<td colspan="2"><?php echo $email ?></td>
			<th>Mobile no.</th>
			<td><?php echo $mobile ?></td>

		</tr>

		

	</table>
	
<h3>Fees Details</h3>
	<table>
		<tr>
			<th>Fees RSs</th><td>28,300</td><td>Trans Id</td><td>1235060202330099</td><td>Date</td><td>13/02/2021</td>	

		</tr>

	</table>
	<table>
		<h3>Academics Details</h3>
		<tr><th>Sr. No.</th><th>Qualification</th><th>Roll no.</th><th>Year</th><th>Board</th><th>Subject</th><th>M.Marks</th><th>o.Marks</th><th>Percentage</th></tr>
		<tr><th>1.</th><th>High School</th><th>027662</th><th>2019</th><th>UPBoard</th><th>Science</th><th>600</th><th>443</th><th>73.83</th></tr>
		<tr><th>2</th><th>Intermediate</th><th>091548</th><th>2021</th><th>UPBoard</th><th>Science</th><th>500</th><th>348</th><th>69.60</th></tr>
		
	</table>

</center>
<p>Marksheet and certificate were check and found to be correct (yes /no);</p>

<div><button id="print" onClick="window.print()">Print Form
</button></div>


</body>
</html>