<?php
/**
 * Created by S1Fox's PhpStorm.
 * User: S1Fox
 * Date: 2018/9/9 0009
 * Time: 14:42
 * Purpose&Description:
 * You are not expected to understand this.
 */

include ('simple_html_dom.php');

// 新建一个Dom实例
$html = new simple_html_dom();

// 从url中加载
$html->load_file('http://localhost/test/2018-09-08/jsDom.html');

//查找html文档中的超链接元素
$a = $html->find('a');

$PrData =& $a;
echo "<pre style='background-color:#6cf;'>";
echo "在".__FILE__."第",__LINE__+1,"行中打印\$".array_search($PrData,$GLOBALS,true)."<br>";
print_r($PrData);
echo "</pre>";