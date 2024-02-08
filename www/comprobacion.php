<?php
  session_start();
  $name = $_GET["name"];
  $con = $_GET["con"];


  $userName = "Christian";
  $userCon = "1234";


  if ($name == $userName & $con == $userCon){
    header("Location: juego.php");
  }else{
    header("Location: error.php");
  }

  $_SESSION["usern"] = $name;

?>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
</body>
</html>