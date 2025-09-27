<?php
function mostRecent($text) {
    $cleanedText = preg_replace('/[^\w\s]/', '', strtolower($text));
    
    $words = preg_split('/\s+/', $cleanedText, -1, PREG_SPLIT_NO_EMPTY);
    
    $frequency = array_count_values($words);
    
    $maxCount = 0;
    $maxWord = '';
    
    foreach ($frequency as $word => $count) {
        if ($count > $maxCount || ($count == $maxCount && $word > $maxWord)) {
            $maxWord = $word;
            $maxCount = $count;
        }
    }
    
    return $maxWord;
}

$text = 'Hello world hello there world hello';
echo mostRecent($text); 
?>
?>