 <?php

$memcache = new Memcache;

$memcache->connect("127.0.0.1",11211);

echo "Memcached's version: " . $memcache->getVersion() . "<br/>";

$data = array(

	'url'=> "http://www.cnblogs.com/wujuntian/",

	'name' => "天涯"

);

$memcache-> set("info",$data,0,10);

$info = $memcache->get("info");

echo '<pre>';

print_r($info);