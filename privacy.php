<?php
$judul=@PRIVACY_POLICY;
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
                                    <center><h6 class="m-0 font-weight-bold text-primary">PRIVACY POLICY GENERATOR INDONESIAN LANGUAGE</h6></center>
                                </div>
    
    <br>
    
    <center>
<form action="" method="post">
<input type="text" pattern="https?://.+" name="situs" class="form-control text-danger" autocomplete="off" widht="50" placeholder="Your Site Url" />
<br>
<input class="form-control text-danger" autocomplete="off" type="text" name="nama" placeholder="Name Of Your Website" />
<br>
<center>
<input class="btn btn-outline-info" type="submit" name="submit" value="Create!"></form></div><br><br>
    </div></center>
';
if (isset($_POST['submit'])) {
  $situs=$_POST['situs'];
  $nama=$_POST['nama'];
  echo '
<br>
<br>
<textarea class="form-control" readonly style="height:350px;">
<P>
<h1> Kebijakan Privasi </h1>
Dibuat Pada Tanggal '.date("Y/m/d") . '<br>
<p>

Halaman ini memberi tahu Anda tentang kebijakan kami mengenai pengumpulan, penggunaan, dan pengungkapan data pribadi saat Anda menggunakan Layanan kami dan pilihan yang telah Anda kaitkan dengan data itu. 

Kami menggunakan data Anda untuk menyediakan dan meningkatkan Layanan. 

Dengan menggunakan Layanan, Anda menyetujui  dan menggunakan informasi sesuai dengan kebijakan ini. Terkecuali ditentukan dilain Kebijakan,  istilah yang digunakan dalam Kebijakan Privasi ini memiliki arti yang sama seperti dalam Syarat dan Ketentuan kami, dapat diakses dari '.$situs.'

<p>
<h2> Pengumpulan Dan Penggunaan Informasi </h2>
<p>
Kami mengumpulkan beberapa jenis informasi yang berbeda untuk berbagai keperluan untuk menyediakan dan meningkatkan Layanan kami kepada Anda.

<h3> Jenis Data yang Dikumpulkan </h3>
<h4> Data Pribadi </h4>
Saat menggunakan Layanan kami, kami mungkin meminta Anda untuk memberikan kami informasi pengenal pribadi tertentu yang dapat digunakan untuk menghubungi atau mengidentifikasi Anda ("Data Pribadi"). Informasi yang dapat diidentifikasi secara pribadi dapat mencakup, tetapi tidak terbatas pada:
<ul>
 <li> Alamat email </li>
 <li> Nama depan dan nama belakang </li>
 <li> Nomor telepon </li>
 <li> Alamat, Negara Bagian, Provinsi, ZIP / Kode pos, Kota </li>
 <li> Cookie dan Data Penggunaan </li>
</ul>
<h4> Data Penggunaan </h4>
Kami juga dapat mengumpulkan informasi tentang bagaimana Layanan diakses dan digunakan ("Data Penggunaan"). Data Penggunaan ini dapat mencakup informasi seperti alamat Protokol Internet komputer Anda (mis. Alamat IP), jenis browser, versi browser, halaman Layanan kami yang Anda kunjungi, waktu dan tanggal kunjungan Anda, waktu yang dihabiskan untuk halaman-halaman itu, unik pengidentifikasi perangkat dan data diagnostik lainnya.
<p>
<h4> Pelacakan Data Cookie </h4>
Kami menggunakan cookie dan teknologi pelacakan serupa untuk melacak aktivitas pada Layanan kami dan menyimpan informasi tertentu.

Cookie adalah file dengan sedikit data yang dapat menyertakan pengidentifikasi unik anonim. Cookie dikirim ke browser Anda dari situs web dan disimpan di perangkat Anda. Teknologi pelacakan yang juga digunakan adalah suar, tag, dan skrip untuk mengumpulkan dan melacak informasi dan untuk meningkatkan dan menganalisis Layanan kami.

Anda dapat menginstruksikan browser Anda untuk menolak semua cookie atau untuk menunjukkan kapan cookie dikirim. Namun, jika Anda tidak menerima cookie, Anda mungkin tidak dapat menggunakan sebagian Layanan kami. Anda dapat mempelajari lebih lanjut cara mengelola cookie di <a href="https://privacypolicies.com/blog/how-to-delete-cookies/"> Panduan Cookie Browser </a>.

Contoh Cookie yang kami gunakan:
<ul>
 <li> <strong> Cookie Sesi. </strong> Kami menggunakan Cookie Sesi untuk mengoperasikan Layanan kami. </li>
 <li> <strong> Cookie Preferensi. </strong> Kami menggunakan Cookie Preferensi untuk mengingat preferensi Anda dan berbagai pengaturan. </li>
 <li> <strong> Cookie Keamanan. </strong> Kami menggunakan Cookie Keamanan untuk tujuan keamanan. </li>
</ul>
<h2> Penggunaan Data </h2>
'.$nama.' menggunakan data yang dikumpulkan untuk berbagai keperluan:
<ul>
 <li> Untuk menyediakan dan memelihara Layanan </li>
 <li> Untuk memberi tahu Anda tentang perubahan pada Layanan kami </li>
 <li> Untuk memungkinkan Anda berpartisipasi dalam fitur interaktif Layanan kami ketika Anda memilih untuk melakukannya </li>
 <li> Untuk memberikan layanan dan dukungan pelanggan </li>
 <li> Untuk memberikan analisis atau informasi berharga sehingga kami dapat meningkatkan Layanan </li>
 <li> Untuk memantau penggunaan Layanan </li>
 <li> Untuk mendeteksi, mencegah dan mengatasi masalah teknis </li>
</ul>
<h2> Transfer Data </h2>
Informasi Anda, termasuk Data Pribadi, dapat ditransfer ke - dan dipelihara di - komputer yang berlokasi di luar negara bagian, provinsi, negara atau yurisdiksi pemerintah lainnya di mana undang-undang perlindungan data mungkin berbeda dari yang ada di yurisdiksi Anda.

Jika Anda berada di luar Indonesia dan memilih untuk memberikan informasi kepada kami, harap perhatikan bahwa kami mentransfer data, termasuk Data Pribadi, ke Indonesia dan memprosesnya di sana.

Persetujuan Anda untuk Kebijakan Privasi ini diikuti dengan pengajuan informasi tersebut merupakan persetujuan Anda untuk transfer tersebut.

Di '.$nama.' akan mengambil semua langkah yang wajar diperlukan untuk memastikan bahwa data Anda diperlakukan dengan aman dan sesuai dengan Kebijakan Privasi ini dan tidak ada transfer Data Pribadi Anda yang akan terjadi pada suatu organisasi atau negara kecuali jika ada kontrol yang memadai termasuk keamanan dari data Anda dan informasi pribadi lainnya.
<h2> Pengungkapan Data </h2>
<h3> Persyaratan Hukum </h3>
'.$nama.' dapat mengungkapkan Data Pribadi Anda dengan itikad baik bahwa tindakan tersebut diperlukan untuk:
<ul>
 <li> Untuk mematuhi kewajiban hukum </li>
 <li> Untuk melindungi dan mempertahankan hak atau properti '.$nama.' </li>
 <li> Untuk mencegah atau menyelidiki kemungkinan kesalahan sehubungan dengan Layanan </li>
 <li> Untuk melindungi keamanan pribadi pengguna Layanan atau publik </li>
 <li> Untuk melindungi dari pertanggungjawaban hukum </li>
</textarea>';
  }
  ?></center>
</div>
                            
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>