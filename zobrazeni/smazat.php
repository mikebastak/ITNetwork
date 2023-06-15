<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$recordID = $_POST['id'];

$sql = "DELETE FROM pojištěnci WHERE `pojištěnci`.`ID` = '" . $recordID . "'";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo "Záznam byl úspěšně smazán.";
} else {
    echo "Chyba při mazání záznamu: " . $conn->error;
}

$conn->close();
?>