<?php
//Koneksi database
$koneksi = mysqli_connect("localhost","root","","perkuliahan19");
//Pertama ambil data kiriman dari form
$nim = @$_POST['tnim'];
$nama = @$_POST['tnama'];
$alamat = @$_POST['talamat'];
$sem = @$_POST['tsem'];
$kelas = @$_POST['tkelas'];
// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan
 $query = "INSERT INTO Mahasiswa (nim, nama, alamat, sem, kelas) VALUES ('$nim', '$nama', '$alamat',
'$sem', '$kelas')";
 $hasil = mysqli_query($koneksi, $query);
if($hasil) {
echo "Data berhasil disimpan";
} else {
echo "Data gagal disimpan";
}
?>
<meta http-equiv="Refresh" content="0;url=TampilMhs.php"/>