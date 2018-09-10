<?php
$letter_cat_list = array('ア', 'カ', 'サ', 'タ', 'ナ', 'ハ', 'マ', 'ヤ', 'ラ', 'ワ');
    foreach($letter_cat_list as $letter_cat){
        $categories_tree[$letter_cat] = array();
    }

    var_dump($categories_tree);