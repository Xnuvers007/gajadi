<?php
$judul=@OJS_Shell_Finder;
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
<div class="page-content">
	<div class="row">
		<div class="col-md-6 grid-margin">
	    <div class="card">
	      <div class="card-body">
					<h6 class="card-title">OJS Shell Finder</h6>
					<form class="forms-sample" method="post" action="">
						<div class="form-group">
							<label for="exampleInputEmail1">Site</label>
							<input type="text" name="site" class="form-control" id="site" required="">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Shell Name</label>
							<input type="text" class="form-control" name="shell" id="shell" required=""/>
						</div>
						<button type="button" class="btn btn-primary mr-2" name="submit" onclick="ojsFinder()">Scan</button>
					</form>
	      </div>
	    </div>
		</div>
		<div class="col-md-6 grid-margin" style="display:none;" id="res">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Result</h6>
					<div id="result">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
