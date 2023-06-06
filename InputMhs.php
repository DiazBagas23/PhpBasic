<html>
<head>
 <title>Pendaftaran</title>
</head>
<body>
 <form action="SimpanMhs.php" method="POST">
 <fieldset>
 <legend>Pengisian Data Mahasiswa STMIK Pelita Nusantara</legend>
 <Table border=0>
<tr>
<td> NIM</td>
<td><input type="text" name="tnim" placeholder="NIM Anda..." /></td>
</tr>
<tr>
<td>Nama Mahasiswa</td>
<td><input type="text" name="tnama" placeholder="Nama Anda..." /></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="talamat" placeholder="alamat Anda..." /></td>
</tr>
<tr>
<td>Semester</td>
<td><select name="tsem">
<option value="I">I</option>
<option value="I">II</option>
<option value="I">III</option>
<option value="I">IV</option>
<option value="I">V</option>
<option value="I">VI</option>
<option value="I">VII</option>
<option value="I">VIII</option>
</select>
<td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="tkelas" placeholder="Kelas Anda..." /></td>
</td>
<tr>
<td><input type="submit" name="submit" value="Simpan" /></td>
<tr>
</table>
 </fieldset>
 </form>
</body>
</html>