<html>
<head>
 <title>Nilai</title>
</head>
<body>
 <form action="SimpanEditNilai.php" method="POST">
 <fieldset>
 <legend>Pengisian Data Nilai Mahasiswa STMIK Pelita Nusantara</legend>
 <Table border=0>
<tr>
<td>NIM</td>
<td><input type="text" name="tnim" value="<?php echo $_GET['nim']
?>" readonly="" /></td>
</tr>
<tr>
<td>Kode Matakuliah</td>
<td><input type="text" name="tkodemk" value="<?php echo
$_GET['kodemk'] ?>" readonly="" /></td>
</tr>
<tr>
<td>Semester</td>
<td><input type="text" name="tsem" value="<?php echo $_GET['sem']
?>" readonly="" /></td>
</tr>
<tr>
<td>Nilai Tugas</td>
<td><input type="text" name="tntugas" value="<?php echo
$_GET['ntugas'] ?>" /></td>
</tr>
<tr></tr>
<td>Nilai Mid Semester</td>
<td><input type="text" name="tnmid" value="<?php echo
$_GET['nmid'] ?>" /></td>
</tr>
<tr>
<td>Nilai Semester</td>
<td><input type="text" name="tnsem" value="<?php echo
$_GET['nsem'] ?>" /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Update" /></td>
<tr>
</table>
 </fieldset>
 </form>
</body>
</html>