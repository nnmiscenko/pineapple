<?php
  header('Content-Type: application/json');

  include("config.php");

  // Data
  $json = file_get_contents('php://input');
  $data = json_decode($json);
  $emailValue = strval($data->data);
  $emailPlatform = strstr($emailValue, "@");
  $date = date("Y/m/d h:i:s");

  if (strlen($emailValue) == 0) {
    return;
  }

  $sql = "INSERT INTO `applications` (`email`, `email_platform`, `create_date`)
  VALUES ('$emailValue', '$emailPlatform', '$date')";

  echo $sql;
  if ($conn->query($sql) === TRUE) {
    $res = [ 'status' => 'ok' ];
    echo json_encode($res);
  } else {
    $res = [ 'status' => 'error' ];
    echo json_encode($res);
  }

  $conn->close();
?>
