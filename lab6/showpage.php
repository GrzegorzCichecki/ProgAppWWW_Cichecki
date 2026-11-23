<?php
function PokazPodstrone($pdo, $alias){
	try{$zapytanko = $pdo -> prepare("SELECT * FROM page_list WHERE alias= ? AND status = 1 LIMIT 1");
	$zapytanko->execute([$alias]);
	$odpowiedz = $zapytanko -> fetch(PDO::FETCH_ASSOC);
	if ($odpowiedz) {
		return $odpowiedz;
	}
	return null;
	}
	catch(PDOException $e){return null;}
}

function ZapytanieMenu($pdo){
	try{
	$zapytanko = $pdo -> prepare("SELECT alias, page_title FROM page_list WHERE  status = 1 ORDER BY id");
	$zapytanko->execute();
	$odpowiedz = $zapytanko -> fetchAll(PDO::FETCH_ASSOC);
	if ($odpowiedz) {
		return $odpowiedz;
	}
	return null;}
		catch(PDOException $e){return null;}
}
?>