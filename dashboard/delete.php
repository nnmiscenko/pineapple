<?php
if(isset($_GET["ID"]) && !empty($_GET["ID"])){
  include("../config.php");
  $ID = $_GET["ID"];
  $sql = "DELETE FROM applications WHERE ID = ". $ID ."";
  if($stmt = mysqli_prepare($conn, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    $param_id = trim($ID);
    if(mysqli_stmt_execute($stmt)){
      header("location: overview.php");
      exit();
    } else{
      echo "Server error! Please try again later.";
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($link);
}
?>
