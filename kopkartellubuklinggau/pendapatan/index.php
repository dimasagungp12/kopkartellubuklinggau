<?php 
    include 'koneksi.php';
?>

<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:../login"); //ganti login.php dengan halaman login Anda
    exit();
}

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
}
?>


<!DOCTYPE html>
<html lang="en"class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/icon-ebook.png" type="image/png"> 
    <title>Pendapatan</title>
</head>
<body class="h-100 d-flex flex-column text-light bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" aria-label="navigation">
    <div class="container-fluid">
        <a href="home.php" class="navbar-brand d-flex align-items-center">
        
            <img src="../assets/img/icon-ebook.png" alt="" class="me-1"> Kopkartel Lubuklinggau 
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-auto">
                <li class="nav-item">
                    <a href="../home" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../biaya/index" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Buku Kas    
                    </a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="../pendapatan/index">Pendapatan</a></li>
                        <li><a class="dropdown-item text-white" href="../biaya/index">Biaya</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../simpan/index" class="nav-link">Simpan Pinjam</a>
                </li>
                </li>
                </li>
            </ul>
        </div>
    </div>
            
                <div class="dropdown d-none d-lg-block">
                    <img src="../assets/img/icon-user.png" alt="" class="btn dropdown-toggle p-0 me-4" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                        <li>
                            <button type="button" class="dropdown-item user-select-none pe-auto">
                                Signed in as <span class="fw-bold"><?= $username = "koperasi"; ?></span>
                            </button>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a href="../logout.php" class="dropdown-item link-warning fw-semibold">Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="text-light mb-3 user-select-none d-lg-none">
                    Signed in as <span class="fw-bold"></span>
                </div>
                <a href="../home.php" class="btn btn-warning mb-2 fw-semibold d-lg-none">Logout</a>
            </div>
        </div>
    </nav>
<div class="container mt-3">
    <a href="add.php" class="btn btn-primary btn-md mb-3"><i class='fa fa-plus'></i>Tambah Data</a>

  <table class="table table-striped table-hover table-bordered">
    <thead class="table-dark"> 
        <th>Id</th>
        <th>Tanggal</th>
        <th>Uraian</th>
        <th>Jumlah</th>
        <th>Aksi</th>
        </thead>

    <?php 
        $sqlGet = "SELECT * FROM pendapatan";
        $query = mysqli_query($conn, $sqlGet);

        $total = 0;
        while($data = mysqli_fetch_array($query)) {
            echo "<tr>"; 
            echo "<td>" . $data['id'] . "</td>";
            echo "<td>" . $data['tanggal'] . "</td>";
            echo "<td>" . $data['uraian'] . "</td>";
            echo "<td>Rp. " . number_format($data['jumlah'], 0, ".", ".") . "</td>";
            echo "<td>
                    <div class='row'>
                        <div class='col d-flex justify-content-center'>
                            <a href='update.php?id=$data[id]' class='btn btn-sm btn-warning'><i class='fa fa-edit'></i> Update</a>
                        </div>
                        <div class='col d-flex justify-content-center'>
                            <a href='delete.php?id=$data[id]' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>Delete</a>
                        </div>
                    </div>
                </td>";
            echo "</tr>";

            // Tambahkan nilai pada variabel total
            $total += $data['jumlah'];
        }
    ?>

    <!-- Tampilkan total pada bagian bawah tabel -->
    <tr>
        <td colspan="2"></td>
        <td style="text-align:right;font-weight:bold;">Total:</td>
        <td style="text-align:left;font-weight:bold;"><?php echo "Rp. " . number_format($total, 0, ".", "."); ?></td>
        <td></td>
    </tr> 
  </table>
</div> 
</body>
<footer class="bg-dark text-light px-0 py-4 p-sm-4 mt-auto">
        <div class="container d-flex justify-content-between align-items-center flex-column flex-md-row">
            <div>
                &copy; <?= date("Y") ?> Created by
                <a href="https://www.google.com/maps/place/PT.+TELKOM+Lubuklinggau/@-3.2958425,102.8596516,17z/data=!3m1!4b1!4m6!3m5!1s0x2e30e0fd0ce6cb11:0xe5055abf540d821f!8m2!3d-3.2958479!4d102.8618403!16s%2Fg%2F11cjh_4h81 " target="_blank" rel="noopener noreferrer" class="link-warning text-decoration-none fw-semibold">
                    <i class="bi bi-balloon-heart-fill text-warning" aria-hidden="true"></i> Telkom Lubuklinggau
                </a>
            </div>
            <div>
                Koperasi Icons Created by
                <a href="https://flaticon.com/free-icons/ebook" title="kopkartel Lubuklinggau icons" target="_blank" rel="noopener noreferrer" class="link-warning text-decoration-none fw-semibold">Freepik - Flaticon</a>
            </div>
        </div>
    </footer>
    <style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
