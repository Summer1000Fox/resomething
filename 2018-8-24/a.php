<?php
/**
 * Created by S1Fox's PhpStorm.
 * User: S1Fox
 * Date: 2018/8/24 0024
 * Time: 8:31
 * Purpose&Description:
 */
function safeDate($date){
    $date = get_request_filter($date,1);
    if(is_array(date)){
        foreach (date as $key => $value){
            $date[$key] = addslashes(trim($value));
        }
    }else{
        $date = addslashes(trim($date));
    }



    return $date;

}

function get_request_filter($get = '', $type = 0)
{
    if ($get && $type) {
        foreach ($get as $key => $row) {
            $preg = '/<script[\\s\\S]*?<\\/script>/i';
            if ($row && !is_array($row)) {
                $lower_row = strtolower($row);
                $lower_row = (!empty($lower_row) ? preg_replace($preg, '', stripslashes($lower_row)) : '');

                if (strpos($lower_row, '</script>') !== false) {
                    $get[$key] = compile_str($lower_row);
                } else if (strpos($lower_row, 'alert') !== false) {
                    $get[$key] = '';
                } else {
                    if ((strpos($lower_row, 'updatexml') !== false) || (strpos($lower_row, 'extractvalue') !== false) || (strpos($lower_row, 'floor') !== false)) {
                        $get[$key] = '';
                    } else {
                        $get[$key] = make_semiangle($row);
                    }
                }
            } else {
                $get[$key] = $row;
            }
        }
    } else if ($_REQUEST) {
        foreach ($_REQUEST as $key => $row) {
            $preg = '/<script[\\s\\S]*?<\\/script>/i';
            if ($row && !is_array($row)) {
                $lower_row = strtolower($row);
                $lower_row = (!empty($lower_row) ? preg_replace($preg, '', stripslashes($lower_row)) : '');

                if (strpos($lower_row, '</script>') !== false) {
                    $_REQUEST[$key] = compile_str($lower_row);
                } else if (strpos($lower_row, 'alert') !== false) {
                    $_REQUEST[$key] = '';
                } else {
                    if ((strpos($lower_row, 'updatexml') !== false) || (strpos($lower_row, 'extractvalue') !== false) || (strpos($lower_row, 'floor') !== false)) {
                        $_REQUEST[$key] = '';
                    } else {
                        $_REQUEST[$key] = make_semiangle($row);
                    }
                }
            } else {
                $_REQUEST[$key] = $row;
            }
        }
    }

    if ($get && ($type == 1)) {
        $_POST = $get;
        return $_POST;
    } else {
        if ($get && ($type == 2)) {
            $_GET = $get;
            return $_GET;
        } else {
            return $_REQUEST;
        }
    }
}

function make_semiangle($str)
{
    $arr = array('０' => '0', '１' => '1', '２' => '2', '３' => '3', '４' => '4', '５' => '5', '６' => '6', '７' => '7', '８' => '8', '９' => '9', 'Ａ' => 'A', 'Ｂ' => 'B', 'Ｃ' => 'C', 'Ｄ' => 'D', 'Ｅ' => 'E', 'Ｆ' => 'F', 'Ｇ' => 'G', 'Ｈ' => 'H', 'Ｉ' => 'I', 'Ｊ' => 'J', 'Ｋ' => 'K', 'Ｌ' => 'L', 'Ｍ' => 'M', 'Ｎ' => 'N', 'Ｏ' => 'O', 'Ｐ' => 'P', 'Ｑ' => 'Q', 'Ｒ' => 'R', 'Ｓ' => 'S', 'Ｔ' => 'T', 'Ｕ' => 'U', 'Ｖ' => 'V', 'Ｗ' => 'W', 'Ｘ' => 'X', 'Ｙ' => 'Y', 'Ｚ' => 'Z', 'ａ' => 'a', 'ｂ' => 'b', 'ｃ' => 'c', 'ｄ' => 'd', 'ｅ' => 'e', 'ｆ' => 'f', 'ｇ' => 'g', 'ｈ' => 'h', 'ｉ' => 'i', 'ｊ' => 'j', 'ｋ' => 'k', 'ｌ' => 'l', 'ｍ' => 'm', 'ｎ' => 'n', 'ｏ' => 'o', 'ｐ' => 'p', 'ｑ' => 'q', 'ｒ' => 'r', 'ｓ' => 's', 'ｔ' => 't', 'ｕ' => 'u', 'ｖ' => 'v', 'ｗ' => 'w', 'ｘ' => 'x', 'ｙ' => 'y', 'ｚ' => 'z', '（' => '(', '）' => ')', '〔' => '[', '〕' => ']', '【' => '[', '】' => ']', '〖' => '[', '〗' => ']', '“' => '[', '”' => ']', '‘' => '[', '’' => ']', '｛' => '{', '｝' => '}', '《' => '<', '》' => '>', '％' => '%', '＋' => '+', '—' => '-', '－' => '-', '～' => '-', '：' => ':', '。' => '.', '、' => ',', '，' => '.', '、' => '.', '；' => ',', '？' => '?', '！' => '!', '…' => '-', '‖' => '|', '”' => '"', '’' => '`', '‘' => '`', '｜' => '|', '〃' => '"', '　' => ' ', '<' => '＜', '>' => '＞');
    return strtr($str, $arr);
}


$a = safeDate($_POST,1);
$PrData =& $a;
echo "<pre style='background-color:#6cf;'>";
echo "在".__FILE__."第",__LINE__+1,"行中打印\$".array_search($PrData,$GLOBALS,true)."<br>";
print_r($PrData);
echo "</pre>";
die();

$_POST['name'] = addslashes(trim($_POST['name']));
$PrData =& $_POST;
echo "<pre style='background-color:#6cf;'>";
echo "在".__FILE__."第",__LINE__+1,"行中打印\$".array_search($PrData,$GLOBALS,true)."<br>";
print_r($PrData);
echo "</pre>";