<?php
$judul=@SQL_Injection_Lib;
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
					<h6 class="card-title">SQL Injection Lib</h6>
					<ul class="nav nav-tabs">
						<li class="nav-item">
						  <a class="nav-link active" id="soot-tab" data-toggle="tab" href="#soot" role="tab"
						     aria-controls="soot" aria-selected="true">Dump In One Shoot (DIOS)</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="sysv-tab" data-toggle="tab" href="#sysv" role="tab"
						     aria-controls="sysv" aria-selected="false">System Variables</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="OTHERS-tab" data-toggle="tab" href="#OTHERS" role="tab"
						     aria-controls="OTHERS" aria-selected="false">Others</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="waf-tab" data-toggle="tab" href="#waf" role="tab"
						     aria-controls="waf" aria-selected="false">Bypass WAF</a>
						</li>
					</ul>
					
	        <div class="tab-content mt-2">
	          <div class="tab-pane fade show active" id="soot" role="tabpanel" aria-labelledby="soote-tab">
	            <tr>
	            	<td class="text-center">
					        <button onclick="dios1()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1">Dios 1</button> 
					        <button onclick="dios2()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1">Dios 2</button>
					        <button onclick="dios3()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1">Dios 3</button>
					        <button onclick="dios4()" class="btn btn-outline-secondary btn-uppercase  mx-1 my-1">Dios 4</button>
					        <button onclick="xssdios()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1">XssDios </button>
					        <button onclick="trjn()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1"> Trojan 1 </button>
					        <button onclick="trjnx()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1"> Trojan 2 </button>
					        <button onclick="postgre()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1"> Postgre </button>
					        <button onclick="mssql()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1"> Mssql </button>
					        <button onclick="bof()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1"> BOF </button>
					        <button onclick="ebf()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1"> ErrBased </button>
					        <button onclick="poligon()" class="btn btn-outline-secondary btn-uppercase mx-1 my-1"> Poligon </button>
				        </td>
			        </tr>
	          </div>

	          <div class="tab-pane fade" id="sysv" role="tabpanel" aria-labelledby="sysv-tab">
		          <ul>
		          	<td>VERSION </td>
		          	<td class="text-center">
		          		<button onclick="version1()" class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">Version 1</button>
				          <button onclick="version2()" class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">Version 2</button>
				          <button onclick="version3()" class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">Version 3</button>
				          <button onclick="version4()" class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">Version 4</button>
				          <button onclick="version5()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">Version 5</button>
			          </td>
		          </ul>
		
		          <ul>
		          	<td>USER </td>
		          	<td class="text-center">
		          		<button onclick="user1()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">User 1</button>
				          <button onclick="user2()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">User 2</button>
				          <button onclick="user3()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">User 3</button>
				          <button onclick="user4()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">User 4</button>
				          <button onclick="user5()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">User 5</button>
				          <button onclick="user6()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">User 6</button>
			          </td>
		          </ul>
		
		          <ul>
		          	<td>DATABASE </td>
		          	<td class="text-center">
		          		<button onclick="db1()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">Database 1</button>
				          <button onclick="db2()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">Database 2</button>
				          <button onclick="db3()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1">Database 3</button>
			          </td>
		          </ul>
	
	
	
		          <ul>
		          	<td class="text-center">
				          <button onclick="o1()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1"> @@HOSTNAME </button>
				          <button onclick="o2()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1"> @@VERSION_COMPILE_MACHINE </button>
				          <button onclick="o3()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1"> @@VERSION_COMPILE_OS </button>
				          <button onclick="o4()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1"> @@BASEDIR </button>
				          <button onclick="o5()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1"> @@HV_OPENSSL </button>
				          <button onclick="o6()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1"> @@HV_SYMLINK </button>
				          <button onclick="o7()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1"> @@PORT </button>
				          <button onclick="o8()"class="btn btn-outline-warning btn-rounded btn-uppercase mx-1 my-1"> @@SOCKET </button>
			          </td>
		          </ul>
	          </div>
	            
            <div class="tab-pane fade" id="OTHERS" role="tabpanel" aria-labelledby="OTHERS-tab">
              <tr>
              	<td class="text-center">
		              <button onclick="xssqli()"class="btn btn-outline-primary mx-1 my-1"> PopUP </button>
		              <button onclick="kolom()"class="btn btn-outline-primary mx-1 my-1"> Generate Column </button>
		              <button onclick="mydios()"class="btn btn-outline-primary mx-1 my-1"> MyDios </button>
		              <button onclick="hx()"class="btn btn-outline-primary mx-1 my-1"> Hex </button>
		              <button onclick="cn()"class="btn btn-outline-primary mx-1 my-1"> Convert </button>
		              <button onclick="cs()"class="btn btn-outline-primary mx-1 my-1"> Cast </button>
		              <button onclick="cp()"class="btn btn-outline-primary mx-1 my-1"> Compress </button>
		              <button onclick="aes()"class="btn btn-outline-primary mx-1 my-1"> Aes </button>
              	</td>
              </tr>

              <tr>
              	<td class="text-center">
		              <button onclick="dbc()"class="btn btn-outline-primary mx-1 my-1"> Total Databases </button>
		              <button onclick="tottbl()"class="btn btn-outline-primary mx-1 my-1"> Total Tables </button>
		              <button onclick="totcol()"class="btn btn-outline-primary mx-1 my-1"> Total Columns </button>
		              <button onclick="tblc()"class="btn btn-outline-primary mx-1 my-1"> Total Col </button>
		              <button onclick="countdb()"class="btn btn-outline-primary mx-1 my-1"> Count DB </button>
		              <button onclick="about()"class="btn btn-outline-primary mx-1 my-1"> About </button>
              	</td>
              </tr>
            </div>
            
            <div class="tab-pane fade" id="waf" role="tabpanel" aria-labelledby="waf-tab">
              <ul>
              	<td>Union </td>
              	<td class="text-center">
		              <button onclick="union1()"class="btn btn-outline-info mx-1 my-1">Union 1</button>
		              <button onclick="union2()"class="btn btn-outline-info mx-1 my-1">Union 2</button>
		              <button onclick="union3()"class="btn btn-outline-info mx-1 my-1">Union 3</button>
		              <button onclick="union4()"class="btn btn-outline-info mx-1 my-1">Union 4</button>
		              <button onclick="union5()"class="btn btn-outline-info mx-1 my-1">Union 5</button>
		              <button onclick="union6()"class="btn btn-outline-info mx-1 my-1">Union 6</button>
              	</td>
              </ul>

              <ul>
              	<td>Others </td>
              	<td class="text-center">
		              <button onclick="order1()"class="btn btn-outline-info mx-1 my-1">Order by</button>
		              <button onclick="order2()"class="btn btn-outline-info mx-1 my-1">Order by 2</button>
		              <button onclick="userr()"class="btn btn-outline-info mx-1 my-1">User</button>
		              <button onclick="dtba()"class="btn btn-outline-info mx-1 my-1">Databse</button>
		              <button onclick="ver()"class="btn btn-outline-info mx-1 my-1">Version</button>
              	</td>
              </ul>
            </div>
          </div>
					
	      </div>
	    </div>
		</div>
		<div class="col-md-6 grid-margin">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">SQL Injection Lib</h6>
					<div class="form-group">
						<label for="output">Output</label>
						<textarea name="output" id="dios" rows="10" class="form-control"></textarea>
					</div>
					<button class="btn btn-primary" onclick="copy2()">Copy</button>
				</div>
			</div>
		</div>
	</div>
</div>
