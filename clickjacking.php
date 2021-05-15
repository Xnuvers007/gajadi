<?php
$judul=@Pentest_Clickjacking;
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
                                <br> <center>
<html>
    <head>
        <title>Pentest Clickjacking</title>
        <script type="text/javascript" src="clickjack.js"></script>
    </head>
    <body>
        <h3>Test a page for clickjacking/framing vulnerability</h3>
        <p>Enter URL:</p>
        <input id="url" type="text" value="http://example.com"></input>
        <button id="submit-test">gass sayang</button>
        <br />
        <iframe src="about:blank" id="iframe" width="800px" height="600px"></iframe>
    </body>
</html>