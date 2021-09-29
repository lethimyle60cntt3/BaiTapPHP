<?php
$fp = @ fopen('soNT.txt', "a+"); // mở file để ghi
	// kiểm tra file có mở thành công không

$n = rand(-100,100);
echo "$n";
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
	if (!$fp) {
	echo "Mở file không thành công";
	}	
	else if (isPrimeNumber($n))
	{
		echo "<br> $n là số ngyên tố";
		$data = $n . "\n";
		fwrite($fp,$data);
		fclose($fp);
	}

	else 
	{
		echo "<br> $n không là số ngyên tố";
	}

	

	
?>