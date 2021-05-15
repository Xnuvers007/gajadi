<!DOCTYPE html>
<html>
<head>
<title>!] Tools Bot Tulis KCT !]</title>
<!-- Meta Data -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="Tools Bot Rulis">
<!-- Icon -->
<link rel="icon" href="https://d.top4top.io/p_1684nne8u1.jpg">
<style>
        body{
            background: #333; color: white;
        }
    </style>
</head>

<body>
<div class="head">
  <center>
    <h1> Tools Bot Tulis KCT-SEC 45 </h1>
    <img src="https://d.top4top.io/p_1684nne8u1.jpg" width="200" alt="">
<br>
                   <div class="tile">
                        <div class="tile-body" id="iyan">
                        </div>
                        </div>
                        <div class="tile">
                        <div class="tile-body">
                        <br>
                        <textarea id='iyan1' class="form-control" placeholder="Masukan Text Yang Ingin Di Tulis !!" rows="10"></textarea>
                        </div>
                        </div>		
                        <div class="tile">
                        <div class="row">
                        </div>
                        <div class="col">
                        <input type='button' onclick="buat()"  value="TULIS" id='button' class="btn btn-danger btn-block">
                        </div>
                        </div>
                        </div>
                        </center>
                        <script>
                                function buat() {
                                    var xhr = new XMLHttpRequest();
                                    var gans = encodeURIComponent(document.getElementById("iyan1").value);
                                    var url = "https://tools.zone-xsec.com/api/nulis.php?q="+gans;
                        
                                    xhr.onloadstart = function () {
                                        document.getElementById("button").innerHTML = "Loading...";
                                    }
                        
                                    xhr.onerror = function () {
                                        alert("Gagal mengambil data");
                                    };
                        
                                    xhr.onloadend = function () {
                                        if (this.responseText !== "") {
                                            //alert(encodeURIComponent(gans));
                                            var data = JSON.parse(this.responseText);
                                            var img = document.createElement("img");
                                      img.setAttribute("width", "304");
                                            img.src = data.image;
                                            var name = document.createElement("h3");
                                            name.innerHTML = data.status;
                                          if (data.status == 'Error'){
                                             alert('Error');
                                             alert('Harap masukan input dengan benar!');
                                          }else{
                                            document.getElementById("iyan").append(img);
                        
                                            setTimeout(function () {
                                                document.getElementById("button").innerHTML = "Buat Lagi";
                                            }, 3000);
                                          }
                                        }
                                    };
                                    xhr.open("GET", url, true);
                                    xhr.send();
                                }
                        
                                function clearResult() {
                                    document.getElementById("iyan").innerHTML = "";
                                }
                        </script>
                   </div>
              </div>                        </div>

                   </div>

               </div>
               <!-- /.container-fluid -->

           </div>
           <!-- End of Main Content -->

           <!-- Footer -->
           <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                   <div class="copyright text-center my-auto">
                    
                   </div>
               </div>
           </footer>
           <!-- End of Footer -->

       </div>
       <!-- End of Content Wrapper -->

   </div>
   <!-- End of Page Wrapper -->
   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="js/sb-admin-2.min.js"></script>

</center>




<br>
<br>
<footer style="text-shadow: 0 0 6px #FF0000, 0 0 5px #FF0000, 0 0 5px #FF0000; position:fixed; left:1px; right:0px; top:0px; border-bottom: 3px solid Red ;">
    <center><b><font face="Quicksand" color="black" size="5" style="text-shadow: 0 0 5px #2f2b2b, 0 0 100px #2f2b2b, 0 0 20px #2f2b2b, 0 0 100px #2f2b2b, 0 0 40px #2f2b2b;">
    <font face="Agency FB" color="Red" size="10" style="text-shadow: 0 0 6px black, 0 0 5px black, 0 0 5px black;">

</body>
</html>