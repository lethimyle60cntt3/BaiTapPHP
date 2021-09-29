<table border="1px">
	<tr>
<?php
$m = rand(2,5);
$n = rand(2,5);
$matran = array(array());

echo "Ma trận có kích thước $m x $n <br>";
for($i = 0; $i < $m; $i++)
   {
   		echo "<tr>";
      for($j = 0; $j < $n; $j++)
      {
     
      	$matran[$i][$j] = rand(-100,100);
        echo "<td>" . $matran[$i][$j] ."</td>";
      }
      
      echo "</tr>";
   }

?>
</tr>
</table>