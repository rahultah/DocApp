<?php
session_start();
include "config.php";
if(isset($_SESSION['email']) && ($_SESSION['id']))
{
    header('location: doctors/index.php');

}

?>