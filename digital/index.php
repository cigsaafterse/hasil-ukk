<?php
include "koneksi.php";
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <header class="header-navbar navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="fa fa-book" aria-hidden="true"></i> Perpustakaan
                Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?"><i class="fa fa-home"></i>Dashboard</a>
                    </li>
                    <?php
                    if ($_SESSION['user']['level'] != 'peminjam') {
                        ?>
                        <a class="nav-link" href="?page=kategori">
                            <i class="fas fa-table"></i>
                            Kategori
                        </a>
                        <a class="nav-link" href="?page=buku">
                            <i class="fas fa-book"></i>
                            Buku
                        </a>
                        <?php
                    } else {
                        ?>
                        <a class="nav-link" href="?page=peminjaman">
                            <i class="fas fa-book-open"></i>Peminjaman
                        </a>
                        <?php
                    }
                    ?>
                    <a class="nav-link" href="?page=ulasan">
                        <i class="fas fa-comment"></i>Ulasan
                    </a>
                    <?php
                    if ($_SESSION['user']['level'] != 'peminjam') {
                        ?>
                        <a class="nav-link" href="?page=laporan">
                            <i class="fas fa-book"></i>
                            Laporan
                        </a>
                        <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                    </li>
                </ul>
                <div class="navbar-item text-dark">
                    Logged as : <i class="fa fa-user" aria-hidden="true"></i>

                    <?php echo $_SESSION['user']['nama']; ?>
                </div>
            </div>
        </div>
    </header>

  
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                if (file_exists($page . '.php')) {
                    include $page . '.php';
                } else {
                    include '404.php';
                }
                ?>
            </div>
        </main>
        <footer id="footer" class="py-4 bg-primary">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-white">Copyright &copy; Perpustakaan Digital 2024</div>
                    <div>
                        <a href="#" class="text-white">Privacy Policy</a>
                        &middot;
                        <a href="#" class="text-white">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
            crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>