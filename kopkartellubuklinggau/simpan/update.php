<?php 
    include 'koneksi.php';

    $id = $_GET['id'];
    $sqlGet = "SELECT * FROM simpanp WHERE id='$id'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/icon-ebook.png" type="image/png">
    <title>Update Data Simpan Pinjam</title>
</head>
<body class="h-100 d-flex flex-column text-dark bg-light">  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" aria-label="navigation">
    <div class="container">
        <a href="../simpan/index.php" class="navbar-brand d-flex align-items-center">
        
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <div class="dropdown d-none d-lg-block mb-2 my-lg-0 mx-lg-4">
                    <img src="../assets/img/icon-user.png" alt="Icon User" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                        <li>
                            <button type="button" class="dropdown-item user-select-none pe-auto">
                                Signed in as <span class="fw-bold"><?= $username="koperasi"; ?></span>
                            </button>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a href="logout" class="dropdown-item link-warning fw-semibold">Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="text-light mb-3 user-select-none d-lg-none">
                    Signed in as <span class="fw-bold"><?= $username; ?></span>
                </div>
                <a href="logout" class="btn btn-warning mb-2 fw-semibold d-lg-none">Logout</a>
            </div>
        </div>
    </nav>
<body>  
    <div class="w-50 mx-auto border p-3 mt-5">
    <a href="index.php" class="btn btn-primary"><i class='fa fa-arrow-left'></i> Kembali</a>
        <form action="update.php" method="post">
        <br> 
        <label for="id">Id</label>
        <input type="text" id="id" name="id" class="form-control" value="<?php echo $data['id']; ?>" readonly>
        <br>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required>
        <br>
        <label for='loker'>Loker</label>
        <select name='loker' id='loker' class="from-select" required>
            <option value="Mitra" <?php if($data['loker'] == 'Mitra') echo 'selected'; ?>>Mitra</option>
            <option value="Telkom" <?php if($data['loker'] == 'Telkom') echo 'selected'; ?>>Telkom</option>
            <option value="Security" <?php if($data['loker'] == 'Security') echo 'selected'; ?>>Security</option>
            <option value="Cs" <?php if($data['loker'] == 'Cs') echo 'selected'; ?>>Cs</option>
            <option value="Pensiunan" <?php if($data['loker'] == 'Pensiunan') echo 'selected'; ?>>Pensiunan</option>
            <option value="Kary Kop" <?php if($data['loker'] == 'Kary Kop') echo 'selected'; ?>>Kary Kop</option>
            <option value="Kary POJ" <?php if($data['loker'] == 'Kary POJ') echo 'selected'; ?>>Kary POJ</option>
        </select>
        <br>
        <br>
        <label for="pokok">Pokok</label>
<input type="text" id="pokok" name="pokok" class="form-control" value="<?php echo $data['pokok']; ?>" required onkeyup="formatRupiah(this.value, 'pokok-rupiah')">
<span id="pokok-rupiah"></span>
<br><br>

<label for="sukarela">Sukarela</label>
<input type="text" id="sukarela" name="sukarela" class="form-control" value="<?php echo $data['sukarela']; ?>" required onkeyup="formatRupiah(this.value, 'sukarela-rupiah')">
<span id="sukarela-rupiah"></span>
<br><br>
<label for="wajib">Wajib</label>
<input type="text" id="wajib" name="wajib" class="form-control" value="<?php echo $data['wajib']; ?>" required onkeyup="formatRupiah(this.value, 'wajib-rupiah')">
<span id="wajib-rupiah"></span>
<br><br>
<label for="kontribusi">Kontribusi</label>
<input type="text" id="Kontribusi" name="kontribusi" class="form-control" value="<?php echo $data['kontribusi']; ?>" required onkeyup="formatRupiah(this.value, 'kontribusi-rupiah')">
<span id="kontribusi-rupiah"></span>
<br><br>

<script>
function formatRupiah(angka, id) {
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

  if (ribuan) {
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }

  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  document.getElementById(id).innerHTML = 'Rp. ' + rupiah;
}
</script>
 <td>
        <br>
        <button class='btn btn-warning btn-sm' type='submit' name='update'>
  <i class='fa fa-refresh fa-spin'></i> Update
</td>
</button>



     </form>
    </div>

<?php 

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $loker = $_POST['loker'];
    $pokok = $_POST['pokok'];
    $sukarela = $_POST['sukarela'];
    $wajib = $_POST['wajib'];
    $kontribusi = $_POST['kontribusi'];
    
    $sqlUpdate = "UPDATE simpanp
    SET nama='$nama', loker='$loker', pokok='$pokok', sukarela='$sukarela', wajib='$wajib', kontribusi='$kontribusi'
    WHERE id='$id'";
    $queryUpdate = mysqli_query($conn, $sqlUpdate);

    if ($queryUpdate) {
        echo "<script>alert('Data berhasil diupdate.')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Data gagal diupdate.')</script>";
    }
}
?>
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
                <a href="https://flaticon.com/free-icons/ebook" title="Kopkartel Lubuklinggau icons" target="_blank" rel="noopener noreferrer" class="link-warning text-decoration-none fw-semibold">Freepik - Flaticon</a>
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
