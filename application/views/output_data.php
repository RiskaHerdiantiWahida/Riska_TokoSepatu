<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Transaksi</title>
</head>
<body>
    <!-- <?php echo validation_errors(); ?> -->

	<center>
        <h1>Struk Pembelian Sepatu</h1>
	</center>
	<center>
         <table style="margin:30px auto;">
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
				<td>	<?= $nama; ?></td>
            </tr>

            <tr>
                <td>No HP</td>
                <td>:</td>
                <td>   <?= $nhp; ?></td>
             </tr>

            <tr>
				<td>Merk</td>
                <td>:</td>
                <td>    <?= $merk; ?></td>
            </tr>

            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                 <td>  <?= $ukuran; ?></td>
            </tr>

            <tr>
				<td>Harga</td>
				<td>:</td>
                 <td>Rp. <?= $harga; ?></td>
            </tr>

            <tr>
                <td colspan="3" align="center">
					<hr>
					<p><button><a href="<?php base_url('tokosepatu'); ?>">Kembali</a></button></p>
                </td>
            </tr>
         </table>
	</center>
	<center>
		<h5>--Terimakasih Sudah Berkunjung Dan Berbelanja Di Toko Kami!--</h5>
	</center>
</body>
</html>