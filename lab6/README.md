v1.5   

# Pseudokod odczytu strony

jeżeli $pdo istnieje i nie jest null: 
-wykonaj zapytanie z aliasem $_GET["idp"]
-jeżeli zapytanie jest puste i $_GET["idp"] jest puste:
--wczytaj wykonaj zapytanie z aliasem glowna
--wyswietl glowna
-jezeli zapyanie jest puste i $_GET["idp"] nie jest puste:
--bład http 500 
--strona z blędem
-w przeciwnym wypadku: 
--wczytaj strone z zapytania
w przeciwnym wypadku:
-bład http 500 
-strona z blędem

# Próby i oczekiwany wynik 
## Odczyt i aktualizacja treści
oczekiwany wynik:index.php i ?idp= otwierają glowna z HTTP 200. Zmień treść w phpMyAdmin: po odświeżeniu widać zmianę bez edycji plików PHP i HTML    
zaobserwowany wynik:działa zgodnie z oczekiwaniami    

## Nowa strona i menu
oczekiwany wynik:Dodaj opublikowany rekord z nowym aliasem. Link pojawia się w menu i otwiera stronę bez zmiany kodu PHP. Aktywny link jest oznaczony.     
zaobserwowany wynik: działa zgodnie z oczekiwaniami, aktywny link oznaczony przez aria-current     

## Szkic i publikacja
oczekiwany wynik: Rekord ze statusem 0 znika z menu, a jego bezpośredni adres zwraca 404.
 Po zmianie statusu na 1 jest widoczny. Próba dodania identycznego aliasu
 jest odrzucana przez bazę    
zaobserwowany wynik: działa zgodnie z oczekiwaniami

## Błędne dane w adresie
oczekiwany wynik:?idp=nieznana i ?idp[]=filmy dają 404. Jako idp sprawdź też
 ../cfg.php oraz tekst ' OR 1=1--. Każda próba daje 404 bez ostrzeżeń
 PHP.    
zaobserwowany wynik: działa zgodnie z oczekiwaniami

## Awaria bazy
oczekiwany wynik:  Ustaw tymczasowo błędny port w konfiguracji. Strona zwraca 500 bez
 szczegółów technicznych, a lokalny log pozwala ustalić przyczynę   
zaobserwowany wynik: działa zgodnie z oczekiwaniami (zmieniono localhost na 192.168.1.3 w cfg.php), brak loga    

## Funkcje po migracji
oczekiwany wynik:Działają style, obrazy, animacje, AJAX i trzy filmy. Katalog filtruje produkty i
 zapisuje wybór: POST 303, potem GET 200. Wybór pozostaje po przejściu
 między podstronami     
zaobserwowany wynik:działa zgodnie z oczekiwaniami 

## Odtworzenie środowiska
oczekiwany wynik:    Utwórz pustą bazę testową. Zaimportuj schemat i dane, uzupełnij lokalną
konfigurację. Projekt uruchamia się zgodnie z README, także z polskimi
znakami
zaobserwowany wynik:działa zgodnie z oczekiwaniami 
