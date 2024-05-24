<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO buku (judul, penulis, tahun_terbit, genre) VALUES ('$judul', '$penulis', '$tahun_terbit', '$genre')";

    if ($conn->query($sql) === TRUE) {
        echo "Buku baru berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form method="post" action="create.php">
        <label>Judul:</label><br>
        <input type="text" name="judul"><br>
        <label>Penulis:</label><br>
        <input type="text" name="penulis"><br>
        <label>Tahun Terbit:</label><br>
        <input type="text" name="tahun_terbit"><br>
        <label>Genre:</label><br>
        <input type="text" name="genre"><br>
        <input type="submit" value="Tambah">
    </form>
    <a href="index.php">Kembali ke Daftar Buku</a>
</body>
</html>
