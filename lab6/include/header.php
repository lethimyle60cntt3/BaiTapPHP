<?php
session_start();
    if (!isset($_SESSION['username'])) {
       header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>	
	<link rel="stylesheet" href="include/style.css" type="text/css" media="screen" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<style type="text/css">
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #339999;
  margin-bottom: 30px;
}
li {
  float: left;
}
li a, .dropbtn {
  display: inline-block;
  color: #000077;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
  background-color: #66FFFF;
  text-decoration: none;
}
li.dropdown {
  display: inline-block;
  text-decoration: none;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #C6E2FF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {background-color: #C6E2FF;}
.dropdown:hover .dropdown-content {
  display: block;
}
	</style>
</head>
<body>
<ul>
	<li><a href="index.php">NHÂN VIÊN</a></li>
	<li><a href="phongban.php">PHÒNG BAN</a></li>
	<li><a href="loainhanvien.php">LOẠI NHÂN VIÊN</a></li>
	<li><a href="tracuu_nhanvien.php">Tra cứu nhân viên</a></li>
	<li><a href="tracuu_phongban.php">Tra cứu phòng ban</a></li>
	<li><a href="tracuu_loainhanvien.php">Tra cứu loại nhân viên</a></li>
	<li><a href="them_nhanvien.php">THÊM</a></li>
  <li style="float: right;"><?php 
        if (isset($_SESSION['username']) && $_SESSION['username']!=NULL) {
      ?>
      <p style="float:right">Hi <?php echo $_SESSION['username']; ?>|<a href="logout.php">Đăng xuất</a></p>
    <?php 
        }
      ?></li>
</ul>


