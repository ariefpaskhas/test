<?php


for ($i=1; $i <= 10; $i++) { 
	//looping sebanyak i=1 hingga i<=10
	//artinya looping sebanyak 10 kali

if ($i == 5) {
	//ketika looping menemui angka 5 maka cetak angka lima

echo "Nilainya adalah ".$i;
echo "<br>";
}else {
	//kondisi ini tidak mencetak angka 5
	//artinya yang dicetak 1-4 dan 6-10

echo "Selain Lima";
echo "<br>";
}
}

?>