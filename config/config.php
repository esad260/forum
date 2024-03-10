<?php

try {
    // Update these values for your non-local environment
    define("HOST", "localhost");
    define("DBNAME", "forum");
    define("USER", "databaseuser");
    define("PASS", "databasepassword");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Uncomment the following lines if you want to check the connection status
     if ($conn) {
         echo "Database connection is successful!";
     } else {
         echo "Error connecting to the database.";
     }
} catch (PDOException $Exception) {
    echo $Exception->getMessage();
}
?>
