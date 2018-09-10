<?php

//echo encodeURIComponent("\u9996\u9875\u70b9\u51fb");

// function str_from_unicode($str, $out_charset = 'gbk') {

//     $str = preg_replace_callback("|&#([0-9]{1,5});|", 'unicode2utf8_', $str);

//     $str = iconv("UTF-8", $out_charset, $str);

//     return $str;

// }

// function unescape($str, $charset = 'utf-8') {

//     $str = rawurldecode($str);

//     preg_match_all("/(?:%u.{4})|.{4};|&#d+;|.+/U", $str, $r);

//     $ar = $r[0];

//     foreach ($ar as $k => $v) {

//         if (substr($v,0,2) == "%u")

//             $ar[$k] = iconv("UCS-2", $charset, pack("H4",substr($v,-4)));

//         elseif (substr($v, 0, 3) == "")

//             $ar[$k] = iconv("UCS-2", $charset, pack("H4", substr($v, 3, -1)));

//         elseif (substr($v,0,2) == "&#") {

//             echo substr($v,2,-1) . "";

//             $ar[$k] = iconv("UCS-2", $charset, pack("n", substr($v, 2, -1)));

//         }

//     }

//  	echo 1;

//     return join("", $ar);

// }

// $as = unescape("\u9996\u9875\u70b9\u51fb");
// var_dump($as);

//PHP解码unicode编码的中文字符2018-8-1 17:37:45
//咱将上述方案A给封装起来~~~(方案A稳定版+升级+推荐)
class Helper_Tool
{
    static function unicodeDecode($data)
    {  
        function replace_unicode_escape_sequence($match) {
            return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
        }  
 
        $rs = preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $data);
 
        return $rs;
    }  
}
//调用
$name = '\u65b0\u6d6a\u5fae\u535a';
$name = "\u7ad9\u5185\u641c\u7d22"."\u76f4\u63a5\u641c\u7d22"."\u6e38\u620f\u7c7b\u522b\u7edf\u8ba1-"."\u6e38\u620f\u7c7b\u522b\u7edf\u8ba1-";
$name = "\u8bf7\u5148\u9009\u62e9\u6e38\u620f...";
$name = "\u5728\u8f93\u5165\u6846\u5185\u6b63\u786e\u8f93\u5165\u6e38\u620f\u540d\u79f0\u4e2d\u4efb\u610f\u6c49\u5b57\u3001\u4efb\u610f\u4e24\u5b57\u62fc\u97f3\u5168\u62fc\u6216\u8005\u5b57\u6bcd\uff1b";
$name = "\u6211\u4eec\u53d1\u6398\u4e86\u865a\u62df\u7269\u54c1\u4ea4\u6613\u884c\u4e1a\uff0c\u5e76\u4e00\u76f4\u5f15\u9886\u5b83\u524d\u8fdb\uff01\uff01";
$data = Helper_Tool::unicodeDecode($name); //输出新浪微博
echo $data;
//echo $name;
function UnicodeEncode($str){
    //split word
    preg_match_all('/./u',$str,$matches);
 
    $unicodeStr = "";
    foreach($matches[0] as $m){
        //拼接
        $unicodeStr .= "&#".base_convert(bin2hex(iconv('UTF-8',"UCS-4",$m)),16,10);
    }
    return $unicodeStr;
}
 
//$str = "啊啊啊啊";
echo UnicodeEncode($str);