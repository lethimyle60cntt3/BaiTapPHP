<?php
// cho giá trị ngẫu nhiên của a vs b
    $a = rand(1, 5);
    $b = rand(10, 100);
    echo "a = $a và b = $b";

    switch($a){
        case 1:

            $P = $b * 4;
            $S = $b * $b;
            echo "<br>Nếu số a là 1: ";
            echo "<br>Chu vi của hình vuông có cạnh là $b = " . $P;
            echo "<br>Diện tích của hình vuông có cạnh là $b = " . $S;
            break;
        case 2:
            $C = $b * 2 * 3.14;
            $S = pow($b, 2) * 3.14;
            echo "<br>Nếu số b là 2: ";
            echo "<br>Chu vi của hình tròn có bán kính là $b = " . $C;
            echo "<br>Diện tích của hình tròn có bán kính là $b = " . $S;
            break;
         case 3:
            $P = $b * 3;
            $S = pow($b, 2) * sqrt(3) / 4;
            echo "<br>Nếu số của b là 3: ";
            echo "<br>Chu vi của hình tam giác đều có cạnh là $b = " . $P;
            echo "<br>Diện tích của hình tam giác đều có cạnh là $b = " . $S;
            break;
        case 4:
            $P = ($a + $b) * 2;
            $S = $a * $b;
            echo "<br>Nếu số của b là 4: ";
            echo "<br>Chu vi của hình tam giác đều có cạnh là $b = " . $P;
            echo "<br>Diện tích của hình tam giác đều có cạnh là $b = " . $S;
            break;
        default:
            echo "<br>Trường hợp này cô không có kêu làm";
    }

?>