<?php
// header('location: profile.php');
include "top.php";
require_once '../dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf;
$id = $_SESSION['id'];
$phone = $_POST['phone'];
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$aline1 = $_POST['aline1'];
$aline2 = $_POST['aline2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$degree = $_POST['degree'];
if(isset($_POST['usubmit']))
{
		
	$s = "UPDATE `doctors` SET `name`='$fname',`dob`='$dob',`aLine1`='$aline1',`aLine2`='$aline2',`state`='$state',`city`='$city',`zipcode`='$zip',`degree`='$degree' WHERE id = '$id'";
	$result = mysqli_query($conn,$s);
	header('location: profile.php?success=1&msg=Profile Updated Successfully !');


}
else if (isset($_POST['samplesubmit']))
{
	// echo "Sample";
	 
	
	// Instantiate and use the dompdf class 
	$dompdf = new Dompdf();
	// Load content from html file 
	// $html = file_get_contents("my.html"); 
	$html = "<!DOCTYPE html>
	<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>Document</title>
	</head>
	<body>
		<style>
			.center {
	margin-left: auto;
	margin-right: auto;
	}
		</style>
		<table class='center' style='width: 791px;' border='1'>
			<tbody>
			<tr style='height: 153px;'>
			<td style='width: 303.8px; height: 153px;'><img src='../assets/img/2.jpg' alt='' width='300' height='200'></td>
			<td style='width: 483.2px; height: 153px;'><b>Doctor Name: - </b>$fname<br><b>Doctor Contact: - </b>$phone<br><b>Qualifiactions: - </b>$degree<br><b>Doctor Address: - </b><br> $aline1,<br>$aline2,<br>$city, $state,<br>$zip</td>
			</tr>
			<tr style='height: 101px;'>
			<td style='width: 303.8px; height: 101px;'>&nbsp;</td>
			<td style='width: 483.2px; height: 413px;' rowspan='4'>Main Prescription Goes Here</td>
			</tr>
			<tr style='height: 102px;'>
			<td style='width: 303.8px; height: 102px;'>&nbsp;</td>
			</tr>
			<tr style='height: 98px;'>
			<td style='width: 303.8px; height: 98px;'>&nbsp;</td>
			</tr>
			<tr style='height: 112px;'>
			<td style='width: 303.8px; height: 112px;'>&nbsp;</td>
			</tr>
			</tbody>
			</table>
		
			<!-- DivTable.com -->
	</body>
	</html>"; 
	$dompdf->loadHtml($html); 
	
	// (Optional) Setup the paper size and orientation 
	$dompdf->setPaper('A4', 'landscape'); 
	
	// Render the HTML as PDF 
	$dompdf->render(); 
	
	// Output the generated PDF (1 = download and 0 = preview) 
	$dompdf->stream("codexworld", array("Attachment" => 0));
	
}
?>