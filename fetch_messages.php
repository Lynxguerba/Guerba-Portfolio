<?php
include("conn.php");

// Fetch messages from the database
$sql = "SELECT id, name, message FROM messages ORDER BY id DESC";
$result = $conn->query($sql);

$messages = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

$conn->close();
echo json_encode($messages);
?>