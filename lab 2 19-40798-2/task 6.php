<?php
    function search($arr, $x) {
        for($i = 0; $i < sizeof($arr); $i++) {
            if($arr[$i] == $x) return $i;
        }
        return -1;
    }
    $arr = array(4, 2, 5, 6, 14, 7, 15, 3);
    echo "the following element is in index :",search($arr, 14);
  
?>