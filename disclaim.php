<?php
$judul=@DISCLAIMER_GENERATOR_INDONESIAN_LANGUAGE;
include'sec.php';
error_reporting(0);
?>
<?php include 'helixdata/head.php'; 
?>
<body id="page-top">
<?php include 'helixdata/sidebar.php'; 
?>
<?php include 'helixdata/topcontent.php'; 
?>
<?php
echo'
<body>
       
 <!-- Begin Page Content -->
                <div class="container-fluid">
                    
<!-- Tools Card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <center><h6 class="m-0 font-weight-bold text-primary">DISCLAIMER GENERATOR INDONESIAN LANGUAGE</h6></center>
                                </div>
    
    <br><center>
<form action="" method="post">
<input type="text" pattern="https?://.+" autocomplete="off" name="situs" class="form-control text-dark" widht="50" placeholder="Your Site Url" />
<br>
<input class="form-control text-dark" autocomplete="off" type="text" name="nama" placeholder="Name Of Your Website" />
<br>
<input class="form-control text-dark" autocomplete="off" type="text" name="email" placeholder="Email Your Website" />
<br>
<center>
<input class="btn btn-outline-info" type="submit" name="submit" value="Create!"></form></div><br><br>
    </div><br></center>
';
if (isset($_POST['submit'])) {
  $situs=$_POST['situs'];
  $nama=$_POST['nama'];
  $email=$_POST['email'];
  echo '
<br>
<br>
<textarea class="form-control" readonly style="height:350px">
<h2>Disclaimer untuk untuk '.$nama.' </h2>
Jika Anda memerlukan informasi lebih lanjut atau memiliki pertanyaan tentang penolakan situs kami, jangan ragu untuk menghubungi kami melalui email di '.$email.'

<p>
<h2>Disclaimer untuk '.$nama.' </h2>
Semua informasi di situs web ini - '.$situs.' - ditunjukan dengan itikad baik dan hanya untuk tujuan informasi umum. '.$nama.' tidak membuat jaminan apa pun tentang kelengkapan, keandalan, dan keakuratan informasi ini. Segala tindakan yang Anda ambil atas informasi yang Anda temukan di situs web ini ( '.$nama.' ), sepenuhnya merupakan risiko Anda sendiri. '.$nama.' tidak akan bertanggung jawab atas kerugian  /  kerusakan sehubungan dengan penggunaan situs web kami. 

<p>yang
Dari situs  kami, Anda dapat mengunjungi situs web lain dengan mengikuti hyperlink ke situs eksternal tersebut. Meskipun kami berupaya menyediakan hanya tautan berkualitas ke situs web yang berguna dan etis, kami tidak memiliki kendali atas konten dan sifat situs ini. Tautan ini ke situs web lain tidak menyiratkan rekomendasi untuk semua konten yang ditemukan di situs ini. Pemilik dan konten situs dapat berubah tanpa pemberitahuan dan dapat terjadi sebelum kami memiliki kesempatan untuk menghapus tautan yang mungkin menjadi buruk.

<p>Perlu diketahui juga bahwa ketika Anda meninggalkan situs web kami, situs lain mungkin memiliki kebijakan dan ketentuan privasi berbeda yang berada di luar kendali kami. Pastikan untuk memeriksa Kebijakan Privasi situs-situs ini serta "Ketentuan Layanan" mereka sebelum terlibat dalam bisnis apa pun atau mengunggah informasi apa pun.

<p>
<h2>Persetujuan</h2>
<p>Dengan menggunakan situs web kami, Anda dengan ini menyetujui penafian kami dan menyetujui ketentuannya.

<p>
<h2>Memperbarui</h2>
Jika kami memperbarui, mengubah atau membuat perubahan apa pun pada dokumen ini, perubahan itu akan diposting secara jelas di sini.
</textarea>';
  }
  ?></div>
                            
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>