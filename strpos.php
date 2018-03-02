<?php
require 'common.php';
for($t = 0; $t < 10000; $t++) {
    foreach($table as $i => $digits) {
        $contact_pointer = 0;
        for($input_pointer = 0; $input_pointer < strlen($input); $input_pointer++) {
            $pos = strpos($digits, $input[$input_pointer], $contact_pointer);
            if($pos === false) break 2;
            $contact_pointer = $pos + 1;
        }
        echo $contacts[$i] . PHP_EOL;
    }
}
