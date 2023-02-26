
<?php 
function longestWord($str){
    $words =explode(" ", $str);
    $long_word = $words[0];
    foreach($words as $word){
        if(strlen($word)>strlen($long_word)){
            $long_word=$word;
        }
    }
    return $long_word;
}
$str  = "The quick brown fox jumped over the lazy dog";
echo longestWord($str);
