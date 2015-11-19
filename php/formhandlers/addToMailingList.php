<?php
require_once("globals.php");

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase);

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];


$query = "SELECT * FROM mailinglist WHERE email = '" . mysqli_real_escape_string($conn, $email) . "';";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 0)
{
	$query = "INSERT INTO mailinglist(firstName, lastName, email) VALUES(?, ?, ?)";
	$stmt = mysqli_prepare($conn, $query);
	mysqli_stmt_bind_param($stmt, 'sss', $firstName, $lastName, $email);
	$querySuccess = mysqli_stmt_execute($stmt);
	if($querySuccess) echo 'ENTRY SUCCESSFUL';
	else echo 'UNDEFINED FAILURE';
}
else echo 'EMAIL ALREADY EXISTS';



mysqli_close($conn);

function allFieldsFilledOut()
{
	$firstName = $_REQUEST["firstName"];
	$lastName = $_REQUEST["lastName"];
	$email = $_REQUEST["email"];
	
	if($firstName == "" || $lastName == "" || $email == "")
		return false;
	
	else return true;
}

?>