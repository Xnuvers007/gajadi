<?php
$judul=@Live_Coding;
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
				    			<link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
				    			<style>
				    				#result{
				    				resize:none;
				    				width:500px;
				    				height:500px;
				    			}
				    			h1{
				    				font-size: 40px;
				    			}
				    			iframe{
				    				background-color: white;
				    				color: black;
				    				resize: none;
				    				font-family: 'Teko',sans-serif;
				    				width: 500px;
				    				height: 500px;
				    			}
				    			textarea{
				    				width: 500px;
				    				height: 500px;
				    				color: black;
				    			}
				    		</style>
				    		<center>
				    			<br>
				    			<div class="card-body">
				    				<textarea rows="8" id="TextEditor" onkeyup="RunCode()" autofocus="autofocus">
				    				</textarea>
				    			</div>
				    			<br><hr color="white">
				    			<div class="container">
				    				<div class="row">
				    				</div>
				    				<br><iframe id="result"></iframe>
				    			</div>
				    		</div>
				    		</center>
				    		</table>
				    	</center>
				    </div>
	<script>
		function RunCode() {
			var CodeText = document.getElementById('TextEditor').value;
			document.getElementById('result').srcdoc = CodeText;
		}
	</script><br>
</center><br>
                             
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>