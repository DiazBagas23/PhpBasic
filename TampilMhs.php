<table Border=1 width=80%>
<tr>
<td Colspan=6> Daftar Mahasiswa STMIK Pelita Nusantara </td>
</tr> 
<tr>
<td>No</td>
<td>NIM</td>
<td>Nama Mahasiswa</Td>
<td> Alamat</td>
<td>Semester</td>
<td> Kelas</td>
</tr>
<?php
$koneksi = mysqli_connect("localhost", "root","","perkuliahan19");
$query = "SELECT * From mahasiswa";
$hasil = mysqli_query($koneksi,$query);
    $no=0;
    while($data=mysqli_fetch_array($hasil))
    { $no++;
        if($no%2==0)
        $warna="F0e68c";
        else 
        $warna="7FFF00";
?>
<Tr Bgcolor="<?php echo $warna?>">
<td><?php echo $no?></td>
<td><?php echo $data[0]?></td>
<td><?php echo $data[1]?></td>
<td><?php echo $data[2]?></td>
<td><?php echo $data[3]?></td>
<td><?php echo $data[4]?></td>
</Tr>

<?php
    }
    ?>
</table>
Klik <a href="inputMhs.php">Kembali</a>Menuju Fie Input data Mahasiswa