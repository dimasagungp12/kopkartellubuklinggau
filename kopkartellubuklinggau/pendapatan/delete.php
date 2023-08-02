<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $sqlGet = "SELECT * FROM pendapatan WHERE id='$id'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);

    $sqlDelete = "DELETE FROM pendapatan WHERE id='$id'";
    $queryDelete = mysqli_query($conn, $sqlDelete);

    $sqlUpdate = "SET @count := 0;";
    $queryUpdate = mysqli_query($conn, $sqlUpdate);

    $sqlUpdate = "UPDATE pendapatan SET id = @count:= @count + 1;";
    $queryUpdate = mysqli_query($conn, $sqlUpdate);
?>

<script>
    alert("Data berhasil dihapus.");
    window.location.href = "index.php";
</script>