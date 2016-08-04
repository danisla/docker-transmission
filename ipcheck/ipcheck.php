<?php
$resp = json_decode(file_get_contents("http://jsonip.com"), true);
$ip = $resp['ip'];
echo gethostbyaddr($ip);
?>
