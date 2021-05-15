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
                                    <center><h6 class="m-0 font-weight-bold text-primary"><?php if ( !$judul ){ echo ''; } else { echo $judul . '';} ?></h6></center>
                                </div>
<center>
<form action="<?php $_PHP_SELF; ?>" method="POST">
  Jangan gunakan http / https
<input type="text" name="domain" class="form-control" autocomplete="off" placeholder="domain.com" value="<?php echo htmlspecialchars($_POST['domain']); ?>">	
<br>
<input type="submit" name="submit" class="btn btn-outline-info" value="GO" />
<?php

$wordlist = array("www", "tools", "forum", "blog", "mail", "ftp", "localhost", "webmail", "clientaera","mirror","source","mega","ns1","ns2","game", "io", "smtp", "pop", "ns1", "webdisk", "ns2", "cpanel","4d","challenge","ctf","tester","clue","vps", "whm", "autodiscover", "autoconfig", "m", "imap", "test", "ns", "blog", "pop3", "dev", "www2", "admin", "forum", "news", "vpn", "ns3", "mail2", "new", "mysql", "old", "lists", "support", "mobile", "mx", "static", "docs", "beta", "shop", "sql", "secure", "demo", "cp", "calendar", "wiki", "web", "media", "email", "images", "img", "www1", "intranet", "portal", "video", "sip", "dns2", "api", "cdn", "stats", "dns1", "ns4", "www3", "dns", "search", "staging", "server", "mx1", "chat", "wap", "my", "svn", "mail1", "sites", "proxy", "ads", "host", "crm", "cms", "backup", "mx2", "lyncdiscover", "info", "apps", "download", "remote", "db", "forums", "store", "relay", "files", "newsletter", "app", "live", "owa", "en", "start", "sms", "office", "exchange", "ipv4");

$domain = $_POST['domain'];
$protokol = 'http';
if (isset($_POST['submit']))
{
if ($domain)
{
echo '<br><p>Result:</p><br>';
foreach($wordlist as $sub)
{
$subdomain = $protokol.'://'.$sub.'.'.$domain;
$ch = curl_init($subdomain);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if ($httpcode == '200')
{
echo '<div class="alert alert-success">' . $subdomain . '</div>';
}
} //foreach
} 
}
?>
<tr>
</tr></center>

</div>
                            </div> </div>
                                
            <!-- End of Main Content -->
<?php include'helixdata/footer.php' ?>