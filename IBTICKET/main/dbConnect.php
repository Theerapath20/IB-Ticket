<?php
// Include the configuration file

define('CURRENCY', 'BATH');
define('CURRENCY_SYMBOL', '');

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'DATA');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    printf("Connect failed: %s\n", $db->connect_error); 
    exit(); 
}
?>

<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "DATA";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set PDO Error mode to exception
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         //echo "Connection success";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>
