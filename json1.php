<?php 
//Koneksi database MySQL
$koneksi = mysqli_connect("localhost","root","","mahasiswa") 
    or die("Error ".mysqli_error($koneksi));

//Mengambil data pada table dari database MySQL
$sql = "select * from alfaiz";
$result = mysqli_query($koneksi, $sql) 
    or die("Error in Selecting " . mysqli_error($koneksi));

//Membuat array
$identitas = array();
while($row =mysqli_fetch_assoc($result))
{
  $identitas[] = $row;
}

//Menampilkan konversi data pada tabel identitas ke format JSON
echo json_encode($identitas);

//close the db connection
mysqli_close($koneksi);

?>