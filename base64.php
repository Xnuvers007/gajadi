<?php
$judul=@Base64;
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
					<h6 class="card-title">Base64 Encode/Decode</h6>
					<form method="post" action="" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="exampleInputEmail1">Resources</label>
							<textarea name="resources" id="resources" rows="10" class="form-control" required=""></textarea>
							<div class="valid-feedback">Good!!</div>
							<div class="invalid-feedback">Resources can't be empty!!</div>
						</div>
						<button type="submit" class="btn btn-primary mr-2" name="encode">Encode</button>
						<button type="submit" class="btn btn-secondary mr-2" name="decode">Decode</button>
					</form>
	      </div>
	    </div>
		</div>
		<?php 
			if (isset($_POST['resources']) && !empty($_POST['resources'])) : 
				$input = htmlspecialchars($_POST['resources']);
				if (isset($_POST['encode'])) {
					$result = base64_encode($input);
				} else {
					$result = base64_decode($input);
				}
		?>
		<div class="col-md-6 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Base64 Encode/Decode</h6>
					<div class="form-group">
						<label for="results">Results</label>
						<textarea name="results" id="results" rows="10" class="form-control"><?= $result; ?></textarea>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
