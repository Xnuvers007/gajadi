<?php
$judul=@Domain_Checker;
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
 <?php

if(!isset($_POST['Submit']))
{
	echo "Insert Domain Name, Don't use <strong>www.</strong><br/>";
    echo '<form method="POST" action="' . $_SERVER['PHP_SELF'] . '">'
            . '<input type="text" class="form-control text-danger" autocomplete="off"cols="35" rows="1" name="domains" style="color:black;"></textarea><br />'
            .'<br>'
            . '<input type="submit" name="Submit" class="btn btn-outline-info" value="Check">'
            . '</form>';
}
else
{
    $domains = explode("\n", str_replace(array("\r\n", "\r"), "\n", $_POST['domains']));
    
    foreach($domains as $domain)
    {
        if(is_avail($domain))
        {
            $pieces = explode(".", $domain, 1);
            echo $domain . "<strong> Domain Available! Register <a href='https://wa.me/+6281398388621'>Now</a></strong><a/><br/>";
        }
		else
		{
			echo $domain . "<strong> Domain Not Available</strong><br/>";
		}
    }
}

function is_avail($domain)
{    
    $pieces = explode(".", $domain);
    $server = (count($pieces) == 2) ? $pieces[1] : $pieces[1] . "." . $pieces[2];
    $server .= ".whois-servers.net";
    $fp = fsockopen($server, 43, $errno, $errstr, 10);
    $result = "";
    if($fp === FALSE){ return FALSE; }
    fputs($fp, $domain . "\r\n");    
    while(!feof($fp)){ $result .= fgets($fp, 128); }
    fclose($fp);
    
    return ((stristr($result, 'no match for') !== FALSE) || (strtolower($result) == "notfound\n")) ? TRUE : FALSE;
}

?> 
</center>
</div>
                            </div> </div>
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>