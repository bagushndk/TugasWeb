
<h2 align="center">Data Pertanyaan Pengunjung</h2>
<p align="center"><a href="<?php echo base_url('login/logout'); ?>">Logout</a></p>

<html>
<head>
    <title>Admin Page</title>
</head>

<body>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Email</th> <th>Telepon</th>  <th>Pesan</th> <th>Update</th>
    </tr>
    <?php
        foreach($users as $c){
        ?>
        <tr>
          <td><?php echo $c->name ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->telepon ?></td>
          <td><?php echo $c->message ?></td>
          <td>
                <?php echo anchor('admin/edit/'.$c->id,'Edit'); ?>
                                  <?php echo anchor('admin/hapus/'.$c->id,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
