<h1 class="mt-4">Selamat Datang</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active ">Di Perpustakaan digital</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
                ?>
                Total Kategori</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=kategori">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                ?>
                Total Buku</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=buku">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
                ?>
                Total Ulasan</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=ulasan">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="cad">
    <div class="card-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row" width="200" class="table-warning">Nama</th>
                    
                    <td class="table-dark text-white fw-bold"><?php echo $_SESSION['user']['nama']; ?></td>
                </tr>
                <tr>
                    <th scope="row" width="200" class="table-warning">Level User</th>
                    <td class="table-dark text-white fw-bold"><?php echo $_SESSION['user']['level']; ?></td>
                </tr>
                <tr>
                    <th scope="row" width="200" class="table-warning">Tanggal Login</th>
                    <td class="table-dark text-white fw-bold"><?php echo date('d-m-y'); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

