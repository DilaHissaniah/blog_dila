<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font color="blue"><h1>kategori view</h1></font>
    <button><a href=<?= base_url('index.php/kategori/add_kategori') ?>>Tambah</a></button>
    <br><br>
    <table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th>Action</th>
    </tr>
    <?php
        foreach ($kategori as $kat){
            ?>
             <tr>
                <td><center><?= $kat['kategori_id']?></center></td>
                <td><center><?= $kat['kategori_nama']?></center></td>
                <td><center><?= $kat['kategori_ket']?></center></td>
                <td><center> Edit // <a href="<?= base_url('index.php/kategori/delete/'.$kat['kategori_id'] )?>"> Hapus </a></center></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>