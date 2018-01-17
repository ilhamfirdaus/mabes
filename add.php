
<html>
<head>
	<title>Tambah Barang</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
 
<body>
	 <div class="container"> 
	<a href="index2.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
	

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Merek</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name ="merek" placeholder="Merek">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Baik</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name ="baik" placeholder="Baik">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Rusak</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name ="rusak" placeholder="Rusak">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="jumlah" placeholder="Jumlah">
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
		$merek = $_POST['merek'];
		$baik=$_POST['baik'];
		$rusak=$_POST['rusak'];
		$jumlah = $_POST['jumlah'];
		
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO tbarang(nama,merek,baik,rusak,jumlah) VALUES('$name','$merek','$baik','$rusak','$jumlah')");
		
		echo "Barang berhasil Ditambah. <a href='index2.php'>Lihat</a>";
	}
	?>
</div>
</body>
</html>