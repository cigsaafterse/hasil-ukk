<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login ke Perpustakaan Digital</title>
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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center font-weight-bold mb-0">Login dulu ya</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['login'])) {
                            $username = $_POST['username'];
                            $password = md5($_POST['password']);

                            $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
                            $cek = mysqli_num_rows($data);
                            if ($cek > 0) {
                                $_SESSION['user'] = mysqli_fetch_array($data);
                                echo '<script>alert("Selamat datang, Login Berhasil"); location.href="index.php";</script>';
                            } else {
                                echo '<div class="alert alert-danger" role="alert">Maaf, Username/Password salah</div>';
                            }
                        }
                        ?>
                        <form method="post">
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Username</label>
                                <input type="text" class="form-control" id="inputEmail" name="username" placeholder="Enter Username" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
                            <a href="register.php" class="btn btn-danger mt-2">Register</a>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p class="footer-text">&copy; 2024 Perpustakaan Digital</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
