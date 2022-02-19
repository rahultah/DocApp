<?php
// include("err.php");
date_default_timezone_set("Asia/Calcutta");
$servername = "localhost:3306";
$username = "root";
$password = "";
$DB_Name = 'docapp';
$APP_NAME = 'DocApp';
$BASE_URL='http://localhost/docapp/';


$conn = new mysqli($servername, $username, $password,$DB_Name);

// Check connection
if ($conn->connect_error) {
  echo "<div class='alert alert-danger' role='alert'>Something went wrong and we're unable to connect Database, Please try again later, If problem still persists, drop mail to your administrator</div>";
  // die("Connection failed: " . $conn->connect_error);
  die("");
  $is_connected=FALSE;

}
else
{
    $is_connected=TRUE;
}

?>
