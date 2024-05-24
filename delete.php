<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM buku WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data buku berhasil dihapus";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
header("Location: index.php");
?>
