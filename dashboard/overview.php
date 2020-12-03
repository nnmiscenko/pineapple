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
    include("../config.php");

    $sortByName = '';
    $sortByNameParameter = "ASC";
    $sortByDate = '';
    $sortByDateParameter = "ASC";
    $filterByMail = '';
    $page = '';
    $searchText = '';
    $sortParameters = '';
    $filterByMailArr = [];
    $itemsPerPage = 10;

    if (isset($_GET["sortByName"])) {
      $sortByName = $_GET["sortByName"];
    }

    if (isset($_GET["sortByDate"])) {
      $sortByDate = $_GET["sortByDate"];
    }

    if (isset($_GET["filterByMail"])) {
      $filterByMail = $_GET["filterByMail"];
    }

    if (isset($_GET["search"])) {
      $searchText = $_GET["search"];
    }

    if (isset($_GET["page"])) {
      $page = $_GET["page"];
    }

    $sql = "SELECT * FROM `applications` ORDER BY `create_date` ASC";

    if (strlen($sortByName) > 0 || strlen($sortByDate) > 0) {
      if ($sortByName == "ASC") {
        $sortParameters .= "`email` ASC ";
      } else if ($sortByName == "DESC") {
        $sortParameters .= "`email` DESC ";
      }
      
      if ($sortByDate == "ASC") {
        $sortParameters .= "`create_date` ASC ";
      } else if ($sortByDate == "DESC") {
        $sortParameters .= "`create_date` DESC ";
      }

      $sql = "SELECT * FROM `applications` ORDER BY ".$sortParameters;
    }
    
    if (strlen($filterByMail) > 0) {
      $sql = "SELECT * FROM applications WHERE email_platform LIKE '".$filterByMail."'";
    }

    if (strlen($searchText) > 0) {
      $sql = "SELECT * FROM applications WHERE email LIKE '%".$searchText."%'";
    }

    $result = $conn->query($sql);

    $sortByNameParameter = $sortByName == "ASC" ? "DESC" : "ASC";
    $sortByDateParameter = $sortByDate == "ASC" ? "DESC" : "ASC";
    $sortByDateUrl = "?sortByDate=" . $sortByDateParameter;
    $sortByNameUrl = "?sortByName=" . $sortByNameParameter;

    echo "<div class='pagination'>";
    for ($i = 0; $i < ($result->num_rows / $itemsPerPage); $i++) {
      $pageNum = $i + 1;
      echo "<a href='?page=$pageNum'>".$pageNum."</a>";
    }
    echo "</div>";

    if (strlen($page) > 0) {
      $from = $page * $itemsPerPage - $itemsPerPage;
      $to = $page * $itemsPerPage;

      if ($to > $result->num_rows) {
        $to = $result->num_rows;
      }

      $sql = "SELECT * FROM `applications` ORDER BY `create_date` ASC LIMIT ".$from.", ".$itemsPerPage;
      $result = $conn->query($sql);
    }

    if ($result && $result->num_rows > 0) {
      echo "
        <table class='dashboard-table'>
          <tr>
            <th>ID</th>
            <th><a href='" . $sortByNameUrl . "'>Email</th>
            <th><a href='" . $sortByDateUrl . "'>Submit date</th>
            <th>Controls</th>
          </tr>
      ";
      while ($row = $result->fetch_assoc()) {
        echo "
          <tr>
            <td class='info-cell'>" . $row["ID"] ."</td>" .
            "<td class='info-cell'>" . $row["email"] . "</td>" .
            "<td class='info-cell'>" . $row["create_date"] . "</td>
            <td><a href='delete.php?ID=". $row["ID"] . "'>Delete</a></td>
          </tr>
        ";

        if (!in_array($row["email_platform"], $filterByMailArr)) {
          array_push($filterByMailArr, $row["email_platform"]);
        }
      }
      echo "</table>";
    } else {
      echo '
        <div style = "display: flex; width: 100%; margin: 0 auto; font-weight: bold; justify-content: center; ">
          No entries have been added yet.
        </div>
      ';
    }
    if ($conn->query($sql) == TRUE) {
      $successfullySubmitted = true;
    } else {
      $successfullySubmitted = false;
    }
    $conn->close();
  ?>

  <div class="filter-container">
    <p>Filter and search controls</p>
    <a class='filter-button' href='?'>Reset</a>
    <div class="search-controls">
      <form action="?" id="search">
        <input type="text" placeholder="Search" id="search" name="search" />
        <input type="submit" value="Submit"/>
      </form>
    </div>
    <?php
      for ($i = 0; $i < count($filterByMailArr); $i++) {
        echo "<a class='filter-button' href='?filterByMail=". $filterByMailArr[$i] ."'>". $filterByMailArr[$i] . "</a>";
      }
    ?>
  </div>
</body>
</html>
