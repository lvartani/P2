<?php
//Bring in words from paulnoll.com
$doc = new DOMDocument();
$doc->loadHTML(file_get_contents("words.html"));
$list = $doc->getElementsByTagName('li');
//Create empty word content array
$words_array =[];

//Loop through to get to string values rather than DOM objects, then push to array
foreach ($list as $word) {
    $newlist = "{$word->nodeValue}";
    array_push($words_array, $newlist);
}
//Create arrays for symbols and numbers
$symbols = array("!","@","#","$","%","^","&","*","-","_","+","=");

$numbers = array("0","1","2","3","4","5","6","7","8","9",);

//Set variables for form values and check if it is not null
$input_words = (isset($_GET['number_words']) ? $_GET['number_words'] : null);;
$input_num = (isset($_GET['add_number']) ? $_GET['add_number'] : null);
$input_sym = (isset($_GET['add_symbol']) ? $_GET['add_symbol'] : null);

//Set default number of words to 4 for server-side validation
if ($input_words < 2 || is_numeric($input_words)==false){
    $input_words = 4;
}
//Create array with random words, numbers, and symbols
$sel_random = array_rand($words_array, $input_words);
for ($i = 0; $i < $input_words; $i++){
    echo $words_array[$sel_random[$i]] . "-";
}

if ($input_num == "on"){
    $sel_random = array_rand($numbers, $input_words);
    echo $numbers[$sel_random[0]];
}
else{
    echo "";
}
if ($input_sym == "on"){
    $sel_random = array_rand($symbols, $input_words);
    echo $symbols[$sel_random[0]];
}
else{
    echo "";
}

?>
