<!DOCTYPE html>
<html>
<head>
	<title>EBILL</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: #0099cc;
			text-align: center;
		}
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			margin: 0 auto;
			width: 500px;
			animation-name: slideIn;
			animation-duration: 1s;
		}
		label {
			display: block;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="number"], input[type="email"], input[type="submit"] {
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			width: 100%;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #0099cc;
			color: #fff;
			font-weight: bold;
			cursor: pointer;
			animation-name: fadeIn;
			animation-duration: 1s;
		}
		input[type="submit"]:hover {
			background-color: #006699;
		}
		@keyframes slideIn {
			from { transform: translateX(-100%); opacity: 0; }
			to { transform: translateX(0); opacity: 1; }
		}
		@keyframes fadeIn {
			from { opacity: 0; }
			to { opacity: 1; }
		}
	</style>
	<script>
		function calc(value) {
			document.getElementById('AMOUNT').value = value * 6;
		}
	</script>
</head>
<body>
	<h1>ELECTRICITY BILLING ONLINE SYSTEM (E-BILL)</h1>
	<hr>
	<form method="post">
		<strong>REGISTRATION FOR NEW USERS:</strong><br><br>
		<label for="FNAME">FIRST NAME:</label>
		<input type="text" name="FNAME" placeholder="FNAME">
		<br><br>
		<label for="LNAME">LAST NAME:</label>
		<input type="text" name="LNAME" placeholder="LNAME">
		<br><br>
		<label for="ADDRESS">ADDRESS:</label>
		<input type="text" name="ADDRESS" placeholder="ADDRESS">
		<br><br>
		<label for="AADHAR NUMBER">AADHAR NUMBER:</label>
		<input type="number" name="AADHAR_NUMBER" placeholder="AADHAR NUMBER">
		<br><br>
		<label for="PHONE NUMBER">PHONE NUMBER:</label>
		<input type="number" name="PHONE_NUMBER" placeholder="PHONE NUMBER">
		<br><br>
		<label for="EMAIL">EMAIL ID:</label>
		<input type="email" name="EMAIL" placeholder="EMAIL">
		<br><br>
		<label for="CA NUMBER">CA NUMBER:</label>
		<input type="number" name="CA_NUMBER" placeholder="CA NUMBER">
		<br><br>
		<label for="UNITS CONSUMED">UNITS CONSUMED:</LABEl>
            <input type="text" id="units_consumed" name="UNITS_CONSUMED" placeholder="UNITS CONSUMED" onkeyup="calc(this.value);">
            <br><br>			
            
            <LABEl for="TOTAL AMOUNT">TOTAL AMOUNT:</LABEl>
            <input type="text" id="AMOUNT" name="TOTAL_AMOUNT" placeholder="TOTAL AMOUNT"><BR><BR>
             <input type="submit" name="submit" value="submit" >

    </FORM>
</BODY>
<HTML>

<?php

if (isset($_POST['submit']))
{
$FNAME=$_POST['FNAME'];
$LNAME=$_POST['LNAME'];
$ADDRESS=$_POST['ADDRESS'];
$AADHAR_NUMBER=$_POST['AADHAR_NUMBER'];
$PHONE_NUMBER=$_POST['PHONE_NUMBER'];
$EMAIL=$_POST['EMAIL'];
$CA_NUMBER=$_POST['CA_NUMBER'];
$UNITS_CONSUMED=$_POST['UNITS_CONSUMED'];
$TOTAL_AMOUNT=$_POST['TOTAL_AMOUNT'];

$hostname="localhost";
$username="root";
$password="";
$database="ebill";
$conn=mysqli_connect($hostname,$username,$password,$database);
if(!$conn)
{
echo"CONNECTION IS not SUCCESFULL WITH DATABASE";
}
else
echo"CONNECTION IS SUCCESFULL WITH DATABASE";


$sql="insert into customers(FNAME, LNAME, ADDRESS, AADHAR_NUMBER, PHONE_NUMBER,EMAIL,CA_NUMBER,UNITS_CONSUMED,TOTAL_AMOUNT) VALUES ('$FNAME', '$LNAME', '$ADDRESS', '$AADHAR_NUMBER', '$PHONE_NUMBER', '$EMAIL', '$CA_NUMBER', '$UNITS_CONSUMED', '$TOTAL_AMOUNT')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "
    <script>
alert('registration is successsfull');
</script>
";
}
}
?>
