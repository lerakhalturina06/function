<?php
function findPerfectNumber($arr) {
    $perfectNumbers = [];
    
    foreach ($arr as $number) {
        if ($number <= 0) continue;
        
        $sum = 0;
        for ($i = 1; $i <= $number / 2; $i++) {
            if ($number % $i == 0) {
                $sum += $i;
            }
        }
       
        if ($sum == $number) {
            $perfectNumbers[] = $number;
        }
    }
    
    return $perfectNumbers;
}


$numbers = [6, 28, 12, 496, 8, 8128, 10];
$perfectNumbers = findPerfectNumber($numbers);
echo "Идеальные числа: " . implode(', ', $perfectNumbers); 
?>