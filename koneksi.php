<?php
$koneksi = new mysqli("localhost", "root", "", "daft");

  			if (isset($_POST['submit'])) {
				$koneksi = new mysqli("localhost", "root", "", "daft");

				if ($koneksi) {
					$nim = $_POST['Nim'];
					$nama = $_POST['Nama'];
					$email = $_POST['Email'];
					if(strlen($nim)==10 && ($nama)<25){
					
					$sql = $koneksi->query("
						INSERT INTO `mahasiswa` (`Nim`, `Nama`, `Email`)
						VALUES ('$nim', '$nama', '$email')
										   ");
					echo "REGISTRASI SUKSES<br>";
				
				}
				else{
					echo "REGISTRASI GAGAL";
				}
				}else{
				}
  			}
?>
