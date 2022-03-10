<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><font color ="red"><h2>ISI BLOG</h2></font></center>
<h3>
<center><form action="<?= base_url('index.php/Blog/add_blog_act/') ?>" method="post">
<center><font color ="blue"><label for="">Judul</label></font></center>
<br>
    <input type="text" name="blog_judul" id="blog_judul">
    <br><br>
    <center><font color ="blue"><label for="">Content</label></font></center>
    <br>
        <textarea name="blog_content" id="blog-content" cols="50" rows="10">
        </textarea>
    <br><br>
    <center><font color ="blue"><label for="">Penulis</label></font></center>
    <br>
    <input type="text" name="blog_penulis" id="blog_penulis">
    <br><br>
    <center><font color ="blue"><label for="">kategori_blog</label></font></center>
    <select name="kategori_id" id="kategori_id">
      <option value="1">Ipa</option>
      <option value="2">Ips</option>
    </select>
    <br><br><br>
    <center><button type="submit">
        simpan
    </button></center>
    </form>
    <br>
    <center><form action="<?= base_url('index.php/Blog/') ?>" method="post">
    <center><button type="submit">
        batal
    </button></center>
    </h3>
</body>
</html>