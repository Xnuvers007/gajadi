<?php
$judul=@Reverse_IP;
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
                                <center>
        <style>
            textarea {
        font-family: cursive;
      }
    </style>
    <div class="conversion"><center>
      <form action="" method="POST">
        Domain:<br>
        <input type="text" class="form-control text-danger" rows="10" cols="90" name="sitem">
        <br><br>
        <input type="submit" class="btn btn-outline-dark" name="reverse" value="Reverse" />
      </form>
<br>
<?php
//$_POST["sitem"];
//$_POST["reverse"];
if(empty($_POST["reverse"])) {
exit;
}


error_reporting(E_ALL);
$ch = curl_init("https://api.hackertarget.com/reverseiplookup/?q=".$_POST["sitem"]."&t=1");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);
$whois = curl_exec($ch);

echo '<textarea name="result" id="result" class="form-control" rows="7" readonly>'.$whois.'</textarea><div class="table table-responsive"></table></thead>';
curl_close($ch);
?></center><br/>
<br></div>
                            </div> </div>
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>