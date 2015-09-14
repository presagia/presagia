<?php 
$ip=ip2long($_SERVER["REMOTE_ADDR"]);
$ip1=ip2long("173.246.70.202");
$ip2=ip2long("66.159.44.34");
if (!isset($_GET["proxy"])){
    exit;
}
?>
function FindProxyForURL(url, host){
<?php
    if ($ip1!=$ip){ ?>
    if ( shExpMatch(host, "*-clone.presagia.com") || dnsDomainIs(host, "sutterhealth.presagia.com")){
        return "PROXY 10.25.1.10:8880"
    }
<?php } ?>
    return "DIRECT";
}
