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
    	<table class="table table-bordered table-striped">
		<thead>
		<p>Domain:&nbsp;&nbsp;&nbsp;</p>
        <form action="<?php $_PHP_SELF; ?>">
		<input type="text" name="q" class="form-control text-info" autocomplete="off" placeholder="4dh4x0r.id" value="<?php htmlspecialchars(@$_REQUEST['q'])?>" /><br> <input type="submit" class="btn btn-outline-info" value="Go" /></thead>
        </form>
</div>
<?php
if(trim(@$_REQUEST['q']))
{
	$q = $_REQUEST['q'];
	if(preg_match("#\\d+\\.\\d+.\\.\\d+.\\.\\d+.#",$q))
	{
		$res = gethostbyaddr($q);
	}
	else
	{
		$res = gethostbyname($q);
	}
	echo "<br/>Host Address:<br/><br/>";
	echo "<b>$res</b><br/>";
}
?>
	</table>
</div>
<br>
</center>
                                    
                            </div> </div>
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>