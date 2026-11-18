# Instrukcja uruchomienia:
cały folder lab4 umieścić w katalogu htdocs, przez przeglądarkę otworzyć http://localhost/lab4/index.php       



# Punkt odniesienia:

-filtr katalogu: działa zgodnie z wymaganiami    
-zapis wyboru po przesłaniu: działa zgodnie z wymaganiami    
-żądanie AJAX: działa    

# Próby

## Adres domyślny i menu
Oczekiwany wynik: index.php i index.php?idp= pokazują stronę główną. Odnośniki
otwierają właściwe treści ze wspólnym szablonem i poprawnym tytułem        
Zaobserowany wynik: zgodny z oczekiwaniami

## Nieznany lub tablicowy klucz
Oczekiwany wynik: ?idp=nieznana i ?idp[]=filmy dają HTTP 404 i odnośnik
powrotny, bez ostrzeżeń PHP.           
Zaobserowany wynik: zgodny z oczekiwaniami     
## Próba podania ścieżki
Oczekiwany wynik: ?idp=..%2Fstatus.php daje HTTP 404. Zawartość status.php nie zostaje dołączona          
Zaobserowany wynik: zgodny z oczekiwaniami 
## Brak pliku widoku
Oczekiwany wynik:  Zmień tymczasowo nazwę html/filmy.html. Adres ?idp=filmy
zwraca HTTP 500 bez ujawnienia ścieżki systemow        
Zaobserowany wynik: zgodny z oczekiwaniami 
## Strona główna i AJAX
Oczekiwany wynik: Na stronie głównej działają style, grafiki i animacje. W panelu Sieć widać udane żądanie do status.php, a na stronie jego wynik.          
Zaobserowany wynik: wszyszystko działa odpowiednio 
## Katalog i sesja po migracji
Oczekiwany wynik: Otwórz katalog z menu i użyj filtra. Zapisz poprawny wybór: POST 303,
potem GET 200. Wróć na stronę główną, otwórz Filmy i ponownie wejdź
do katalogu. Zapisany wybór nadal jest widoczny.          
Zaobserowany wynik: zapisany wybor jest widoczny 
## Filmy i układ mobilny
Oczekiwany wynik: Trzy filmy można uruchomić, odnośniki działają, a przy szerokości 360
px strona nie przewija się w poziomie.          
Zaobserowany wynik:działa odpowiednio    

# Pseudokod wyboru strony
jeśli idp=="" albo idp=="glowna":    
	jesli identyfikator["glowna"] jest plikiem i jest odczytywalny to wczytaj go, jeśli nie to pokaż komunikat i kod 500      
jeśli idp=="kontakt":    
	jesli identyfikator["kontakt"] jest plikiem i jest odczytywalny to wczytaj go, jeśli nie to pokaż komunikat i kod 500       
jeśli idp=="lab4":    
	jesli identyfikator["lab4"] jest plikiem i jest odczytywalny to wczytaj go, jeśli nie to pokaż komunikat i kod 500        
jeśli idp=="produkt":    
	jesli identyfikator["produkt"] jest plikiem i jest odczytywalny to wczytaj go, jeśli nie to pokaż komunikat i kod 500        
jeśli idp=="filmy":    
	jesli identyfikator["filmy"] jest plikiem i jest odczytywalny to wczytaj go, jeśli nie to pokaż komunikat i kod 500     
w przeciwnym wypadku:
		pokaż komunikat i błąd 404