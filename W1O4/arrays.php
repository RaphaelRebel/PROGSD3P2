<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => " "
 );
    
    echo '<pre>';
var_dump($aanhef);
echo '</pre>';


$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[product]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);
echo '<pre>';
var_dump($korting);
echo '</pre>';


$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "",
  "functie" => "Directeur Webshop beheer"
);

echo '<pre>';
var_dump($ondertekening);
echo '</pre>';

/*
 * Opdracht 1:
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()
 */

/*
 * Opdracht 2:
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */
$klant = 'klant';
$onlyconsonants2 = str_replace( $aanhef["persoon"], $klant, $aanhef) ;
echo '<pre>';
var_dump($onlyconsonants2);
echo '</pre>';





/*
 * Opdracht 3:
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */

 $product = "[[product]]";
 $echtProduct = "chocolade";
 $productie = str_replace($product, $echtProduct, $korting);
 
 echo '<pre>';
var_dump($productie);
echo '</pre>';
/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */

$aanbieding = array_merge($onlyconsonants2, $productie, $ondertekening);


/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */

echo '<pre>';
var_dump($aanbieding);
echo '</pre>';