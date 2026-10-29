Wersja przeglądarki: Firefox 158.1

## 

## Motyw i nawigacja:
Oczekiwany wynik: Zmiana motywu utrzymuje się po odświeżeniu i zmianiepodstrony; aria-pressed odpowiada stanowi.     
Zaobserwowany wynik: Zmiana motywu zatrzymuje się po odświeżeniu, aria-pressed odpowiada stanowi

## Start trzy razy potem Stop i Start:
Oczekiwane działanie: Działa jeden interwał; Stop zatrzymuje aktualizację, a wznowienie pokazuje aktualny czas.    
Zaobserwowany wynik: Działa jeden interwał; Stop zatrzymuje aktualizację, a wznowienie pokazuje aktualny czas.  

## Fragment nazwy ze spacjami i inną wielkością liter:
Oczekiwany wynik: Pasujące karty pozostają widoczne; licznik zgadza się z widokiem.    
Zaobserwowany wynik: Pasujące karty pozostają widoczne; licznik zgadza się z widokiem.

##Brak dopasowania i wyczyszczenie pola
Oczekiwany wynik: Pojawia się komunikat o braku wyników; wyczyszczenie przywraca trzy karty.   
Zaobserwowany wynik: Brak dopasowania - licznik wyników pokazuje 0, wyczyszczenie przywraca trzy karty. 

##Cena 1999 gr oraz ilość 3
Oczekiwany wynik: Wynik wynosi 59,97 zł; sprawdź samą funkcję obliczeniową również w konsoli.
Zaobserwowany wynik: odpowiedni wynik na stronie jak i w konsoli

## Ilość pusta 0 6 oraz 1,5
Oczekiwany wynik: Wycena nie pokazuje błędnej wartości; formularz nie przechodzi do poprawnego podsumowania.    
Zaobserwowany wynik: Wycena pokazuje błędne wartości    
Rozwiązanie: Naprawiono logikę funkcji oraz warunki sprawdzające poprawność danych    
Stan obecny: Wycena nie pokazuje błędnej wartości    

##Dziesięć spacji oraz tekst <b>Test</b>
Oczekiwany wynik: Same spacje są odrzucone; poprawna wiadomość ze znacznikamijest pokazana jako dosłowny tekst.    
Zaobserwowany wynik: Same spacje są odrzucone; poprawna wiadomość ze znacznikamijest pokazana jako dosłowny tekst.

##Klawiatura widoki i wyłączony JavaScript
Oczekiwany wynik: Kontrolki działają klawiaturą przy 375 i 1280 px; bez JS katalog, treść i menu pozostają dostępne.
Zaobserwowany wynik: Kontrolki działają klawiaturą przy 375 i 1280 px; bez JS katalog, treść i menu pozostają dostępne.