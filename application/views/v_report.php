<p align="left"><a href="<?php echo base_url('welcome'); ?>">Kembali ke Beranda</a></p>
<h1 align="center">Laporan</h1>

<html>
<head>
    <title>Laporan</title>
</head>
    <p align="center"><a href="<?php echo base_url('report/download'); ?>">Unduh Laporan</a></p>
<body>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Pesan</th>
    </tr>
    <?php
        foreach($users as $c){
        ?>
        <tr>
          <td><?php echo $c->name ?></td>
          <td><?php echo $c->message ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <!--<a href="<?php echo site_url('report/download'); ?>">Unduh Laporan
      <input class="more_btn" type="submit" name="tombol" value="Unduh Laporan"></a>
    -->
</body>
</html>