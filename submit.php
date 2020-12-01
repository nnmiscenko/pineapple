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
  $data = json_decode($json);

  $id = 1;
  $email = $data->email;
  $email_platform = $data->email;
  $date = date("Y/m/d h:i:s");

  if ($email = '') {
    $res = [ 'error' => '* Email address is required' ];
    echo json_encode($res);
  }

  $sql = "INSERT INTO `applications` (`id`, `email`, `email_platform`, `create_date`)
    VALUES ('$id', '$email', '$email_platform', '$date')";

  if ($conn->query($sql) === TRUE) {
    $res = [ 'status' => 'ok' ];
    echo json_encode($res);
  } else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>