<!DOCTYPE html>
<?php
require_once __DIR__."/cfg.php";
require_once __DIR__."/showpage.php";
if (isset($pdo) && $pdo != null){
if (isset($_GET["idp"])){
	
$stronka = PokazPodstrone($pdo, $_GET["idp"]);
	

if ($stronka == null){
	$idp = "blad500";
	$tytulstrony = "blad";
	$hateemelek = "<p>blad</p>";
}
else{
	if ($_GET["idp"]== ""){
		$stronka = PokazPodstrone($pdo, "glowna");
		$idp = $stronka["alias"];
		$tytulstrony = $stronka["page_title"];
		$hateemelek = $stronka["page_content"];
	}
	elseif($stronka == null){
		$idp = "blad404";
		$tytulstrony = "Błąd";
		$hateemelek = "<a href= \"index.php?idp=glowna\">Niepoprawny link, kliknij tu aby przejsc do strony głównej</a>";
} 
	else{
	
$idp = $stronka["alias"];
$tytulstrony = $stronka["page_title"];
$hateemelek = $stronka["page_content"];
	}
}}
else {
	$stronka = PokazPodstrone($pdo, "glowna");
	if ($stronka == null){
	$idp = "blad500";
	$tytulstrony = "blad";
	$hateemelek = "<p>blad</p>";
}else{
	$idp = $stronka["alias"];
	$tytulstrony = $stronka["page_title"];
$hateemelek = $stronka["page_content"];}
}
}
else {$idp = "blad500";
	$tytulstrony = "blad";
$hateemelek = "<p>blad</p>";}
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


<?php
if (isset($pdo) && $pdo != null){ 
$elementymenu = ZapytanieMenu($pdo);
if ($elementymenu != null){
forEach($elementymenu as $element){
	
		if ($idp == $element["alias"]){
			echo "<a href=\"index.php?idp=".$element["alias"]."\" aria-current=\"page\">".htmlspecialchars($element["page_title"])."</a>";
			}
	
	else{
				echo "<a href=\"index.php?idp=".$element["alias"]."\" >".$element["page_title"]."</a>";
			
			}

}
}
else{
	http_response_code(500);
	echo "Błąd!";

}}
else {http_response_code(500);
	echo "Błąd!";}
?>
<a href="lab4.php">lab4.php</a>
</nav>

<?php
	if($idp == "blad404"){
		http_response_code(404);
	}
		elseif ($idp="blad500"){
			http_response_code(500);
		}
		echo $hateemelek;
	

	
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
<?php $zmienna = "chleb"; echo $zmienna; echo " v1.5"?>
</footer>
</body>

</html>