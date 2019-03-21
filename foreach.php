<?php  
             //index 0// index 1// index 2//
$bulan=array('januari','februari','maret');

foreach ($bulan as $index => $value) {
	if ($value =='februari'){
		//cetak bulan 2 maret
		echo "cetak bulan" .$index." " .$value."<input type='text' value='test' name='test'>";
		echo "<br>";
	} else { 
		//bukan bulan maret yaitu bulan januari
		//bukan bulan Mret yaitu bulan februari
		{echo "bukan bulan maret yaitu bulan" .$value;}
	    {echo "<br>";}
	}	    
}	
?>