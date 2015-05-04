<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
<?php
require 'states.php';
$states = $us_state_abbrevs_names['states'];
$state_indexes = array();
$state_values = array();

foreach ($states as $key_of_state => $value_of_state) {
    $state_indexes[] = $key_of_state;
    $state_values[] = $value_of_state;
}

sort($state_indexes);
sort($state_values);
$new_states = array();
$i = 0;

foreach ($state_indexes as $state_index) {
    $new_states[$state_index] = $state_values[$i];
    $i++;
}

var_dump($new_states);
$countries = $us_state_abbrevs_names['countries'];
rsort($countries);
var_dump($countries);
?>
         </pre>
    </body>
</html>
