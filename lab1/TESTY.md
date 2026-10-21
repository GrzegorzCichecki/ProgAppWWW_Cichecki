Wersja przeglądarki: Firefox 158.0

## 

## Struktura:



### Plik index.html:



Error: Bad value 30% for attribute width on element img: Expected a digit but saw % instead.



From line 24, column 1; to line 24, column 127





Error: Bad value auto for attribute height on element img: Expected a digit but saw a instead.



From line 24, column 1; to line 24, column 127





Error: Bad value 30% for attribute width on element img: Expected a digit but saw % instead.



From line 32, column 1; to line 32, column 104





Error: Bad value auto for attribute height on element img: Expected a digit but saw a instead.



From line 32, column 1; to line 32, column 104





Error: Bad value 30% for attribute width on element img: Expected a digit but saw % instead.



From line 39, column 1; to line 39, column 112





Error: Bad value auto for attribute height on element img: Expected a digit but saw a instead.



From line 39, column 1; to line 39, column 112



rozwiązanie: w znacznikach <img> zamiast zapisu width= height= zastosowano zapis style="width:30%; height:auto;"





brak ostrzeżeń



Po wyłączeniu CSS w narzędziach deweloperskich kolejność treści odpowiednia, niepoprawny układ na stronie.



### Plik kontakt.html:



Error: The first option element in a select element with a required attribute, and without a multiple attribute, and without a size attribute whose value is greater than 1, must have either an empty value attribute, or must have no text content. Consider either adding a placeholder option label, or adding a size attribute with a value equal to the number of option elements.

From line 27, column 9; to line 27, column 23
Rozwiązanie: dodano value="" do znacznika <option>wybierz produkt</option>



Error: Bad value textarea for attribute type on element input.

From line 35, column 1; to line 35, column 91



Error: Attribute required is only allowed when the input type is checkbox, date, datetime-local, email, file, month, number, password, radio, search, tel, text, time, url, or week.

From line 35, column 1; to line 35, column 91



Error: Attribute minlength is only allowed when the input type is email, password, search, tel, text, or url.

From line 35, column 1; to line 35, column 91



Error: Attribute maxlength is only allowed when the input type is email, password, search, tel, text, or url.

From line 35, column 1; to line 35, column 91

Powyższe błędy rozwiązano za pomocą zmiany typu znacznika <input> na type="text"

Warning: Article lacks heading. Consider using h2-h6 elements to add identifying headings to all articles.

From line 19, column 1; to line 19, column 9

Rozwiązanie: zamieniono znacznik <p> z informacją o formularzu demonstracyjnym na znacznik <h2>

### 

### Plik produkt.html:

Error: The heading h3 (with computed level 3) follows the heading h1 (with computed level 1), skipping 1 heading level.

From line 20, column 1; to line 20, column 4

Rozwiązanie: zmiana h3 na h2



## Widoki:

Odpowiednia liczba kolumn w widoku na duże wyświetlacze. Przy przejściu przez granicę 768px strona zmienia układ. Przy szerokości 375px nie ucina formularza. Obrazy zachowują proporcje.



## Klawiatura:

Użycie klawisza TAB przechodzi kolejno po elementach formularza, kombinacja SHIFT + TAB robi to samo, ale w odwrotnej kolejności. Enter aktywuje link (przycisk). Fokus widoczny (na <a> kolor pink <button> oraz <select> kolor Tan). Kliknięcie etykiety aktywuje właściwe pole.



## Walidacja:

Pusty formularz - próba zatrzymana (komunikat proszę wypełnić to pole na pierwszym pustym polu)

Błędny adres email (brak znaku @) - próba zatrzymana (komunikat proszę wprowadzić adres e-mail)

Liczba 0 - próba zatrzymana (komunikat proszę wybrać liczbę nie mniejszą niż 1) 

Liczba 6 - próba zatrzymana (komunikat proszę wybrać liczbę nie większą niż 6)

Poprawnie wypełniony formularz:

https://firefox.localhost/kontakt.html?email=adres%40domena.pl\&produkt=janex\&liczba=4\&wiadomosc=wiadomo%C5%9B%C4%87+do%C5%82%C4%85czona+do+zam%C3%B3wienia+%3ADemail=adres%40domena.pl

produkt=janex

liczba=4

wiadomosc=wiadomo%C5%9B%C4%87+do%C5%82%C4%85czona+do+zam%C3%B3wienia+%3AD



## Eksperyment:

Przewidywanie rezultatu usunięcia name= z pola e-mail: w adresie nie będzie pola e-mail lub dostanie jakąś domyślną nazwę

Rezultat: https://firefox1.localhost/kontakt.html?produkt=janex\&liczba=4\&wiadomosc=usunieto+name+z+email

W adresie nie ma wartości z pola e-mail. Wyjaśnienie - przeglądarka nie ma jak nazwać wartości więc nie może jej wysłać.

Żądanie formularza: 

GET https://firefox1.localhost/kontakt.html?produkt=janex\&liczba=4\&wiadomosc=usunieto name z email



