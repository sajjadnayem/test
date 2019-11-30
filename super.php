<?php
// //$GLOBALS with also make it formattive
// //before set value
// echo "<pre>";

// print_r($GLOBALS);

// echo "</pre>";

// //for storing my data
// $GLOBALS['nayem'] = "md. hasan";

// //after set value
// echo "<pre>";

// print_r($GLOBALS);

// echo "</pre>";

//$_SERVER
// echo "<pre>";

//  print_r($_SERVER);

// echo "</pre>";



//$_REQUEST
// echo "<pre>";

//   print_r($_REQUEST);

//  echo "</pre>";

// for starting session
session_start();
$_SESSION['name'] = "hasan";
 echo "<pre>";

  print_r($_SESSION);

 echo "</pre>";



?>