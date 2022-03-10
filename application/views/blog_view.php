<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center> <h1>ARTIKEL DILA</h1></center>
    <a href ="<?= base_url('index.php/Blog/add_blog') ?>"><button>+ add blog</button></a>
    <?php foreach ($blog as $bg):?>
    <div class="blog">
        <h2><?php echo $bg ['blog_judul'];?></h2>
        <img width="250px"height="150px" src="<?= base_url('gambar_blog/'.$bg['blog_cover'])?>" alt="">
        <p><?php  echo $bg ['blog_content']?></p>
        <p><?php  echo $bg ['blog_penulis'];?></p>
        <p><?php  echo $bg ['blog_tgl'];?></p>
        <p><?php  echo $bg ['blog_cover']; endforeach?></p>
        <a href ="<?= base_url('index.php/blog/delete/'.$bg['blog_id'])?>">hapus</a>
</body>
</html>