
<html>
<head>
	<title>tambah barang</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
 
<body>
	 <div class="container"> 
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add1.php" method="post" name="form1">
	

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Versi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name ="versi" placeholder="versi">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="jumlah" placeholder="Jumlah">
    </div>
  </div>
     <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Dari</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="dari" placeholder="Dari">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Sampai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="sampai" placeholder="Sampai">
    </div>
  </div>
			<div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Tambah Bro</button>
    </div>
  </div>
			
	</form>
	
	<?php

	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$merek = $_POST['versi'];
		$jumlah = $_POST['jumlah'];
		$dari = $_POST['dari'];
    $sampai = $_POST['sampai'];
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO tbarang1(nama,versi,jumlah,dari,sampai) VALUES('$name','$merek','$jumlah','$dari','$sampai')");
		
		echo "Barang berhasil dutambah. <a href='index1.php'>Lihat</a>";
	}
	?>
</div>
</body>
</html>