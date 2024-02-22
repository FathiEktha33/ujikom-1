<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_POST['Register'])) {
                                            $username= $_POST['username'];
                                            $password= md5($_POST['password']);
                                            $email= ($_POST['email']);
                                            $nama_lengkap= ($_POST['nama_lengkap']);
                                            $alamat= ($_POST['alamat']);
                                            $data= mysqli_query($connect, "SELECT*FROM user where username='$username and password='$password'");
                                            $cek= mysqli_num_rows($data);
                                            if($cek > 0){
                                                $_SESSION['user'] =mysqli_fetch_array($data);
                                                echo '<script>alter("Selamat Datang, Login Berasil"); location.href="login.php"</script>';

                                            }else {
                                               echo '<script>alter("Maaf, Username/Password salah")</script>';
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  type="username" name="username" placeholder="enter username" />
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" type="password" placeholder="enter Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" type="email" placeholder="enter email" />
                                                <label for="inputPassword">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nama_lengkap" type="nama_lengkap" placeholder="nama_lengkap" />
                                                <label for="inputPassword">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="alamat" rows="5" class="form-floating mb-3"></textarea>
                                                <label for="inputPassword">Alamat</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="registerogin">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Perpustakaan Digital 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
