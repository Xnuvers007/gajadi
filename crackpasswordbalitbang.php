<?php
$judul=@Crack_Password_Balitbang;
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
$xc = ''; $cx = '';
function unhex($str = '', $code = '') {
  $pwnd = explode('g', $str);
  $result = '';
  $hex = hexdec($pwnd[0]) - $code;
  if ($hex == strlen($pwnd[1])/2) {
    for ($i = 0; $i <= $hex-1; $i++) {
      $result .= chr(hexdec(substr($pwnd[1], $i*2, 2)) - $code);
    }
    $result = '<hr size="1" color="black">
<br>
'.$str.' = '.strrev($result).'<br>
'; } return $result; } ?> <!DOCTYPE html>
<html lang="en">
<head>
<title>Crack Password Balitbang</title>
</head>
<body>
<center>
<font class="blink">Crack Password Balitbang</font>
<br>
<br>
<br>
<div class="card-body">
  <form method="post" class="was-validated">
    <div class="form-group">
      <textarea name="pass" class="form-control" placeholder="Password" required="required"></textarea>
    </div>
    <div class="form-group">
      <br>
      <button type="submit" name="submit" class="btn">Cr0tt disini</button>
    </div>
  </form>
  <?php
    if (isset($_POST['submit'])) {
      $pass = htmlspecialchars(htmlentities(addslashes($_POST['pass']), ENT_QUOTES), ENT_QUOTES);
      $exp = explode("\r\n", $pass);
      foreach ($exp as $value) {
        $cx .= $value;
        for ($i = 0; $i <= 100; $i++) {
          $xc .= unhex($value, $i);
        }
      }
      echo '<br>
  <h4>PASSWORD</h4>
  <br>'.$xc; } ?></div>
</div>
</center>
</body>
<script>
  var rev = "fwd";
  function titlebar(val)
  {
  var msg = "Crack Password Balitbang Tools || AIM FOR THE IMPOSSIBLE";
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