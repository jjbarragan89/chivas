<?php 

$servername = "localhost";
$username = "root";
$password = "1nt3r4ct1v3";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 

    $sql = "SELECT table_name FROM information_schema.tables"; 
    $result = $conn->query($sql);

    echo '<pre>';
    print_r($result);
/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}*/
$conn->close();


    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>