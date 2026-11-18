<!DOCTYPE html>
<?php

$identyfikator = [
"glowna" => ["tytul" => "Strona główna", "sciezka" => "html/glowna.html"],
"kontakt" => ["tytul" => "Kontakt", "sciezka" => "html/kontakt.html"],
"produkt" => ["tytul" => "Produkt", "sciezka" => "html/produkt.html"],
"filmy" =>  ["tytul" => "Filmy", "sciezka" => "html/filmy.html"],
"lab4" =>  ["tytul" => "lab4", "sciezka" => "lab4.php"]
];
if (!isset($_GET["idp"])){
		if (is_file(__DIR__."/".$identyfikator["glowna"]["sciezka"]) && is_readable(__DIR__."/".$identyfikator["glowna"]["sciezka"])){
			
			$tytulstrony=htmlspecialchars($identyfikator["glowna"]["tytul"]);
			$idp="glowna";
	}
	else{
			$idp="blad";
			$tytulstrony=htmlspecialchars("Błąd");
			http_response_code(500);
			 
			}
}
	elseif ($_GET["idp"]==="" || $_GET["idp"]=="glowna" ){
		if (is_file(__DIR__."/".$identyfikator["glowna"]["sciezka"]) && is_readable(__DIR__."/".$identyfikator["glowna"]["sciezka"])){
			
			$tytulstrony=htmlspecialchars($identyfikator["glowna"]["tytul"]);
			$idp="glowna";
	}else{
			$idp="blad";
			$tytulstrony=htmlspecialchars("Błąd");
			http_response_code(500);
			}
		
	}
	elseif ($_GET["idp"]=="kontakt" ){
		if (is_file( __DIR__."/".$identyfikator["kontakt"]["sciezka"]) && is_readable( __DIR__."/".$identyfikator["kontakt"]["sciezka"])){
			
			$tytulstrony=htmlspecialchars($identyfikator[$_GET["idp"]]["tytul"]);
			$idp="kontakt";
	}else{
			$idp="blad";
			$tytulstrony=htmlspecialchars("Błąd");
			http_response_code(500);
			}
		
	}
	elseif ($_GET["idp"]=="produkt" ){
		if (is_file( __DIR__."/".$identyfikator["produkt"]["sciezka"]) && is_readable( __DIR__."/".$identyfikator["produkt"]["sciezka"])){
			
			$tytulstrony=htmlspecialchars($identyfikator[$_GET["idp"]]["tytul"]);
			$idp="produkt";
	}else{
			$idp="blad";
			$tytulstrony=htmlspecialchars("Błąd");
			http_response_code(500);
			}
		
	}
	elseif ($_GET["idp"]=="filmy" ){

		if (is_file( __DIR__."/".$identyfikator["filmy"]["sciezka"]) && is_readable( __DIR__."/".$identyfikator["filmy"]["sciezka"])){
			
			$tytulstrony=htmlspecialchars($identyfikator[$_GET["idp"]]["tytul"]);
			$idp="filmy";
	}else{
			$idp="blad";
			$tytulstrony=htmlspecialchars("Błąd");
			http_response_code(500);
			}
		
	}
	elseif ($_GET["idp"]=="lab4" ){

		if (is_file( __DIR__."/".$identyfikator["lab4"]["sciezka"]) && is_readable( __DIR__."/".$identyfikator["lab4"]["sciezka"])){
			
			$tytulstrony=htmlspecialchars($identyfikator[$_GET["idp"]]["tytul"]);
			$idp="lab4";
	}else{
			$idp="blad";
			$tytulstrony=htmlspecialchars("Błąd");
			http_response_code(500);
			}
		
	}

else{
	$tytulstrony=htmlspecialchars("Błąd");
	$idp="blad";
}
?>
<html lang="pl-PL" data-theme="light" id="html">
<head>
<meta charset="UTF-8">	
<title><?=htmlspecialchars($tytulstrony);?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">

<script src="js/main.js" defer></script>
<script src="vendor/jquery-4.0.0.min.js" defer></script>
<script src="js/lab3.js" defer></script>
</head>
<body id="index">
<header class="naglowek">
<h1>Domowy Piecyk - sklep dla miłośników pieczenia i cukiernictwa</h1>
<label for="wyszukiwanie">Szukaj: </label><input name="wyszukiwanie" id="wyszukiwanie" type="search"><p id="ilosc">Ilość wyników: </p>
</header>
<nav class="menu">


