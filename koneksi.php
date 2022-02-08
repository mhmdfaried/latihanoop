<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "latihanoop";
	var $koneksi = "";
    public function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	public function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from cs");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    function tambah_data($nama,$ttl,$tl,$wn,$almt,$email,$nohp,$askl,$na,$ni,$pkot)
	{
		mysqli_query($this->koneksi,"insert into cs values ('','$nama','$ttl','$tl','$wn','$almt','$email','$nohp','$askl','$na','$ni','$pkot')");
	}

    function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from cs where id='$id'");
		return $query->fetch_array();
	}

    function update_data($id,$nama,$ttl,$tl,$wn,$almt,$email,$nohp,$askl,$na,$ni,$pkot)
	{
		$query = mysqli_query($this->koneksi,"update cs set nama='$nama' , ttl='$ttl' , tl='$tl' , wn='$wn' , almt='$almt' , almt='$almt' , email='$email' , nohp='$nohp' , askl='$askl' , na='$na' , ni='$ni' , pkot='$pkot'   where id ='$id'");
	}

    function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from cs where id='$id'");
	}


}
?>