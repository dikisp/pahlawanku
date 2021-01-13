<?php
require_once("config.php");

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $q = $conn->query("INSERT INTO users VALUES ('', '$email','$pass')");

    if ($q) {
        echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
    }
} else {
    header('Location :index.php');
}

?>
