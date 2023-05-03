<?php 
$paragraph = $_POST['paragrafo'];
$word = $_POST['parola'];

// stampo a schermo il paragrafo e la sua lunghezza:
echo "Paragrafo originale: $paragraph <br>";
echo "Lunghezza del paragrafo: " . strlen($paragraph) . " caratteri <br>";

// sostituisco la parola censurata con i tre asterischi (***)
$paragraph_censored = str_replace($word, '***', $paragraph);

// stampo a schermo il paragrafo censurato e la sua lunghezza
echo "Paragrafo censurato: $paragraph_censored <br>";
echo "Lunghezza del paragrafo censurato: " . strlen($paragraph_censored) . " caratteri <br>";
?>