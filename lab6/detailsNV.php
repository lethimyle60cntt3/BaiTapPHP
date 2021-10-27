<?php 
    include('include/header.php');
    include("connection/connect_qlnv.php");
    $ma= $_REQUEST['ma'];
    $query="SELECT * 
    FROM nhan_vien JOIN phong_ban JOIN loai_nv
    ON nhan_vien.ma_phong = phong_ban.ma_phong AND nhan_vien.ma_loai_nv = loai_nv.ma_loai_nv
    WHERE ma_nv = '$ma'";
    $result=mysqli_query($dbc,$query);      
        if(mysqli_num_rows($result)<>0)
        {   $rows=mysqli_num_rows($result);
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
            {if ($row['gioi_tinh'] == 1)    $row['gioi_tinh'] = "Nam";
                else                $row['gioi_tinh'] = "Nữ";
                echo '<form method="post" enctype="multipart/form-data">
                <h2>THÔNG TIN CHI TIẾT</h2><hr>
                    <div class="row">
                        <div class="col-lg-6 "><img style="width:60%; hight:50%; float:right; border-radius:50%" src="image/'.$row['anh'].'" /></div>
                        <div class="col-lg-6 ">
                            <label>Mã NV:'.$row['ma_nv'].'</label><br>
                            <label>Họ tên:'.$row['ho'].' '.$row['ten'].'</label><br>
                            <label>Giới tính: '.$row['gioi_tinh'].'</label><br>
                            <label>Ngày sinh: '.$row['ngay_sinh'].'</label><br>
                            <label>Địa chỉ: '.$row['dia_chi'].'</label><br>
                            <label>Loại: '.$row['ten_loai_nv'].'</label><br>
                            <label>Phòng ban: '.$row['ten_phong'].'</label><br>
                        </div>
                    </div>
                 <center>
                 <a class="btn btn-warning" href="editNV.php?ma='.$ma.'">Sửa</a>
                 <a class="btn btn-success" href="index.php">Quay lại</a>
                 </center></form>';
            }
        }
    mysqli_close($dbc);
    include('include/footer.html');
 ?>

