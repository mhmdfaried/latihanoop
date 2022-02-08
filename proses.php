<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama'],$_POST['ttl'],$_POST['tl'],$_POST['wn'],$_POST['almt'],$_POST['email'],$_POST['nohp'],$_POST['askl'],$_POST['na'],$_POST['ni'],$_POST['pkot']);
	header('location:tampildata.php');
}elseif($action=="update")
{
	$koneksi->update_data($_POST['id'],$_POST['nama'],$_POST['ttl'],$_POST['tl'],$_POST['wn'],$_POST['almt'],$_POST['email'],$_POST['nohp'],$_POST['askl'],$_POST['na'],$_POST['ni'],$_POST['pkot']);
	header('location:tampildata.php');
}elseif($action=="delete")
{
	$id_calon = $_GET['id'];
	$koneksi->delete_data($id_calon);
	header('location:tampildata.php');
}


?>