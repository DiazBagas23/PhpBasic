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
// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan
 $query = "INSERT INTO nilai (nim, kodemk, sem, ntugas, nmid, nsem) VALUES ('$nim', '$kodemk','$sem','$ntugas', '$nmid', '$nsem')" or die("Masih terdapat kesalahan");
 $hasil = mysqli_query($koneksi, $query);
 if($hasil) {
    echo "Data berhasil disimpan";
    } else {
    echo "Data gagal disimpan";
    }
    ?>