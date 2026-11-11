# Instrukcja uruchomienia:
cały folder lab4 umieścić w katalogu htdocs, przez przeglądarkę otworzyć http://localhost/lab4/index.html 

# Pseudokod: 

jeżeli ilosc jest liczbą naturalną i ilosc > 0 i ilosc < 6 i katalog[id][stan] >= ilosc:     
dodaj wpis zawierajacy id oraz ilosc do sesji    
w przeciwnym wypadku:
kod html 400
# Testy:

## Filtr GET
oczekiwany wynik: ?kategoria=ksiazki pokazuje tylko książki. Nieznana kategoria lub
?kategoria[]=ksiazki pokazuje pełną listę i komunikat    
zaobserwowany wynik: działa zgodnie z oczekiwaniami    

## Poprawny POST i odświeżenie
oczekiwany wynik: Wybierz dostępny produkt i poprawną ilość. W Network widać POST
303, potem GET 200. Po odświeżeniu i zmianie filtra zapisany wybór
pozostaje widoczny       
zaobserwowany wynik: działa zgodnie z oczekiwaniami

## Błędne wartości POST 
oczekiwany wynik: sprawdź ilość 0, 6, 2.5, 2abc, brak pola, tablicę i nieznany produkt.
Każda próba daje HTTP 400 i pozostawia poprzedni wybór      
zaobserwowany wynik: html nie przepuszcza niepoprawnych danych, przy zmianie formularza (zmiana parametru max, zmiana type na text) php sprawdza wartości i pokazuje błąd 400

## Stan magazynowy
oczekiwany wynik: Dla produktu ze stanem 1 spróbuj wybrać 2 sztuki. Serwer odrzuca
wybór, mimo że 2 mieści się w przedziale 1–5      
zaobserwowany wynik: działa zgodnie z oczekiwaniami

## Odrębna sesja i tekst HTML
oczekiwany wynik: W nowej sesji, np. w osobnym oknie prywatnym, nie ma wyboru. Nazwa
testowa <b>Test</b> wyświetla się jako tekst; przywróć zwykłą
nazwę.    
zaobserwowany wynik: nowej sesji nie ma wyboru, testu z nazwą testową <b>Test</b> nie wykonałem, gdyż nie rozumiem o co chodzi - w mojej stronie lab4.php nie ma miejsca na wpisanie tekstu 

##  Strona po zmianie ścieżek
oczekiwany wynik: Otwórz stronę główną i podstrony. Działają style, obrazy, linki i funkcje z
lab3, w tym animacje i żądanie do status.php    
zaobserwowany wynik: działa zgodnie z oczekiwaniami

