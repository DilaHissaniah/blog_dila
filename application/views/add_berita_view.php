<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ISI BERITA</h3>
    <center><form action="<?= base_url('index.php/berita/add_berita_act/') ?>" method="post">
    <center><font color ="blue"><label for="">JUDUL BERITA</label></font></center>
    <input type="text"name="berita_judul" id="berita judul">
    <br><br>
    <center><font color ="isi_berita"><label for="">ISI BERITA</label></font></center>
    <br>
    <textarea name="berita_isi" id="berita_isi" cols="50" rows="10"> </textarea>
    <br><br>
    <center><font color ="green"><label for="">Penulis</label></font></center>
    <input type ="text"name="berita_penulis"id="berita_penulis">
    <br><br>
    <center><font color ="green"><label for="">TANGGAL</label></font></center>
    <input type="text" name="berita_tanggal" id="berita_tanggal">
    <br><br>
    <center><font color ="green"><label for="">lokasi</label></font></center>
    <input type="text" name="berita_lokasi" id="berita_lokasi">
    <br><br>
    <center><font color ="green"><label for="">KATEGORI</label></font></center>
    <input type="text" name="kategori_id" id="kategori_id">
    <br><br>
    <center><font color ="green"><label for="">FOTO</label></font></center>
    <input type="text" name="berita_foto" id="berita_foto">
    <br><br>

    <br><br>
    
    <center><button type="submit">
    <font color ="blue"> simpan</font>
    </button></center>
    </form></center>
</body>
</html>