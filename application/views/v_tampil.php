<html>
<head>
	<title>Data siswa</title>
</head>
<body>
	<center><h1>DATA SISWA</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Nama</th>
            <th>:</th>
            <td>
                <?= $nama; ?>
            </td>
        </tr>
        <tr> 
			<th>NIS</th>
            <th>:</th>
            <td>
                <?= $nis; ?>
            </td>
        </tr>
        <tr>
			<th>Kelas</th>
            <th>:</th>
            <td>
                <?= $kelas; ?>
            </td>
        </tr>
        <tr>
			<th>Tanggal Lahir</th>
            <th>:</th>
            <td>
                <?= $tgl_lahir; ?>
            </td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <th>:</th>
            <td>
                <?= $t_lahir; ?>
            </td>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <td>
                <?= $alamat; ?>
            </td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <td>
                <?= $jenis_kelamin; ?>
            </td>
        </tr>
        <tr>
            <th>Agama</th>
            <th>:</th>
            <td>
                <?= $agama; ?>
            </td>
		</tr>
        
	</table>
    <td><center><a href="<?= base_url('crud');
        ?>">Kembali</a></td></center>
</body>
</html>