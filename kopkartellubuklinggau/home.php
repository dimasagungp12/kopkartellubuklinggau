<?php
require_once "functions.php";

$username = $_SESSION["username"] ?? null;
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/icon-ebook.png" type="image/png">
    <title> Kopkartel Lubuklinggau</title>
</head>
<body class="h-100 d-flex flex-column text-light bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" aria-label="navigation">
    <div class="container">
        <a href="home.php" class="navbar-brand d-flex align-items-center">
        
            <img src="assets/img/icon-ebook.png" alt="" class="me-1"> Kopkartel Lubuklinggau
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-auto">
                <li class="nav-item">
                    <a href="home" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Buku Kas    
                    </a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="pendapatan/index">Pendapatan</a></li>
                        <li><a class="dropdown-item text-white" href="./biaya/index">Biaya</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="./simpan/index" class="nav-link">Simpan Pinjam</a>
                </li>
                    </ul>
                </li>
                </li>
            </ul>
        </div>
    </div>
                <?php if (isset($_SESSION["username"])): ?>
                <div class="dropdown d-none d-lg-block mb-2 my-lg-0 mx-lg-4">
                    <img src="assets/img/icon-user.png" alt="Icon User" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                        <li>
                            <button type="button" class="dropdown-item user-select-none pe-auto">
                                Signed in as <span class="fw-bold"><?= $username; ?></span>
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
                <?php else: ?>
                <a href="login" class="btn btn-warning fw-semibold mb-2 my-lg-0 mx-lg-4">Sign In</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="container text-center my-auto">
        <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
            <h1 class="fw-bold">Getting Started</h1>
            <p class="lead">
                Kopkartel Lubuklinggau is a web application that helps you browse Data from anywhere.
                <span class="fw-semibold">Sign Up to become a member</span>
            </p>
            <p class="lead">
                <a href="signup" class="btn btn-lg btn-secondary link-dark fw-semibold bg-white">Sign Up</a>
            </p>
        </div>
    </main>
    
    <footer class="bg-dark text-light px-0 py-4 p-sm-4">
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
