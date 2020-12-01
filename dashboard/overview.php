<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/css/style.css" rel="stylesheet" />
  <title>Dashboard overview.</title>
</head>
<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newsletter_db";

    // Sorting parameters
    


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `applications` ORDER BY `create_date`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "
        <table class='dashboard-table'>
          <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Email Platform</th>
            <th>Submit date</th>
          </tr>
      ";
      while ($row = $result->fetch_assoc()) {
        echo "
          <tr>
            <td class='info-cell'>" . $row["ID"] ."</td>" .
            "<td class='info-cell'>" . $row["email"] . "</td>" .
            "<td class='info-cell'>" . $row["email_platform"] . "</td>" .
            "<td class='info-cell'>" . $row["create_date"] . "</td>
            <td><a href='delete.php?ID=". $row["ID"] . "'>Delete</a></td>
          </tr>
        ";
      }
      echo "</table>";
    } else {
      echo '
        <div style = "display: flex; width: 100%; margin: 0 auto; font-weight: bold; justify-content: center; ">
          No entries have been added yet.
        </div>
      ';
    }

    if ($conn->query($sql) === TRUE) {
      $successfullySubmitted = true;
    } else {
      $successfullySubmitted = false;
    }

    $conn->close();
  ?>
</body>
</html>
