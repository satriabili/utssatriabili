<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM buku WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
</head>
<body>
    <h1>Detail Buku</h1>
    <p>ID: <?php echo $row['id']; ?></p>
    <p>Judul: <?php echo $row['judul']; ?></p>
    <p>Penulis: <?php echo $row['penulis']; ?></p>
    <p>Tahun Terbit: <?php echo $row['tahun_terbit']; ?></p>
    <p>Genre: <?php echo $row['genre']; ?></p>
    <a href="index.php">Kembali ke Daftar Buku</a>
</body>
</html>

<?php
$conn->close();
?>
