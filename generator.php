<?php
$judul=@Hash_Generator;
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
					<h6 class="card-title">Hash Generator</h6>
					<form class="needs-validation" novalidate method="post" action="">
						<div class="form-group">
							<label for="exampleInputEmail1">Keyword</label>
							<input type="text" name="resources" id="" class="form-control" required="">
							<div class="valid-feedback">Generating...!!</div>
							<div class="invalid-feedback">Keyword can't be empty!!</div>
						</div>
						<button type="submit" class="btn btn-primary mr-2" name="encode">Generate</button>
					</form>
	      </div>
	    </div>
		</div>
		<?php 
			if (isset($_POST['resources']) && !empty($_POST['resources'])) : 
				$ex = htmlspecialchars($_POST['resources']);
		?>
		<div class="col-md-6 grid-margin">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Result</h6>
					<div class="table-responsive">
						<table class="table table-hover table-striped">
							<tbody>
								<tr>
									<th>Keyword</th>
									<td>:</td>
									<td><?= $ex; ?></td>
								</tr>
								<tr>
									<th>MD2</th>
									<td>:</td>
									<td><?= hash('md2', $ex); ?></td>
								</tr>
								<tr>
									<th>MD4</th>
									<td>:</td>
									<td><?= hash('md4', $ex); ?></td>
								</tr>
								<tr>
									<th>MD5</th>
									<td>:</td>
									<td><?= md5($ex); ?></td>
								</tr>
								<tr>
									<th>SHA1</th>
									<td>:</td>
									<td><?= sha1($ex); ?></td>
								</tr>
								<tr>
									<th>SHA224</th>
									<td>:</td>
									<td><?= hash('sha224', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA256</th>
									<td>:</td>
									<td><?= hash('sha256', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA384</th>
									<td>:</td>
									<td><?= hash('sha384', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA512/224</th>
									<td>:</td>
									<td><?= hash('sha512/224', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA512/256</th>
									<td>:</td>
									<td><?= hash('sha512/256', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA512</th>
									<td>:</td>
									<td><?= hash('sha512', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA3-224</th>
									<td>:</td>
									<td><?= hash('sha3-224', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA3-256</th>
									<td>:</td>
									<td><?= hash('sha3-256', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA3-384</th>
									<td>:</td>
									<td><?= hash('sha3-384', $ex); ?></td>
								</tr>
								<tr>
									<th>SHA3-512</th>
									<td>:</td>
									<td><?= hash('sha3-512', $ex); ?></td>
								</tr>
								<tr>
									<th>RIPEMD128</th>
									<td>:</td>
									<td><?= hash('ripemd128', $ex); ?></td>
								</tr>
								<tr>
									<th>RIPEMD160</th>
									<td>:</td>
									<td><?= hash('ripemd160', $ex); ?></td>
								</tr>
								<tr>
									<th>RIPEMD256</th>
									<td>:</td>
									<td><?= hash('ripemd256', $ex); ?></td>
								</tr>
								<tr>
									<th>RIPEMD320</th>
									<td>:</td>
									<td><?= hash('ripemd320', $ex); ?></td>
								</tr>
								<tr>
									<th>WHIRLPOOL</th>
									<td>:</td>
									<td><?= hash('whirlpool', $ex); ?></td>
								</tr>
								<tr>
									<th>TIGER128,3</th>
									<td>:</td>
									<td><?= hash('tiger128,3', $ex); ?></td>
								</tr>
								<tr>
									<th>TIGER160,3</th>
									<td>:</td>
									<td><?= hash('tiger160,3', $ex); ?></td>
								</tr>
								<tr>
									<th>TIGER192,3</th>
									<td>:</td>
									<td><?= hash('tiger192,3', $ex); ?></td>
								</tr>
								<tr>
									<th>TIGER128,4</th>
									<td>:</td>
									<td><?= hash('tiger128,4', $ex); ?></td>
								</tr>
								<tr>
									<th>TIGER160,4</th>
									<td>:</td>
									<td><?= hash('tiger160,4', $ex); ?></td>
								</tr>
								<tr>
									<th>TIGER192,4</th>
									<td>:</td>
									<td><?= hash('tiger192,4', $ex); ?></td>
								</tr>
								<tr>
									<th>SNEFRU</th>
									<td>:</td>
									<td><?= hash('snefru', $ex); ?></td>
								</tr>
								<tr>
									<th>GOST</th>
									<td>:</td>
									<td><?= hash('gost', $ex); ?></td>
								</tr>
								<tr>
									<th>GOST-CRYPTO</th>
									<td>:</td>
									<td><?= hash('gost-crypto', $ex); ?></td>
								</tr>
								<tr>
									<th>ADLER32</th>
									<td>:</td>
									<td><?= hash('adler32', $ex); ?></td>
								</tr>
								<tr>
									<th>CRC32</th>
									<td>:</td>
									<td><?= hash('crc32', $ex); ?></td>
								</tr>
								<tr>
									<th>CRC32B</th>
									<td>:</td>
									<td><?= hash('crc32b', $ex); ?></td>
								</tr>
								<tr>
									<th>FNV132</th>
									<td>:</td>
									<td><?= hash('fnv132', $ex); ?></td>
								</tr>
								<tr>
									<th>FNV1A32</th>
									<td>:</td>
									<td><?= hash('fnv1a32', $ex); ?></td>
								</tr>
								<tr>
									<th>FNV164</th>
									<td>:</td>
									<td><?= hash('fnv164', $ex); ?></td>
								</tr>
								<tr>
									<th>FNV1A64</th>
									<td>:</td>
									<td><?= hash('fnv1a64', $ex); ?></td>
								</tr>
								<tr>
									<th>JOAAT</th>
									<td>:</td>
									<td><?= hash('joaat', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL128,3</th>
									<td>:</td>
									<td><?= hash('haval128,3', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL160,3</th>
									<td>:</td>
									<td><?= hash('haval160,3', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL192,3</th>
									<td>:</td>
									<td><?= hash('haval192,3', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL224,3</th>
									<td>:</td>
									<td><?= hash('haval224,3', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL256,3</th>
									<td>:</td>
									<td><?= hash('haval256,3', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL128,4</th>
									<td>:</td>
									<td><?= hash('haval128,4', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL160,4</th>
									<td>:</td>
									<td><?= hash('haval160,4', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL192,4</th>
									<td>:</td>
									<td><?= hash('haval192,4', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL224,4</th>
									<td>:</td>
									<td><?= hash('haval224,4', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL256,4</th>
									<td>:</td>
									<td><?= hash('haval256,4', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL128,5</th>
									<td>:</td>
									<td><?= hash('haval128,5', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL160,5</th>
									<td>:</td>
									<td><?= hash('haval160,5', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL192,5</th>
									<td>:</td>
									<td><?= hash('haval192,5', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL224,5</th>
									<td>:</td>
									<td><?= hash('haval224,5', $ex); ?></td>
								</tr>
								<tr>
									<th>HAVAL256,5</th>
									<td>:</td>
									<td><?= hash('haval256,5', $ex); ?></td>
								</tr>
								
								
								
								<tr>
									<th>BINARY</th>
									<td>:</td>
									<td><?php $a = new Base2n(1); echo $a->encode($ex); ?></td>
								</tr>
								<tr>
									<th>QUATERNARY</th>
									<td>:</td>
									<td><?php $a = new Base2n(2); echo $a->encode($ex); ?></td>
								</tr>
								<tr>
									<th>OCTAL</th>
									<td>:</td>
									<td><?php $a = new Base2n(3); echo $a->encode($ex); ?></td>
								</tr>
								<tr>
									<th>HEX</th>
									<td>:</td>
									<td><?php $a = new Base2n(4); echo $a->encode($ex); ?></td>
								</tr>
								<tr>
									<th>BASE32</th>
									<td>:</td>
									<td><?php $a = new Base2n(5); echo $a->encode($ex); ?></td>
								</tr>
								<tr>
									<th>BASE64</th>
									<td>:</td>
									<td><?= base64_encode($ex); ?></td>
								</tr>
								<tr>
									<th>ROT13</th>
									<td>:</td>
									<td><?= str_rot13($ex); ?></td>
								</tr>
								<tr>
									<th>BCRYPT</th>
									<td>:</td>
									<td><?= password_hash($ex, PASSWORD_BCRYPT); ?></td>
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
