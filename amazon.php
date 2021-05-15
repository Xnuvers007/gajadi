<?php
$judul=@Amazon;
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
		<div class="col-md">
			<div class="card">
				<div class="card-body">
					<div class="card-title">Amazon Valid Account Checker</div>
					<form action="" method="post">
						<div class="row">
							<div class="form-group col-md-8 grid-margin">
								<label for="resources">Resources</label>
								<textarea name="resources" id="resources" class="form-control" rows="10" placeholder="email@domain.com|password"></textarea>
							</div>
							<div class="form-group col-md-4 grid-margin">
								<label for="socks">Socks</label>
								<textarea name="socks" id="socks" class="form-control" rows="10" placeholder="127.0.0.1:8080"></textarea>
							</div>
							<div class="form-group col-md-4 grid-margin">
								<label for="delim">Delim</label>
								<select name="delim" id="delim" class="form-control">
									<option value="|">|</option>
									<option value=":">:</option>
									<option value="-">-</option>
									<option value="/">/</option>
									<option value="+">+</option>
								</select>
							</div>
							<div class="form-group col-md-4 grid-margin">
								<label for="timeout">Timeout</label>
								<input type="text" name="timeout" class="form-control" id="timeout" value="5">
							</div>
							<div class="form-group col-md-4 grid-margin">
								<label for="fail">Change Socks After (Die Result)</label>
								<input type="text" name="fail" class="form-control" id="fail" value="10">
							</div>
						</div>
						<button type="button" class="btn btn-primary mr-2" id="check">Check</button>
						<button type="button" class="btn btn-secondary" id="pause">Pause</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div id="result" class="mt-3" style="display:none;">
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header">
						LIVE &nbsp; <span class="badge badge-success badge-counter" id="live-count" style="color:white">0</span>
						<span class="float-right">
							<button type="button" onclick="selectText('acc-live')" class="btn btn-sm btn-success">Select All</button>
							<button type="button" id="live" class="btn btn-sm btn-primary text-light">Hide</button>
						</span>
					</div>
					<div class="card-body" id="acc-live"></div>
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header">
						DIE &nbsp; <span class="badge badge-danger badge-counter" id="die-count" style="color:white">0</span>
						<span class="float-right">
							<button type="button" id="die" class="btn btn-sm btn-primary text-light">Hide</button>
						</span>
					</div>
					<div class="card-body" id="acc-die"></div>
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header">
						WRONG &nbsp; <span class="badge badge-warning badge-counter" id="wrong-count" style="color:white">0</span>
						<span class="float-right">
							<button type="button" id="wrong" class="btn btn-sm btn-primary text-light">Hide</button>
						</span>
					</div>
					<div class="card-body" id="acc-wrong"></div>
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header">
						SOCKS DIE &nbsp; <span class="badge badge-primary badge-counter" id="bad-count" style="color:white">0</span>
						<span class="float-right">
							<button type="button" id="bad" class="btn btn-sm btn-primary text-light">Hide</button>
						</span>
					</div>
					<div class="card-body" id="acc-bad"></div>
				</div>
			</div>
		</div>
	</div>
</div>
