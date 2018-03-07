<?php 
$volume=0;
if (isset($_POST['submit'])) {
	$alaseg = $_POST['alaseg'];
	$tinggiseg = $_POST['tinggiseg'];
	$tinggipri = $_POST['tinggipri'];

	function volume($alaseg, $tinggiseg, $tinggipri){
		$volume = (0.5  * $alaseg * $tinggiseg ) * $tinggipri;
		return $volume;
	}

	$volume = volume ($alaseg,$tinggiseg,$tinggipri);
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Menghitung Volume Prisma segitiga</title>
 </head>
 <body>
 
 <h1>Volume Prisma segitiga</h1>

 <form action="" method="post">
 <label for="alaseg">Alas: </label><br>
 <input type="text" name="alaseg" id="alaseg"><br>

 <label for="tinggiseg">Tinggi segitiga: </label><br>
 <input type="text" name="tinggiseg" id="tinggiseg"><br>

 <label for="tinggipri">Tinggi prisma: </label><br>
 <input type="text" name="tinggipri" id="tinggipri">

 <input type="submit" name="submit" value="Hasil"><br>

 <label for="volume">Volume: </label><br>
 <input type="text" name="volume" value="<?php echo $volume;?>" id="volume">

</form>
 </body>
 </html>