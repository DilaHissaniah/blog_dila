<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><font color ="red"><h2>KATEGORI dila</h2></font></center>
<h3>
<center><form action="<?= base_url('index.php/kategori/add_kategori_act/') ?>" method="post">
<center><font color ="blue"><label for="">nama</label></font></center>
<br>
    <input type="text" name="kategori_nama" id="kategori_nama">
    <br><br>
    <center><font color ="orange"><label for="">ket</label></font></center>
    <br>
        <textarea name="kategori_ket" id="kategori-ket" cols="50" rows="10">
        </textarea>
    <br><br>
    <center><button type="submit">
        simpan
    </button></center>
    </form>
    <br>
    <center><form action="<?= base_url('index.php/kategori/') ?>" method="post">
    <center><button type="submit">
        batal
    </button></center>
    </h3>
</body>
</html>