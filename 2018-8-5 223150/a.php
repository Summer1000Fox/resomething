<?php
$app_key = "A1D0C706-6532-4D6A-B052-FB560C29E033";
$url = "http://localhost/dscnn";
$url .= "/api.php?app_key=".$app_key."&method=dsc.user.list.get&format=xml";
//$url="http(s)://www.xxx.com/api.php?app_key=A788F457-1A7D-4CC7-ABA0-BFE212BCCD9A&method=dsc.user.list.get&format=xml"
echo $url;
//$Http = new Http();
//$Http->doGet($url);