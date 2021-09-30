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
    <form action="B4Config.php" method="POST">
        <fieldset style="width:35%; margin:auto;">
            <legend><b>Enter your information</b></legend>
            <table>
                <tr>
                    <td>Họ tên: </td>
                    <td><input type="text" name="hoTen" size="40" maxlength="60" /></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><input type="text" name="diaChi" size="40" maxlength="60" /></td>
                </tr>
                <tr>
                    <td>Số điện thoại: </td>
                    <td><input type="text" name="sdt" size="40" maxlength="60" /></td>
                </tr>
                <tr>
                    <td>Giới tính: </td>
                    <td><input type="radio" name="radGT" value="Nam" /><span>Nam</span>
                        <input type="radio" name="radGT" value="Nữ" /><span>Nữ</span>
                    </td>
                </tr>
                <td>Quốc tịch: </td>
                <td>
                    <select name="qt">
                        <option value="Việt Nam">
                            Việt Nam
                        </option>
                        <option value="Hàn Quốc">
                            Hàn Quốc
                        </option>
                        <option value="Nhật Bản">
                            Nhật Bản
                        </option>
                         <option value="Mỹ">
                            Mỹ
                        </option>
                    </select>
                </td>
                <tr>
                    <td>Các môn đã học: </td>
                    <td>
                        <input type="checkbox" name="chkb[]" value="PHP & MySQL" />PHP & MySQL
                        <input type="checkbox" name="chkb[]" value="C#" />C#
                        <input type="checkbox" name="chkb[]" value="XML" />XML
                        <input type="checkbox" name="chkb[]" value="Python" />Python
                    </td>
                </tr>
                <tr>
                    <td>Ghi chú: </td>
                    <td>
                        <textarea name="ghichu" rows="4" style="height:98%;width:98%;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Gửi" />
                        <input type="reset" name="submit" value="Hủy" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>