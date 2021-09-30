<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Phép tính 2 số</title>
    <style type="text/css">
         body {  
            background-color: #00FFFF;
        }
      
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
  <form action="bai4_1.php" method="get">
  <h4>Bạn đã đăng nhập thành công, dưới đây là thông tin bạn nhập:</h4>
    <?php 
      $hoTen = $_REQUEST['hoTen'];
      $diaChi = $_REQUEST['diaChi'];
      $sdt = $_REQUEST['sdt'];
      $radGT = $_REQUEST['radGT'];
      $qt = $_REQUEST['qt'];
      $ghichu = $_REQUEST['ghichu'];
      echo "Họ và tên:".$hoTen. "<br>";
      echo "Địa chỉ: $diaChi". "<br>";
      echo "Giới tính: $radGT". "<br>";
      echo "Số điện thoại: $sdt". "<br>";
      echo "Quốc tịch: $qt". "<br>";
      echo "Môn học: ";
        if (isset($_POST['chkb'])) 
    {
        echo implode(', ', $_POST['chkb']);
    }
     
      echo "<br>Ghi chú: $ghichu". "<br>";
    ?>
  <a href="javascript:window.history.back(-1);">Trở về trang trước</a>

</body>
</html>