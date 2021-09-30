<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Phép tính trên 2 số</title>
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
$soa1 = 0;
$sob1 =0;
$ketqua1 =0;
    if(isset( $_POST['soa']) && isset($_POST['sob']))
    {
        $tinh1 = $_POST['tinh'];
        $soa1 = $_POST['soa'];
        $sob1 = $_POST['sob'];

        if($tinh1=='Cộng')
        {
             $ketqua1= $soa1 + $sob1;
        }
         else if($tinh1=='Trừ')
        {
             $ketqua1= $soa1 - $sob1;
        }
        else if($tinh1=='Nhân')
        {
            $ketqua1= $soa1 * $sob1; 
        }
        else if($tinh1 =='Chia'){
             $ketqua1= $soa1 / $sob1;
        }
    }

?>
          
     
        
        <div class="container" id="container">         
            <div class="form-container sign-in-container">
                <form action="B3.php" method="POST" name="form">
                    <table align="center">
            <thead>
                <th colspan="3" align="center">
                    <h3>Tính Phép Tính Trên Hai Số</h3> <br>                   
                   <tr>
                    <th colspan="3" align="center">
                   <?php 
                   echo 'Phép tính: ' .$tinh1;
                   ?>            
                <br>
                </td>
                    </tr>
                    <tr>
                        <td>
                            Số thứ nhất
                        </td>
                        <td>
                        <input name="soa" type="number" value="<?php echo $soa1 ?>" />
                        </td>
                     
                    </tr>
                    <tr >
                        <td>
                            Số thứ hai
                        </td>
                        <td>
                        <input name="sob" type="number"value="<?php echo $sob1 ?>" />
                        </td>
                       
                    </tr>
                    <tr >
                        <td>
                            Kết quả
                        </td>
                        <td>
                        <input name="kq" type="number"value="<?php echo $ketqua1 ?>" />
                        </td>
                        <tr>
                            <td colspan="3" align="center">
                        <a href="javascript:window.history.back(-1);">Trở về trang trước
                        </a>
                   </tr>
                    </tr>
        
                   
                    

                </form>
           
            </div>
        </div>
    </body>
</html>