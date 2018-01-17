<?php
include_once("config.php");
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nama=$_POST['nama'];
	$merek=$_POST['versi'];
	$jumlah=$_POST['jumlah'];
	$dari=$_POST['dari'];
	$sampai=$_POST['sampai'];

	$result = mysqli_query($mysqli, "UPDATE tbarang1 SET nama='$nama',versi='$merek',jumlah='$jumlah',dari='$dari',sampai='$sampai' WHERE id=$id");
	

	header("Location: index1.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM tbarang1 WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$merek = $user_data['versi'];
	$jumlah= $user_data['jumlah'];
	$dari=$user_data['dari'];
	$sampai=$user_data['sampai'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
 
<body>
	<div class="container">
	<a href="index1.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit1.php">
		<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nama" value=<?php echo $nama;?>>
    </div>
  </div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Versi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="versi" value=<?php echo $merek;?>>
    </div>
  </div>
			
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="jumlah" value=<?php echo $jumlah;?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Dari</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="dari" value=<?php echo $dari;?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Sampai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="sampai" value=<?php echo $sampai;?>>
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