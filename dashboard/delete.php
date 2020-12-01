<?php
// Process delete operation after confirmation
if(isset($_GET["ID"]) && !empty($_GET["ID"])){
    // Include config file
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newsletter_db";
    $ID = $_GET["ID"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare a delete statement
    $sql = "DELETE FROM applications WHERE ID = ". $ID ."";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($ID);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: overview.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
}
//  else{
//     // Check existence of id parameter
//     if(empty(trim($_GET["ID"]))){
//         // URL doesn't contain id parameter. Redirect to error page
//         header("location: error.php");
//         exit();
//     }
// }
?>