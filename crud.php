<?php
// Hubungkan Database
$koneksi = mysqli_connect("localhost", "n1577759_crud", "9H9M0UXWC859", "n1577759_crud");

// Menambahkan Data
if(isset($_POST['submit'])){
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $target_dir = "upload/img/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    $query = "INSERT INTO `mahasiswa`(`Nim`, `Nama`, `Prodi`, `img`) VALUES ('$nim','$nama','$prodi', '$target_file')";
    mysqli_query($koneksi, $query);
}

// Menampilkan Data
$ambil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

//menghapus Data    
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT img FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $img_path = $row['img'];
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
    unlink($img_path);
    header("Location: index.php");
}

//mengedit Data    
if(isset($_POST['edit'])) {
    $id = htmlspecialchars($_POST['MasukanNim']);
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $target_dir = "upload/img/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

    $stmt = $koneksi->prepare("UPDATE mahasiswa SET Nim=?, Nama=?, Prodi=?, img=? WHERE id=?");
    $stmt->bind_param("sssss", $nim, $nama, $prodi, $target_file, $id);
    if($stmt->execute()){
        header("Location: index.php");
    } 
}



?>