<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Login</title>
<style type="text/css">
	body {
		display: flex;
		flex-direction:column;
		align-items: center;
		justify-content: center;
	}
	form {
		margin: 20px;
		border: 4px solid black;
		display: flex;
		flex-direction: column;
		padding: 20px;
		background-color: white;
	}
	input ,select{
		
		width:auto;
		float:right;
	}
	label {
	font-weight: bold;
		font-size: 15px;
		margin-bottom: 10px;
	}
	#submit {
			font-weight: bold;
		width: 100px;
		float: right;
		align-self: center;
		margin: 20px;
		background-color:#00bcd4;
	}
	#reset {
			font-weight: bold;
		align-self: center;
		width: 100px;
		background-color: #ffb200;
	}
	h2 {
		font-family:serif;
	}
	@media only screen and (min-width:600px){
		form {
			width: 400px;

		}
	}

</style>
</head>


<body>
	<h2 align="center">APPLICTION FORM</h2>
<form action="form.php" autocomplete=""  method="post">
<label>Name :
<input type="text" name="name"></label>
<label>Email :
<input type="text" name="email"><br></label>
<label> Date of Birth :
<input type="text" name="dob"><br></label>
<label>Father name :
<input type="text" name="fname"><br></label>
<label>Mother name :
<input type="text" name="mname"><br></label>
<label>Address :
<input type="text" name="add"><br></label>
<label>Mobile :
<input type="text" name="mobile"><br></label>

<label>Gender : 
<select name="gender" size="1">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select><br></label>


<label>Category : 
<select name="category" size="1">
<option value="Genral">Genral</option>
<option value="OBC">OBC</option>
<option value="SC/ST">SC/ST</option>
</select><br></label>


<label>Class :
<select name="class" size="1">
<option value="Bca 1 sem">BCA FirstSem</option>
<option value="BCA 2 sem">BCA SecondSem</option>
<option value="BCA 3 sem">BCA ThirdSem</option>
<option value="BCA 4 sem">BCA ForthSem</option>
<option value="BCA 5 sem">BCA FifthSem</option>
<option value="BCA 6 sem">BCA SixthSem</option>
</select></label>

<input id="submit" type="submit" value="Submit">
<input id="reset" type="reset" value="Reset">

</form>
</body>
</html>