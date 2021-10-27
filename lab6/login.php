<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
    
                            <div class="col-sm-12">
                                <div class="p-5">
                                    <?php
                                    // require("connection/connect_qlnv.php");
                                    // $errors = [];
                                    // if (isset($_POST["btn_submit"])) {
                                    //     // lấy thông tin người dùng
                                    //     $username = $_POST["username"];
                                    //     $password = $_POST["password"];
                                    //     //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                                    //     //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
                                    //     if ($username == "" || $password == "") {
                                    //         array_push($errors, "• Tài khoản hoặc mật khẩu không được để trống!");
                                    //     } else {
                                    //         $qr = "SELECT * FROM user WHERE username = '$username' and password = '$password' ";;
                                    //         // Thực thi câu truy vấn
                                    //         $result = mysqli_query($dbc, $qr);
                                    //         if (mysqli_num_rows($result) != 0) {
                                    //             $_SESSION["user"] = [
                                    //                 "username" => $username
                                    //             ];
                                    //             header('Location: index.php');
                                    //         } else {
                                    //             array_push($errors, "• Tài khoản hoặc mật khẩu không đúng!");
                                    //         }
                                    //     }
                                    // }

                                    ?>
                                    <?php
                                        $mess = "";
                                        require_once ("connection/connect_qlnv.php");
                                        // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
                                        if (isset($_POST["login"])) {
                                            // lấy thông tin người dùng
                                            $username = $_POST["username"];
                                            $password = $_POST["password"];
                                            //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                                            //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
                                            $username = strip_tags($username);
                                            $username = addslashes($username);
                                            $password = strip_tags($password);
                                            $password = addslashes($password);
                                            if ($username != "" && $password !="") {
                                                $sql = "select * from user where username = '$username' and password = '$password' ";
                                                $query = mysqli_query($dbc,$sql);
                                                $num_rows = mysqli_num_rows($query);
                                                if ($num_rows==0) {
                                                    $mess .= "<div class='alert alert-danger' role='alert'>
                                                      username hoặc password chưa đúng!
                                                    </div>";
                                                }else{
                                                    $_SESSION['username'] = $username;
                                                    header('Location: index.php');
                                                }
                                            }
                                        }
                                    ?>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Chào mừng bạn trở lại!</h1>
                                    </div>
                                    <div class="form-group">
                                        <form action="login.php" method="POST">
                                            <?php echo $mess; ?>

                                            <input type="text" placeholder="Nhập tên tài khoản..." name="username" class="form-control" >
                                    </div>
                                    <div class="form-group">

                                        <input type="password" placeholder="Mật khẩu" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Đăng nhập</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>