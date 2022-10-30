<!DOCTYPE html>
<html>
<head>
	<title>Data Murid</title>
</head>
<body>
	<center>
		<h1>Data Murid</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?= base_url ('crud/cetak'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td>NIS	:</td>
				<td><input type="text" name="nis" id="nis"></td>
			</tr>
			<tr>
				<td>Kelas :</td>
				<td><input type="text" name="kelas" id="kelas"></td>
			</tr>
            <tr>
				<td>Tanggal Lahir:</td>
				<td><input type="text" name="tgl_lahir" id="tgl_lahir"></td>
			</tr>
            <tr>
				<td>Tempat Lahir :</td>
				<td><input type="text" name="t_lahir" id="t_lahir"></td>
			</tr>
            <tr>
				<td>Alamat	:</td>
				<td><input type="text" name="alamat" id="alamat"></td>
			</tr>
            <tr>
            <td>Jenis Kelamin :</td>
			<td>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" >Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">Perempuan</label>
            </td>
            </tr>
            <tr>
                <td>Agama 	:</td>
				<td>
                <select name="agama" id="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
				<option value="Protestan">Protestan</option>
				<option value="Konghucu">Konghucu</option>
                </select>
				</td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>