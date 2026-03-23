<?php
//dbconnection settings

$host = "localhost";
$username = "usermgmt";
$password = "Dolgoderevenskoye1";
$dbname = "usermgmt";

// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // TURN ON ERRORS IN THE FORM OF EXCEPTIONS
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // MAKE THE DEFAULT FETCH BE AN ASSOCIATIVE ARRAY
    PDO::ATTR_EMULATE_PREPARES   => false,                  // TURN OFF EMULATION MODE FOR REAL PREPARED STATEMENTS
];

try {
    // Create the PDO database connection
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    // Handle connection error
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>
