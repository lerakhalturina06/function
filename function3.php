<?php
function mostRecent($text) {
    
    if (strlen($text) > 1000) {
        $text = substr($text, 0, 1000);
    }
    
    
    $text = strtolower($text);
    $words = str_word_count($text, 1);
    

    $wordCount = array_count_values($words);
    
    
    arsort($wordCount);
    
    
    return key($wordCount);
}


$text = "Это тестовый текст. Текст содержит несколько слов. Текст должен быть проанализирован.";
$mostFrequent = mostRecent($text);
echo "Самое частое слово: " . $mostFrequent; 
?>