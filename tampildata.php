<?php 	
include('koneksi.php');
$db = new database();
$data_calon = $db->tampil_data();
?>
<!DOCTYPE html>
<html>

<head>
    <title>DATA SISWA</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
<link href="styles.css" rel="stylesheet" />
<body>
    <!-- <br>
<button><a href="tambahdata.php" style= "text-decoration:none">Tambah Data</a></button> -->
<br>
<div class="container col-md-14 mt-4">
        <h1>DATA SISWA</h1>
                <a href="tambahdata.php" class="btn btn-sm btn-primary float-left">Tambahkan</a><br><br>
            <table class="table table-bordered table-dark">
        <tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tempat</th>
			<th>Tanggal Lahir</th>
			<th>Warga Negara</th>
			<th>Alamat</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Asal Sekolah</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Penghasilan Orang Tua</th>
            <th>Action</th>
		</tr>
		    <?php 
            
		    $no = 1;
		    foreach($data_calon as $u){
			?>
			<tr>
                <td><?= $no++; ?></td>
                <td><?= $u['nama'] ?></td>
                <td><?= $u['ttl'] ?></td>
                <td><?= $u['tl'] ?></td>
                <td><?= $u['wn'] ?></td>
                <td><?= $u['almt'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['nohp'] ?></td>
                <td><?= $u['askl'] ?></td>
                <td><?= $u['na'] ?></td>
                <td><?= $u['ni'] ?></td>
                <td> Rp. <?= $u['pkot'] ?> /bulan </td>
				<td>
					<a href ="edit.php?id=<?php echo $u['id']; ?>" class="btn btn-sm btn-primary" style= "text-decoration:none" >Update</a>
                    <a href="proses.php?action=delete&id=<?php echo $u['id']; ?>"onclick="return confirm ('yakin ?')" class="btn btn-sm btn-danger"style= "text-decoration:none;" >Delete</a>
				</td>
			</tr>

			<?php 
		}
		?>
        
	</table>
    
</body>
</html>