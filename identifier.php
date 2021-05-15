<?php
$judul=@Hash_Identifier;
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
					<h6 class="card-title">Hash Identifier</h6>
					<form class="needs-validation" novalidate method="post" action="">
						<div class="form-group">
							<label for="exampleInputEmail1">Hash</label>
							<input type="text" name="resources" id="" class="form-control" required="">
							<div class="valid-feedback">Identifying...!!</div>
							<div class="invalid-feedback">Hash can't be empty!!</div>
						</div>
						<button type="submit" class="btn btn-primary mr-2" name="encode">Identify</button>
					</form>
	      </div>
	    </div>
		</div>
		<?php 
			if (isset($_POST['resources']) && !empty($_POST['resources'])) : 
				$hash = htmlspecialchars($_POST['resources']);
				if (strlen($hash) == 32) {
					$hashresult = "MD5 Hash";
				} elseif (strlen($hash) == 40) {
					$hashresult = "SHA-1 Hash, MySQL5 Hash";
				} elseif (strlen($hash) == 13){
					$hashresult = "DES(Unix) Hash";
				} elseif (strlen($hash) == 16) {
					$hashresult = "MySQL Hash, DES(Oracle) Hash";
				} elseif (strlen($hash) == 41) {
					$GetHashChar = substr($hash, 40);
					if ($GetHashChar == "*") {
						$hashresult = "MySQL5 Hash"; 
					}	
				} elseif (strlen($hash) == 64) {
					$hashresult = "SHA-256 Hash";
				} elseif (strlen($hash) == 96) {
					$hashresult = "SHA-384 Hash";
				} elseif (strlen($hash) == 128) {
					$hashresult = "SHA-512 Hash";
				} elseif (strlen($hash) == 37) {
					if (strstr($hash, '$apr1$')) {
						$hashresult = "MD5(APR) Hash";
					} 	
				} elseif (strlen($hash) == 34) {
					if (strstr($hash, '$H$')) {
						$hashresult = "MD5(phpBB3) Hash";
					} elseif (strstr($hash, '$P$')) {
						$hashresult = "MD5(Wordpress) Hash";
					} elseif (strstr($hash, '$1$')) {
						$hashresult = "MD5(Unix) Hash";
					} else {
						$hashresult = "Can't found possible hash type!";
					}
				} elseif (strlen($hash) == 39) {
					if (strstr($hash, '$5$')) {
						$hashresult = "SHA-256(Unix) Hash";
					}	elseif (strstr($hash, '$6$')) {
						$hashresult = "SHA-512(Unix) Hash";
					} else {
						$hashresult = "Can't found possible hash type!";
					}
				} elseif (strlen($hash) == 24) {
					if (strstr($hash, '==')) {
						$hashresult = "MD5(Base-64) Hash";
					}
				} elseif (strstr($hash, '$2y$10$') == 24) {
					$hashresult = "Bcrypt Hash";
				} else {
					$hashresult = "Can't found possible hash type!";
				}
		?>
		<div class="col-md-6 grid-margin">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Result</h6>
					<div class="table-responsive">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>Hash</th>
									<th>Hash Length</th>
									<th>Possible Hash Type</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?= $hash; ?></td>
									<td><?= strlen($hash); ?></td>
									<td><?= $hashresult; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
