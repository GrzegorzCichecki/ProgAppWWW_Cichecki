Wersja przeglądarki: Firefox 159.0

## Szybkie klikniecia A
Oczekiwane zachowanie: Po resecie i 10 kliknięciach stan bazowy; po zakończeniu klikania animacje nie odtwarzają zaległej kolejki.   
Zaobserwowane zachowanie: zgodne z wymaganiami

## Kursor i fokus B
Oczekiwane zachowanie: Wyjście kursora przy zachowanym fokusie nie zmniejsza obiektu. Utrata obu stanów przywraca rozmiar bazowy     
Zaobserwowane zachowanie: zgodne z wymaganiami    

## Limit i reset C
Oczekiwane zachowanie: Pięć kroków daje 260 × 140 px. Dalsze kliknięcia nie powiększają obiektu; reset podczas animacji zeruje stan.     
Zaobserwowane zachowanie: zgodne z wymaganiami   

## Klawiatura i ruch
Oczekiwane zachowanie: Tab dociera do przycisków; Enter i Spacja obsługują A, C i reset. Ograniczenie ruchu wyłącza przejścia, zachowując funkcje.   
Zaobserwowane zachowanie: zgodne z wymaganiami

## Żądanie AJAX
funkcja AJAX wysyła zapytanie metodą GET, kod odpowiedzi to 200. Odpowiedzią jest tekst "PHP działa"   
W przypadku zmiany nazwy pliku kod odpowiedzi to 404, co oznacza, że nie znaleziono pliku. Po powrocie do wcześniejszej nazwy wraca poprzedni stan.  
Przy ograniczeniu prędkości sieci na sieć GPRS czas wykonania żądania zmienił się z 7 ms na około 518 ms
