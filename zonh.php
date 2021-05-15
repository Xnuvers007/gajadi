<?php
$judul=@Zone_H_Notifier;
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
                                </div><center>
  	<br>
<form method="POST">
<input type="text" name="defacer" class="form-control text-info" autocomplete="off" placeholder="Attacker" class="form-control">
<input type="hidden" name="mirror" value="zone-h"><br>
<textarea placeholder="http://" type="url" class="form-control text-info" autocomplete="off" style="height:200px;" name="domains"></textarea><br>
	<br>
<center><input type="submit" class="btn btn-outline-info" value="Go" name="go"></center>
<br>
</form>
<table>
<?php
set_time_limit (0);
if (!function_exists ("curl_init")){die ("This Script uses cURL Library, you must install first !<br><a href='http://au2.php.net/manual/en/curl.setup.php'>http://au2.php.net/manual/en/curl.setup.php</a>");}

if (@$_POST['go'])
{
	foreach (explode ("\n", htmlspecialchars($_POST['domains'])) as $domain)
	{
		post ($domain, $_POST['defacer'], $_POST['mirror']);
	}
	echo "<br>";
}

function post ($url, $defacer, $mirror)
{
	$ch = curl_init ();
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_POST, 1);

	switch ($mirror)
	{
	case "zone-h";
		curl_setopt ($ch, CURLOPT_URL, "http://www.zone-h.com/notify/single");
		curl_setopt ($ch, CURLOPT_POSTFIELDS, "defacer=$defacer&domain1=$url&hackmode=1&reason=1");
		if (preg_match ("/color=\"red\">OK<\/font><\/li>/", curl_exec ($ch)))
			 echo "<div class='table'>
			<table class='table table-bordered table-striped table-hover alert alert-success'>
			<tr>
			<td style='text-align:left'>
			<font class='text-info'>Zone</font>
			<font class='text-dark'>-H</font> =&gt; <font color='gold'>$url</font> : Status =&gt; <span style='color: green'>SUCCESS</span> [ Perawan ]</td></tr></table>";
		else
			echo "<div class='table'>
		<table class='table table-bordered table-striped table-hover alert alert-infos'>
		<tr>
		<td style='text-align:left'>
		<font class='text-info'>Zone</font>
		<font class='text-dark'>-H</font> =&gt; <font color='gold'>$url</font> : Status =&gt; <span style='color: red'>ERROR</span> [ Bekas/BanList ]</td></tr></table>";
		break;
	default:
		break;
	}
	curl_close ($ch);
}

?>
</table></div>
</center><br/>
<br>                                    
                            </div> </div>
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>