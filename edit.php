<?php
include 'config.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $genre = $_POST['genre'];

    $sql = "UPDATE buku SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit', genre='$genre' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data buku berhasil diperbarui";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: index.php");
} else {
    $sql = "SELECT * FROM buku WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form method="post" action="edit.php?id=<?php echo $id; ?>">
        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?php echo $row['judul']; ?>"><br>
        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?php echo $row['penulis']; ?>"><br>
        <label>Tahun Terbit:</label><br>
        <input type="text" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>"><br>
        <label>Genre:</label><br>
        <input type="text" name="genre" value="<?php echo $row['genre']; ?>"><br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Kembali ke Daftar Buku</a>
</body>
</html>