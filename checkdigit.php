
<?php


$inputNumber=rand(-10000, 10000);
$numberConvert = (string)$inputNumber;
$numberSize = strlen($numberConvert);

echo "Nombre en entrée : " . $inputNumber;

if ($inputNumber>0) {
	while ( $numberSize > 1) {
		$divid = variant_int($inputNumber/10);
		$modul = $inputNumber%10;
		$result = $divid + $modul;
		$inputNumber = $result;
		$numberConvert = (string)$inputNumber;
		$numberSize = strlen($numberConvert);
	}
	echo " - Résultat : " . $result;
} 
else {
	echo "  - Calcul impossible. Rafraichissez la page pour un autre résultat";
}







