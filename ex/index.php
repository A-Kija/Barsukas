<?php

function inverse($x) {
    if ($x === 0) {
        throw new Exception('Division by zero.'); // programuotojo pranesimas kitam programuotojui
    }
    return 1/$x;
}





// try {
//     echo inverse(5) . '<br>';
//     echo inverse(0) . '<br>';
// } 
// catch (Exception $e) { // Petro sprendimas ka daryt
//     _d($e);

//     echo 'Caught exception: ',  $e->getMessage(), '<br>';
    
// }


try {
    echo inverse(5) . '<br>';
} 
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), '<br>';
} 
finally {
    echo "Second finally.<br>";
}

// Continue execution
echo "Hello World<br>";