<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Phép tính 2 số</title>
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

        if($soa1 ==0)
        {
            echo ' ';
        }        
    }

            ?>
          
     <div class="container" id="container">
       <div class="form-container sign-in-container">
            <form action="B3kq.php" method="POST" name="form">
                   <table align="center">
            <thead>
                <th colspan="3" align="center">
                    <h3>Phép tính trên 2 số</h3>
                </th>
            </thead>                  
                   <tr>
                   <td colspan="2">
                <input type="radio" id="cong" name="tinh" value="Cộng" checked="checked">
                    <label for="add1">Cộng</label> 
                <input type="radio" id="tru" name="tinh" value="Trừ">
                    <label for="sub1">Trừ</label>  
                <input type="radio" id="nhan" name="tinh" value="Nhân">
                    <label for="mul1">Nhân</label> 
                <input type="radio" id="chia" name="tinh" value="Chia">
                    <label for="div1">Chia</label>
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
                        <tr>
                         <td colspan="3" align="center">
                       <button type="submit">Tính
                       </button> 
                   </tr>
                    </tr>                  
                </form>          
            </div>
        </div>
    </body>
</html>