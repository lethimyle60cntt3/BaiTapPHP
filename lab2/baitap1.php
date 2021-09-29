<?php 
	function isPrimeNumber($n) {//ham tim so nguyen to
    // so nguyen n < 2 khong phai la so nguyen to
		if ($n < 2) {
			return false;
		}
    // check so nguyen to khi n >= 2
		$squareRoot = sqrt ( $n );
		for($i = 2; $i <= $squareRoot; $i ++)  
		{
			if ($n % $i == 0) {
				return false;
			}
		}
		return true;
	}
$so = rand(10,1000); // tạo 1 số tự nhiên ngầu nhiên trong khoảng [10,1000]
	// cau a
echo "số ngyên tố được tạo là: $so <br>";
echo "câu a".("<br>Các số nguyên tố nhỏ hơn $so được tạo là: <br>");
for($i = 0; $i < $so; $i ++) {
	if (isPrimeNumber ( $i )) {
		echo ($i . " ");
	}
}

// Cau b
$length = strlen($so);
echo "<br>câu b"."<br>số nguyên $so có $length chữ số.";

// cau c
function numberMax($so){
	if ($so == 0) return 0;
	/*Lay tri tuyet do cua so nguyen n*/
	$so = abs($so);
	$max = 0;
	while ($so > 0) {
		$temp = $so % 10;
		$so /= 10;
		if ($temp > $max)
			$max = $temp;
	}
	return $max;
}
echo "<br>câu c"."<br>Chữ số lớn nhất trong số ngyên này là: ". numberMax($so);



?>