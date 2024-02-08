<?php
  session_start();
  $na = rand(1,10);
  $n1 = $_GET["n1"];

  if ($na == $n1){
    header("Location: ganar.php");
  }else{
    header("Location: perder.php");
  }

  $_SESSION["numero"] = $na;
?>
