<?php

$nilai = 100;

// if ($nilai < 7) {
//     echo "JELEK";
// } else if ($nilai > 8 && $nilai < 10) {
//     echo "SEDENG";
// } else {
//     echo "BAGUS";
// }

if ($nilai < 70) :
    echo "JELEK";
elseif ($nilai > 80 && $nilai < 100) :
    echo "SEDENG";
else:
    echo "BAGUS";
endif;

// switch ($nilai) {
//     case 50:
//         echo "nilainya 50";
//         break;

//     case 70:
//         echo "nilainya 100";
//         break;

//     case 100:
//         echo "nilainya 100";
//         break;
// }

switch ($nilai):
    case 50:
        echo "nilainya 50";
        break;

    case 70:
        echo "nilainya 100";
        break;

    case 100:
        echo "nilainya 100";
        break;
endswitch;
