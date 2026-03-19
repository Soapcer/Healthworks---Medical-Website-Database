<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $stmt = $conn->prepare("DELETE FROM inquiries WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Inquiry deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Failed to delete inquiry.";
    }

    $stmt->close();
}

header("Location: admin_home.php");
exit();

?>