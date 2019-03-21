<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="array_foreach_select.php" method="post">

	<?php 
	 $variable_bulan=array("januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desaember");
	 ?>
<select>
	<?php foreach ($variable_bulan as $bulan) { ?>
		<option value="<?php echo $bulan; ?>"><?php echo $bulan; ?> </option>
	<?php } ?>
</select>


<select>
	<?php foreach ($variable_bulan as $bulan) { 

		echo "<option value='$bulan'> $bulan </option>";
	
	} ?>
</select>

<select name=thn> 
<?php for ($thn=1980; $thn <=date("Y"); $thn++){?>
<option value="<?php echo $thn; ?>"><?php echo $thn; ?> </option> 
<?php } ?> 
</select>

<select name=tgl> 
<?php for ($tgl=1; $tgl <=31; $tgl++) {?>
<option value="<?php echo $tgl; ?>"><?php echo $tgl; ?> </option> 
<?php } ?> 
</select>

<input type="submit" name="submit" value="submit" >

</form>

<?php 

if(!empty($_POST['submit'])){

$thn = $_POST['thn'];
$tgl = $_POST['tgl'];

echo $thn;
echo "<br>";
echo $tgl;

}
?>

</body>
</html>