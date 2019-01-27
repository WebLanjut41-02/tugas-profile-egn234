<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

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
    <tr height="500" valign="top">
      <td colspan="3">
        <center><img src="<?= base_url('assets/03.jpg'); ?>" height="406"><br>
        <h3>BEST PLACE</h3></center>
          <p>The best place that I have ever visited was Bali. Bali Island is the most beautiful places on earth and there is so much tourists going to this island. Especially the Kuta beach. when I was on vacation, my family went to the Bali Island. The first place we were going to visit is the Kuta beach. It’s so hot there because I never go to the beach, it’s my first time seeing a real beach with my naked eye.</p>
      <form action="<?= base_url('index.php/myblog/comment');?>" method="POST">
          <center>
              KOMENTAR:<br>
              <textarea name="comment" rows="5" cols="100"></textarea><br>
              <button type="submit" name="submit">SUBMIT</button>
          </center>
      </form>
      </td>
    </tr>
  </table>
</center>
</body>
</html>