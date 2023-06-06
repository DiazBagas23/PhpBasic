<html>
	<head>
		<title>Nilai</title>
	</head>
<body>
	<form action="SimpanNilai.php" method="POST">
	<fieldset><legend>Pengisian Data Nilai Mahasiswa STMIK Pelita Nusantara</legend>
		<Table border=0>
		<tr>
		<td>NIM</td>
		<td><select name="tnim">
			<?php
			//Koneksi database
			$koneksi = mysqli_connect("localhost","root","","perkuliahan19");
			// jalankan query Select untuk mengambil data dari database dan tabel
			$query = "Select * From Mahasiswa";
			$hasil = mysqli_query($koneksi, $query);
			while($data=Mysqli_fetch_array($hasil))
			{ Echo "<Option
			Value=".$data[0].">".$data[0]."==>".$data[1]."==>".$data[3]."==>".$data[4]."</Option>";}
			?>
		</select>
		<td>
		</tr>
		
		<tr>
		<td>Kode Matakuliah</td>
		<td><select name="tkodemk">
			<?php
			//Koneksi database
			$koneksi = mysqli_connect("localhost","root","","perkuliahan19");
			// jalankan query Select untuk mengambil data dari database dan tabel
			$query = "Select * From matakuliah";
			$hasil = mysqli_query($koneksi, $query);
			while($data=Mysqli_fetch_array($hasil))
			{ Echo "<Option
			Value=".$data[0].">".$data[0]."==>".$data[1]."==>".$data[2]."==>".$data[3]."</Option>";}
			?>
		</select>
		</tr><tr>
		<td>Semester</td>
		<td><select name="tsem">
			<option value="I">I</option>
			<option value="II">II</option>
			<option value="III">III</option>
			<option value="IV">IV</option>
			<option value="V">V</option>
			<option value="VI">VI</option>
			<option value="VII">VII</option>
			<option value="VIII">VIII</option>
		</select>
		<td>
		</tr>
		<tr>
			<td>Nilai Tugas</td>
			<td><input type="text" name="tntugas" placeholder="Nilai Tugas..." /></td>
		</tr>
		<tr>
			<td>Nilai Mid Semester</td>
			<td><input type="text" name="tnmid" placeholder="Nilai Mid..." /></td>
		</tr>
		<tr>
			<td>Nilai Semester</td>
			<td><input type="text" name="tnsem" placeholder="Nilai Semester..." /></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan" /></td>
		<tr>
		</table>
		</fieldset>
	</form>
</body>