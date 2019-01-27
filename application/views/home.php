<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<center>
		<table border="1" width="1024">
			<tr align="center">
				<td colspan="3">MY PAGE - HOME</td>
			</tr>
            <tr align="center">
                <td><a href="<?= base_url(); ?>index.php/myblog" >HOME</a></td>
                <td><a href="<?= base_url(); ?>index.php/myblog/foto">GALERI</a></td>
                <td><a href="<?= base_url(); ?>index.php/myblog/post">PORTOFOLIO</a></td>
            </tr>
            <tr height="500" valign="top">
                <td colspan="3" align="center">
                    <h3>ABOUT ME</h3>
                    <p>
                        Nama: Egan Kusmaya Putra<br><br>
                        Tempat, Tanggal Lahir: Bandung, 19 November 1998<br><br>
                        Jenis Kelamin: Laki-laki<br><br>
                        No. telp: 082215204919<br><br>
                        Email: egn234@gmail.com<br><br>
                        Kelas: D3SI-41-02<br><br>
                        NIM: 6701174110<br><br>
                    </p>
                </td>
            </tr>
		</table>
	</center>
</body>
</html>