<Table Border=1 width=80%>
<Tr>
<Td Colspan=13 align=center>Daftar Data Nilai Mahasiswa STMIK Pelita Nusantara </td>
</Tr>
<Tr>
<Td>No</td>
<Td>NIM</td>
<Td>Nama Mahasiswa</td>
<Td>Alamat</td>
<Td>Kelas</td>
<Td>Kode MK</td>
<Td>Nama Matakuliah</td>
<Td>Dosem</td>
<Td>Sem</td>
<Td>Nilai<br>Tugas</td>
<Td>Nilai<br>Mid</td>
<Td>Nilai<br>Sem</td>
<td>Aksi</td>
</Tr>
<?Php
//Koneksi database
$koneksi = mysqli_connect("localhost","root","","perkuliahan19");
// jalankan query Select untuk mengambil data dari database dan tabel
 $query = "Select nilai.nim,mahasiswa.nama,mahasiswa.alamat,mahasiswa.kelas,nilai.kodemk,matakuliah.namamk,matakuliah.dosen,nilai.sem, nilai.ntugas,nilai.nmid,nilai.nsem From Nilai,mahasiswa,matakuliah where nilai.nim=mahasiswa.nim and nilai.kodemk=matakuliah.kodemk";
 $hasil = mysqli_query($koneksi, $query);
$no=0;
while($data=Mysqli_fetch_array($hasil))
{ $no++;
    if($no%2==0)
$warna="F0E68C";
else
$warna="7FFF00";
?>
<Tr Bgcolor="<?php echo $warna ?>">
<Td><?php Echo $no ?>
<Td><?php Echo $data[0] ?>
<Td><?php Echo $data[1] ?>
<Td><?php Echo $data[2] ?>
<Td><?php Echo $data[3] ?>
<Td><?php Echo $data[4] ?>
<Td><?php Echo $data[5] ?>
<Td><?php Echo $data[6] ?>
<Td><?php Echo $data[7] ?>
<Td><?php Echo $data[8] ?>
<Td><?php Echo $data[9] ?>
<Td><?php Echo $data[10] ?>
<Td><a href="EditNilai.php?nim=<?php echo $data[0]?>&kodemk=<?php
echo $data[4]?>&sem=<?php echo $data[7]?>&ntugas=<?php echo $data[8]?>&nmid=<?php
echo $data[9]?>&nsem=<?php echo $data[10]?>"> Edit </a>|<a href="HapusNilai.php">
Hapus </a></Td>
</Tr>
<?php
}
?>
</Table>
