<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <font color="blue"><h1>berita terkini</h1></font>
    <button><a href="<?= base_url('index.php/Berita/add_berita') ?>">Tambah</a></button>
    <br><br>
    <table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>berita judul</th>
        <th>berita isi</th>
        <th>berita penulis</th>
        <th>berita tanggal</th>
        <th>berita lokasi</th>
        <th>kategori id</th>
        <th>berita foto</th>
        <th>aksi</th>

    </tr>
    <?php
        foreach ($Berita as $bt){
            ?>
             <tr>
                 <center><td><?= $bt['berita_id'];?></td></center>
                <center><td><?= $bt['berita_judul'];?></td></center>
                <center><td><?= $bt['berita_isi'];?></td></center>
                <center><td><?= $bt['berita_penulis'];?></td></center>
                <center><td><?= $bt['berita_tanggal'];?></td></center>
                <center><td><?= $bt['berita_lokasi'];?></td></center>
                <center><td><?= $bt['kategori_id'];?></td></center>
                <center><td><?= $bt['berita_foto'];?></td></center>
                
                </td>
               <button>  <td> Edit || <a href="<?= base_url('index.php/berita/delete/'.$bt['berita_id'])?>"> Hapus </a> </td></button></center>
        
             
            </tr>
            <?php
        }
        ?>
    </body>
    </html>