<a href="index.php?idp=glowna" <?=($idp==="glowna") ? 'aria-current="page"' : ''?>>index</a>
<a href="index.php?idp=produkt" <?= ($idp==="produkt") ? 'aria-current="page"' : ''?>>produkt</a>
<a href="index.php?idp=kontakt" <?=($idp==="kontakt") ? 'aria-current="page"' : ''?>>kontakt</a>
<a href="index.php?idp=lab4" <?=($idp==="kontakt") ? 'aria-current="page"' : ''?>>Katalog PHP</a>
<a href="index.php?idp=filmy" <?= ($idp==="filmy") ? 'aria-current="page"' : ''?>>Filmy</a>
</nav>

<?php




	if (!isset($_GET["idp"])){
		if (is_file(__DIR__."/".$identyfikator["glowna"]["sciezka"]) && is_readable(__DIR__."/".$identyfikator["glowna"]["sciezka"])){
			include __DIR__."/".$identyfikator["glowna"]["sciezka"];

	}
		else{
			http_response_code(500);
			echo "Brak ścieżki systemowej";
			}
	}
	elseif ($_GET["idp"]==="" || $_GET["idp"]=="glowna" ){
		if (is_file(__DIR__."/".$identyfikator["glowna"]["sciezka"]) && is_readable(__DIR__."/".$identyfikator["glowna"]["sciezka"])){
			include __DIR__."/".$identyfikator["glowna"]["sciezka"];

	}
		else{
			http_response_code(500);
			echo "Brak ścieżki systemowej";
		}
	}
	elseif ($_GET["idp"]=="kontakt" ){
		if (is_file( __DIR__."/".$identyfikator["kontakt"]["sciezka"]) && is_readable( __DIR__."/".$identyfikator["kontakt"]["sciezka"])){
			include  __DIR__."/".$identyfikator["kontakt"]["sciezka"];

	}
		else{
			http_response_code(500);
			echo "Brak ścieżki systemowej";
		}
	}
	elseif ($_GET["idp"]=="produkt" ){
		if (is_file( __DIR__."/".$identyfikator["produkt"]["sciezka"]) && is_readable( __DIR__."/".$identyfikator["produkt"]["sciezka"])){
			include  __DIR__."/".$identyfikator["produkt"]["sciezka"];

	}
		else{
			http_response_code(500);
			echo "Brak ścieżki systemowej";
		}
	}
	elseif ($_GET["idp"]=="filmy" ){

		if (is_file( __DIR__."/".$identyfikator["filmy"]["sciezka"]) && is_readable( __DIR__."/".$identyfikator["filmy"]["sciezka"])){
			include  __DIR__."/".$identyfikator["filmy"]["sciezka"];

	}
		else{
			http_response_code(500);
			echo "Brak ścieżki systemowej";
		}
	}
	elseif ($_GET["idp"]=="lab4" ){

		if (is_file( __DIR__."/".$identyfikator["lab4"]["sciezka"]) && is_readable( __DIR__."/".$identyfikator["lab4"]["sciezka"])){
			include  __DIR__."/".$identyfikator["lab4"]["sciezka"];

	}
		else{
			http_response_code(500);
			echo "Brak ścieżki systemowej";
		}
	}
	else {
		http_response_code(404);
		echo "<a href= \"index.php?idp=glowna\">Niepoprawny link, kliknij tu aby przejsc do strony głównej</a>";
	}
?>

<footer class="stoopka"><button type="button" id="tryb" aria-pressed="false">Tryb ciemny</button>
<p id="godzina"></p> <button type="button" id="godzinastart">Start zegara</button><button type="button" id="godzinastop">Stop zegara</button>
<article class="demonstracja">
<button type="button" class="klikaczeanimacyjne" id="klikacz1" aria-pressed="false">Przycisk 1</button>
<button type="button" class="klikaczeanimacyjne" id="klikacz2" aria-pressed="false">Przycisk 2</button>
<button type="button" class="klikaczeanimacyjne" id="klikacz3" aria-pressed="false">Przycisk 3</button>
<p id="iloscklikniec" role="status">Kliknięć: 0</p>
<button type="button" class="klikaczeanimacyjne" id="klikacz4" aria-pressed="false">Resetuj A i C</button>
<button type="button" class="klikaczeanimacyjne" id="klikacz5">Sprawdź serwer</button>
<span id="wynikklikacza5" role="status"></span>
</article>
<?php $zmienna = "chleb"; echo $zmienna;?>
</footer>
</body>

</html>