<?php
/**
 * Created by S1Fox's PhpStorm.
 * User: S1Fox
 * Date: 2018/8/22 0022
 * Time: 16:51
 * Purpose&Description:
 */

class sample implements Iterator
{
    private $_items = array(1,2,3,4,5,6,7);
    public function __construct() {
        ;//void
    }

    public function rewind() { reset($this->_items); }
    public function current() { return current($this->_items); }
    public function key() { return key($this->_items); }
    public function next() { return next($this->_items); }
    public function valid() { return ( $this->current() !== false ); }
}
$sa = new sample();
foreach($sa as $key => $val) {
    print $key . "=>" . $val;
    echo "<hr>";
}