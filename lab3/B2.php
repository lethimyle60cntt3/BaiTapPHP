<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thanh toán tiền điện</title>
	<style type="text/css">
		 body {  
            background-color: #00FFFF;
        }
        table{
            background: #ffd94d;

            border: 0 solid yellow;
        }
        thead{
            background: #fff14d;    
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
	<?php 
		if(isset($_POST['ten']))
			$ten = $_POST['ten'];
		else $ten = "";

		if(isset($_POST['cs_cu']))
			$cs_cu = trim($_POST['cs_cu']);
		else $cs_cu = 0;

		if(isset($_POST['cs_moi']))
			$cs_moi = trim($_POST['cs_moi']);
		else $cs_moi = 0;

		// if(isset($_POST['don_gia']))
		// 	$don_gia = trim($_POST['don_gia']);
		// else $don_gia = 20000;
		define('don_gia', 20000);

		if(isset($_POST['tinh']))
			if(is_numeric($cs_cu) && is_numeric($cs_moi) && $ten != ""){
				$thanh_toan = ($cs_moi - $cs_cu)*don_gia;
			}
			else $thanh_toan = "Các trường nhập chưa đúng !";
		else $thanh_toan = 0;
	 ?>
	 
	<form action="B2.php" name="myform" method="post">
		
		<table align="center">
			<thead>
				<th colspan="3" align="center">
					<h3>THANH TOÁN TIỀN ĐIỆN</h3>
				</th>
			</thead>

			<tr>
				<td>Tên chủ hộ: </td>
				<td><input type="text" name="ten" size="25" value="<?php echo($ten) ?>"></td>
				<td></td>
			</tr>
			<tr>
				<td>Chỉ số cũ: </td>
				<td><input type="text" name="cs_cu" size="25" value="<?php echo($cs_cu) ?>"></td>
				<td>(Kw)</td>
			</tr>
			<tr>
				<td>Chỉ số mới: </td>
				<td><input type="text" name="cs_moi" size="25" value="<?php echo($cs_moi) ?>"></td>
				<td>(Kw)</td>
			</tr>
			<tr>
				<td>Đơn giá: </td>
				<td><input type="text" name="don_gia" size="25" value="<?php echo(don_gia) ?>"></td>
				<td>(VNĐ)</td>
			</tr>
			<tr>
				<td>Số tiền thanh toán: </td>
				<td><input type="text" name="thanh_toan" size="25" disabled="disabled" value="<?php echo($thanh_toan) ?>"></td>
				<td>(VNĐ)</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" value="Tính" name="tinh"></td>
			</tr>
		</table>
	</form>
</body>
</html>