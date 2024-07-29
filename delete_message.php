<?php
include("conn.php");

if (isset($_POST['deleteId'])) {
    $id = $_POST['deleteId'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }

    $stmt->close();
}

$conn->close();
?>