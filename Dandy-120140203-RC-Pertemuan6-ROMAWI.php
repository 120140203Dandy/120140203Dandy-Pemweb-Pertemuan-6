<?php
function romawi($angka) {
    $map = array(   'M' => 1000, 'CM' => 900, 
                    'D' => 500, 'CD' => 400, 
                    'C' => 100, 'XC' => 90, 
                    'L' => 50, 'XL' => 40, 
                    'X' => 10, 'IX' => 9, 
                    'V' => 5, 'IV' => 4, 
                    'I' => 1
                );
    $returnValue = '';
    while ($angka > 0) {
        foreach ($map as $roman => $int) {
            if($angka >= $int) {
                $angka -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}
echo romawi(2001)
?>