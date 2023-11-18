<!DOCTYPE html>
 <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Daftar Mahasiswa</title>
       <link rel="stylesheet" href="/css/style.css">
   </head>
 <body>
  <h1>Daftar Mahasiswa</h1>
  <ol>
      <?php
        foreach ($mahasiswa as $nama) {
          echo "<li> $nama</li>";
        }
      ?>
  </ol>
  <div>
    <img src="/img/1.jpeg" alt="">
    <img src="/img/2.jpeg" alt="">
    <img src="/img/3.jpeg" alt="">
  </div>
  <div>
    Copyright © <?php echo date("Y") ?> Zacky
  </div>
  <script src="/js/script.js"></script>
 </body>
 </html>