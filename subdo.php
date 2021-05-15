<?php
$judul=@Subdomain_Finder;
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
		<div class="col-md-6 grid-margin stretch-card">
	    <div class="card">
	      <div class="card-body">
					<h6 class="card-title">Subdomain Finder</h6>
					<form class="needs-validation" novalidate method="post" action="">
						<div class="form-group">
							<label for="exampleInputEmail1">Domain</label>
							<input type="text" name="domain" id="" class="form-control" required="">
							<div class="valid-feedback">Reversing...!!</div>
							<div class="invalid-feedback">Domain can't be empty!!</div>
						</div>
						<button type="submit" class="btn btn-primary mr-2" name="encode">Submit</button>
					</form>
	      </div>
	    </div>
		</div>
		<?php 
			if (isset($_POST['domain']) && !empty($_POST['domain'])) : 
				$filter = htmlspecialchars($_POST['domain']);
				if (!preg_match('#^http(s)?://#',$filter)) {
					$site = $filter;
				} else {
					$site = preg_replace("#^http(s)?://#", "", $filter);
				}
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://sonar.omnisint.io/subdomains/$site");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$exe = curl_exec($ch);
				curl_close($ch);
				
				$json = json_decode($exe, true);
		?>
		<div class="col-md-6 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Subdomain Finder</h6>
					<div class="form-group">
						<label for="results">Results</label>
						<textarea name="results" id="results" rows="10" class="form-control"><?php
							foreach ($json as $res) {
								echo $res."\n";
							}
						?></textarea>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
