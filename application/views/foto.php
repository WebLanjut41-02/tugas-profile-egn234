<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Galeri</title>
</head>
<body>
<center>
  <table border="1" width="1024">
    <tr align="center">
      <td colspan="3">MY PAGE - GALERI</td>
    </tr>
    <tr align="center">
      <td><a href="<?= base_url(); ?>index.php/myblog" >HOME</a></td>
      <td><a href="<?= base_url(); ?>index.php/myblog/foto">GALERI</a></td>
      <td><a href="<?= base_url(); ?>index.php/myblog/post">PORTOFOLIO</a></td>
    </tr>
    <tr height="500" >
      <td colspan="3" align="center">
        <img src="<?= base_url('assets/01.jpeg');?>" height="300">
        <img src="<?= base_url('assets/02.jpg');?>" height="300">
      </td>
    </tr>
  </table>
</center>
</body>
</html>