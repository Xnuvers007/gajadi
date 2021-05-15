<?php
$judul=@IP_Info_Lookup;
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
<!DOCTYPE html>
<html>
<head>
	<title>Mass Reverse Ip To Domain</title>
	<meta charset="utf-8">
	<meta name="author" content="./EcchiExploit">
	<meta name="description" content="Mass Reverse Domain To Ip">
</head>
<body>
	<h1>Mass Reverse Domain To Ip</h1>
	<form action="" method="POST">
		Note : <b> in the list must be example.com</b>
		<br>
		Input Your Site Max 500 Site =><br>
		<textarea rows="10" cols="60" name="file" placeholder="Your Site"></textarea>
		<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
if (isset($_POST['file']) && !empty($_POST['file'])) {
	$i = 0;
	$filter = htmlspecialchars($_POST['file']);
	$exp = explode("\n", $filter);
	echo "List Ip : <br>";
	echo "<textarea rows='10' cols='60'>";
	foreach ($exp as $key) {
		if(!preg_match('#^http(s)?://#',$key)){
			$a = "http://".$key;
		}
		else {
			$a = $key;
		}
		$parse = parse_url($a);
		$domain = preg_replace('/^www\./', '', $parse['host']);
		$fuck = preg_replace('/_/', '', $domain);
		$www = "www.".$fuck;
		$host = gethostbyname($www);
		while ($host > $i) {
			echo $host."\n";
			$i++;
			break;
		}
	}
	echo "</textarea>";
}
?>
