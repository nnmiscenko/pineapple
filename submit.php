<?php
error_reporting(0);
header('Content-Type: application/json');
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "newsletter_db";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Data
  $json = file_get_contents('php://input');
  $params = json_decode($json);

  $email_platform = $params->data->email;
  $date = date("Y/m/d h:i:s");

  if ($email = '') {
    $res = [ 'error' => '* Email address is required' ];
    echo json_encode($res);
  }

  $sql = "INSERT INTO `applications` (`email`, `email_platform`, `create_date`)
    VALUES ('$email_platform', '$email_platform', '$date')";

  if ($conn->query($sql) === TRUE) {
    $res = [ 'status' => 'ok' ];
    echo json_encode($res);
  } else {
    $res = [ 'status' => 'error' ];
    echo json_encode($res);
  }

  $conn->close();
?>