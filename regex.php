<?php
require 'common.php';
$regex = '/' . join('.*', str_split($input)) . '/';
for($t = 0; $t < 10000; $t++) {
    foreach($table as $i => $digits) {
        if(preg_match($regex, $digits)) {
            echo $contacts[$i] . PHP_EOL;
        }
    }
}
