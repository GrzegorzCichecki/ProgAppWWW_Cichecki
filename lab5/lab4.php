<?php
session_start();
//walidacja danych z post 
require_once  __DIR__.'/includes/katalog.php';
if (isset($_POST["produkt"]) && isset($_POST["ilosc"])){
	if (filter_var($_POST["produkt"], FILTER_VALIDATE_INT) && filter_var($_POST["ilosc"], FILTER_VALIDATE_INT)){
if ($_POST["ilosc"] > 0 && $_POST["ilosc"] < 6   && $_POST["ilosc"] <= $produkty[$_POST["produkt"]-1]["stan"] ){
	
	$_SESSION["ostatniwybor"] = ["id" => $_POST["produkt"], "ilosc" => $_POST["ilosc"]];
	header("Location: lab4.php", true, 303);
    exit();
	}
	
	}else{
		http_response_code(400);
	}
}

include __DIR__.'/includes/naglowek.php';
 $nazwa_grupy = 'chleb';
echo "Nazwa grupy: ".$nazwa_grupy;
echo "<p>Powrót do index.html: <a href=\"index.php?idp=glowna\">index.php</a>";


//filtr 


//post 


//wypisywanie filtra
$iterator = 0;
$rozmiar = count($produkty);
while ($iterator < $rozmiar){

	if (!isset($_GET["kategoria"])){
		$wyborkategorii = "wszystko";
	}
	else{
		$wyborkategorii = $_GET["kategoria"];
	}
if ($produkty[$iterator]["kategoria"]==$wyborkategorii || $wyborkategorii == "wszystko"){
	if ($produkty[$iterator]["stan"]==0){
		$stan = "Niedostępny";
		}
	elseif ($produkty[$iterator]["stan"]<6){
		$stan = "Niski stan";
		} 
	else {
		$stan = "Dostępny";
		}
		
	switch ($produkty[$iterator]["kategoria"]){
		case "ksiazki":
			$kategoria = "Książki";
			break;
		case "akcesoria":
			$kategoria = "Akcesoria";
			break;
	}
	echo "<p>ID produktu: ".$produkty[$iterator]["id"].", nazwa produktu: ".$produkty[$iterator]["nazwa"].", kategoria: ".$kategoria.", stan: ".$stan."</p>";
	
	
}
elseif ($wyborkategorii != "wszystko" && $wyborkategorii != "ksiazki" && $wyborkategorii != "akcesoria" ) {
	$wyborkategorii="blad";
	if ($produkty[$iterator]["stan"]==0){
		$stan = "Niedostępny";
		}
	elseif ($produkty[$iterator]["stan"]<6){
		$stan = "Niski stan";
		} 
	else {
		$stan = "Dostępny";
		}
		
	switch ($produkty[$iterator]["kategoria"]){
		case "ksiazki":
			$kategoria = "Książki";
			break;
		case "akcesoria":
			$kategoria = "Akcesoria";
			break;
	}
	echo "<p>ID produktu: ".$produkty[$iterator]["id"].", nazwa produktu: ".$produkty[$iterator]["nazwa"].", kategoria: ".$kategoria.", stan: ".$stan."</p>";
	if ($iterator == $rozmiar - 1){echo "błędny wybor kategorii, wyświetlamy całą listę";}

}
$iterator++;
}


 
?>
<html lang="pl-PL" data-theme="light" id="html">
<head>

</head>
<body>

<form method="get" action = "lab4.php"> 

<label for="kategoria">Wybor kategorii: </label>
<select name="kategoria"  id="kategoria" required >
<option value="wszystko" id="op1">wszystko</option>
<option value="ksiazki" id="op2">książki</option>
<option value="akcesoria" id="op3">akcesoria</option>
</select>

<button type="submit" id="wyslij">Wyślij</button>
</form>


<form method="POST" action = "lab4.php"> 

<label for="produkt">ID produktu: </label>
<input type="number" name="produkt"  id="produkt" required min="1" max="4" step="1">

<label for="ilosc">Ilość produktów: </label>
<input type="number" name="ilosc"  id="ilosc" required min="1" max="5" step="1">

<button type="submit" id="wyslij2">Wyślij</button>
</form>

<p> Ostatni wybór: id:<?php if (isset($_SESSION["ostatniwybor"])){
echo $_SESSION["ostatniwybor"]["id"].", ilość:". $_SESSION["ostatniwybor"]["ilosc"];}
?></p>
</body>

</html>

