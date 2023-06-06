<?php
//Koneksi database
$koneksi = mysqli_connect("localhost","root","","perkuliahan19");
//Pertama ambil data kiriman dari form
$nim = @$_POST['tnim'];
$kodemk = @$_POST['tkodemk'];
$sem = @$_POST['tsem'];
$ntugas = @$_POST['tntugas'];
$nmid = @$_POST['tnmid'];
$nsem = @$_POST['tnsem'];
// jalankan query Update untuk Mengupdate/mengedit data Nilai sesuai NIM, KodeMK dan sem
$query = "Update nilai set ntugas='$ntugas',7uuu6 nmid='$nmid', nsem='$nsem' where
nim='$nim' and kodemk='$kodemk' and sem='$sem'";
 $hasil = mysqli_query($koneksi, $query);
if($hasil) {
echo "Data berhasil di Update";
} else {
echo "Data gagal di Update";
}
?>
<meta http-equiv="Refresh" content="0;url=TampilEditNilai.php"/>