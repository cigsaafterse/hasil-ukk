<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register ke Perpustakaan Digital</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
            padding: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            width: 100%;
        }

        .btn-danger:hover {
            background-color: 	#8B0000;
        }

        .card-footer {
            background-color: transparent;
            border-top: none;
            border-radius: 0 0 10px 10px;
            padding: 20px;
        }

        .footer-text {
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center font-weight-bold mb-0 text-white">Register dulu ya</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['register'])) {
                            $nama = $_POST['nama'];
                            $email = $_POST['email'];
                            $alamat = $_POST['alamat'];
                            $no_telepon = $_POST['no_telepon'];
                            $username = $_POST['username'];
                            $level = $_POST['level'];
                            $password = md5($_POST['password']);

                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                            if ($insert) {
                                echo '<script>alert("Selamat datang, Register Berhasil"); location.href="login.php";</script>';
                            } else {
                                echo '<script>alert("Register gagal, silahkan ulangi lagi");</script>';
                            }
                        }
                        ?>
                        <form method="post">
                            <div class="mb-3">
                                <label for="inputNama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukan Nama Lengkap" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Masukan Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputNoTelepon" class="form-label">No. Telepon</label>
                                <input type="text" class="form-control" id="inputNoTelepon" name="no_telepon" placeholder="Masukan No. Telepon"required>
                            </div>
                            <div class="mb-3">
                                <label for="inputAlamat" class="form-label">Alamat</label>
                                <textarea name="alamat" rows="5" class="form-control" id="inputAlamat" placeholder="Masukan Alamat"required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Masukan Username"required>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter Password"required>
                            </div>
                            <div class="mb-3">
                                <label for="inputLevel" class="form-label">Level</label>
                                <select name="level" class="form-select" id="inputLevel">
                                    <option value="peminjam">Peminjam</option>
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger" name="register" value="register">Register</button>
                            <a href="login.php" class="btn btn-primary mt-2">Login</a>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3 text-white">
                        <p class="footer-text">&copy; 2024 Perpustakaan Digital</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
