<?php
include_once("config.php");
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nama=$_POST['nama'];
	$merek=$_POST['merek'];
	$baik=$_POST['baik'];
	$rusak=$_POST['rusak'];
	$jumlah=$_POST['jumlah'];

	$result = mysqli_query($mysqli, "UPDATE tbarang SET nama='$nama',merek='$merek',baik='$baik',rusak='$rusak',jumlah='$jumlah' WHERE id=$id");
	

	header("Location: index2.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM tbarang WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$merek = $user_data['merek'];
	$baik= $user_data['baik'];
	$rusak= $user_data['rusak'];
	$jumlah= $user_data['jumlah'];
	
}
?>
<html>
<head>	
	<title>Edit User Data</title>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
 
<body>
	<div class="container">
	<a href="index2.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nama" value=<?php echo $nama;?>>
    </div>
  </div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Merek</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="merek" value=<?php echo $merek;?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Baik</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="baik" value=<?php echo $baik;?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Rusak</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="rusak" value=<?php echo $rusak;?>>
    </div>
  </div>
			
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="jumlah" value=<?php echo $jumlah;?>>
    </div>
  </div>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>