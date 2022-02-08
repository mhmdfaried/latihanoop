<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];

if(! is_null($id)){
	$data_calon = $db->get_by_id($id);
}else{
	header('location:tampildata.php');
}
?>
<html>

<head>
    <title>EDIT DATA SISWA</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
<link href="styles.css" rel="stylesheet" />

<body>
<div class="container col-md-6 mt-4">
        <!-- <h1>Edit Data Siswa</h1> -->
        <div class="card">
            <div class="card-header bg-dark text-white ">

            </div>
            <div class="card-body">
<h3>Update Data Calon Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_calon['id']; ?>"/>
<table>
<tr>
		<td>Nama Siswa</td>
		<td>:</td>
        <td><input type="text" name="nama" value="<?php echo $data_calon['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Kota Kelahiran</td>
		<td>:</td>
		<td><input type="text" name="ttl" value="<?php echo $data_calon['ttl']; ?>"/></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tl" value="<?php echo $data_calon['tl']; ?>"/></td>
	</tr>
	<tr>
		<td>Warga Negara</td>
		<td>:</td>
		<td><input type="text" name="wn" value="<?php echo $data_calon['wn']; ?>"/></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="almt" value="<?php echo $data_calon['almt']; ?>"/></td>
	</tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?php echo $data_calon['email']; ?>"/></td>
	</tr>
    <tr>
		<td>Nomor HP</td>
		<td>:</td>
		<td><input type="text" name="nohp" value="<?php echo $data_calon['nohp']; ?>"/></td>
	</tr>
    <tr>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td><input type="text" name="askl" value="<?php echo $data_calon['askl']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><input type="text" name="na" value="<?php echo $data_calon['na']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><input type="text" name="ni" value="<?php echo $data_calon['ni']; ?>"/></td>
	</tr>
    <tr>
		<td>Penghasilan Orang Tua</td>
		<td>:</td>
		<td><input type="text" name="pkot" value="<?php echo $data_calon['pkot']; ?>"/></td>
	</tr>
	<tr>
        <td><a href="tampildata.php" class="btn btn-sm btn-primary">Batalkan</a>
	    <input type="submit" name="tombol" class="btn btn-sm btn-primary" value="Update"/></td>
		
	</tr>
</table>
</form>
</body>
</html>