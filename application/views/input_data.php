<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu Riska</title>
   
</head>
<body>
    <!-- <?php echo validation_errors(); ?> -->

	<center>
		<h1>SELAMAT DATANG DI TOKO SEPATU RISKA</h1>
	</center>
	<center>
        <form method="POST">
            <table style="margin:20px auto;">
				<tr>
					<th colspan="3">
						<h3>Isikan Data Pembeli</h3>
					</th>
                </tr>
				<tr>
                    <td>Nama Pembeli</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <td>No HP</td>
                    <td>
                        <input type="text" name="nhp" id="nhp">
                        <?= form_error('nhp', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <td>Merk Sepatu</td>
                    <td>
                        <select name="merk" id="merk">
                            <option>--Silahkan Pilih Merk--</option>
                            <?php foreach($merk as $m) : ?>
                                <option value="<?= $m; ?>"><?= $m; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Ukuran Sepatu </td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option>--Silahkan Pilih Ukuran--</option>
                            <?php for($i = 32; $i <= 44; $i ++) : ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
	</center>
</body>
</html>