
<table border="1px">
    <tr>
        <?php
    $so = rand(1,10); // tạo 1 số ngẫu nhiên từ 1 đến 10
    echo "<br>Số nguyên dương ngẫu nhiên $so";

        echo "<td>";
        for($i = 1; $i <= 10; $i ++) {
            echo "$so x $i = " . ($so * $i);
            echo "<br>";
        }
        echo "</td>";
    
    ?>
</tr>
</table>