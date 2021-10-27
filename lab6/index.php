
<?php 
	include ('include/header.php');
	require("connection/connect_qlnv.php");
	$rowPerPage=4;
    if(!isset($_GET['page'])){
        $_GET['page']=1;
    }
    $offset=($_GET['page']-1)*$rowPerPage;

	$strSQL = 'SELECT * 
	FROM nhan_vien JOIN phong_ban JOIN loai_nv
	ON nhan_vien.ma_phong = phong_ban.ma_phong AND nhan_vien.ma_loai_nv = loai_nv.ma_loai_nv
	LIMIT '.$offset.','.$rowPerPage;

	$result = mysqli_query($dbc,$strSQL);
	if(mysqli_num_rows($result) == 0){
		echo "Chưa có dữ liệu";
	}
	else
	{	echo "<h1>NHÂN VIÊN</h1>
		<table align=center>
			<thead>
				<td><b>Mã nhân viên</b></td>
				<td><b>Họ tên nhân viên</b></td>
				<td><b>Ngày sinh</b></td>
				<td><b>Giới tính</b></td>
				<td><b>Địa chỉ</b></td>
				<td><b>Loại nhân viên</b></td>
				<td><b>Phòng ban</b></td>
				<td><b>Chức năng</b></td>
			</thead>";
		$stt=1;

		while ($row = mysqli_fetch_array($result))
		{
			if ($row[4] == 1)	$row[4] = "Nam";
			else 				$row[4] = "Nữ";
			if($stt%2!=0){
				echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1] $row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td>$row[4]</td>";
				echo "<td>$row[5]</td>";
				echo "<td>$row[7]</td>";
				echo "<td>$row[8]</td>";
				echo "<td>
                <a class='edit-btn' href='detailsNV.php?ma=".$row[0]."'><i class='far fa-list-alt text-success'></i></a>
                <a class='edit-btn' href='editNV.php?ma=".$row[0]."'><i class='far fa-edit text-primary'></i></a>
                <a class='edit-btn' href='deleteNV.php?ma=".$row[0]."'><i class='far fa-trash-alt text-danger'></i></a>
                </td>";
				echo "</tr>";
			}
			else{
				echo "<tr id=mau>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1] $row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td>$row[4]</td>";
				echo "<td>$row[5]</td>";
				echo "<td>$row[7]</td>";
				echo "<td>$row[8]</td>";
				echo "<td>
                <a class='edit-btn' href='detailsNV.php?ma=".$row[0]."'><i class='far fa-list-alt text-success'></i></a>
                <a class='edit-btn' href='editNV.php?ma=".$row[0]."'><i class='far fa-edit text-primary'></i></a>
                <a class='edit-btn' href='deleteNV.php?ma=".$row[0]."'><i class='far fa-trash-alt text-danger'></i></a>
                </td>";
				echo "</tr>";
			}
			$stt+=1;
		}
		echo '</table>';



		//tổng số mẩu tin cần hiển thị
		$re = mysqli_query($dbc, 'select * from nhan_vien');// này nhân viên đúng k?
$numRow = mysqli_num_rows($re);
//tổng số trang

$maxPage = floor($numRow/$rowPerPage)+1;
if ($_GET['page'] >= 1)
{ echo "<p align='center'><a  href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']=1).">
<<
</a> ";
}
if ($_GET['page'] > 1)
{ echo "<p align='center'><a  href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1).">
<
</a> ";
}

for ($i=1 ; $i<=$maxPage ; $i++)
{ if ($i == $_GET['page'])
{ echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
}
else
echo "<a href=" .$_SERVER['PHP_SELF']. "?page="
.$i.">".$i."</a> ";
}
if ($_GET['page'] < $maxPage)
{ echo "<a href = ". $_SERVER['PHP_SELF']."?page=".($_GET['page']+1).">

</a>";
}
if ($_GET['page'] < $maxPage)
{ echo "<a href = ". $_SERVER['PHP_SELF']."?page=".($maxPage).">
>>
</a>";
}
}
//Dong ket noi
mysqli_close($dbc);
?>
</body>
</html>
	
	


