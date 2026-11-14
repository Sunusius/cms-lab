Karta projektu MP1 - Ziarno&Kawa

## Podgląd projektu przez link (WordPress Playground)
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/Sunusius/cms-lab/main/blueprint.json


### 1. Fikcyjna firma

Nazwa: Kawiarnia Ziarno&Kawa

Czym się zajmuje:
Lokalna kawiarnia. Na miejscu kawa parzona, domowe ciasta, sprzedaż paczkowanej kawy ziarnistej oraz warsztaty parzenia kawy.

Klienci: Studenci, freelancerzy szukający miejsca do pracy z laptopem oraz osoby z okolicy lubiące kawe.

### 2. Persony

Persona 1: Mateusz (24 lata, student)

Cel: Chce wpaść na parę godzin popracować, napić się dobrej kawy i coś zjeść.

Problem: Nie wie, czy w lokalu jest stabilne Wi-Fi, gniazdka przy stolikach i czy można siedzieć z laptopem.

Urządzenie: Smartfon (sprawdza knajpę w drodze).

CTA: Zobacz menu i lokal

Persona 2: Kamila (32 lata, lubi kawe)

Cel: Chce kupić świeżą paczkę ziaren i dowiedzieć się, kiedy są wolne terminy na warsztaty z parzenia kawy.

Problem: W marketach brakuje ziaren z dobrych palarni, a na social mediach kawiarni ciężko znaleźć aktualny cennik i terminy warsztatów.
         
Urządzenie: Komputer/laptop w domu.

CTA: Kup kawę online/Zapisz się na warsztaty

### 3. Mapa strony

1. Strona główna
2. O nas
3. Oferta
  - Kawiarnia i menu
  - Ziarna na wynos
  - Warsztaty
4. Aktualności
5. Kontakt
6. Polityka prywatności

### 4. Dlaczego Wordpress?
Wordpress dlatego, że jest najpopularniejszy na świecie według danych z W3Techs. Udział przekraczający 63% wśród systemów zarządzania treścią. Dzięki temu jest dostępnych wiele darmowych wtyczek oraz motywów.
Nie wymaga płacenia miesięcznych subskrypcji ani prowizji od sprzedaży towarów za używanie silnika cms. Jest prostszy w użyciu niż np Drupal.
Pracownicy kawiarni mogą samodzielnie aktualizować menu na stronie bez potrzeby angażowania w to programisty dlatego, że wordpress posiada intuicyjny edytor blokowy.

### Sekcja Użycia AI
1 Występowały problemy z przekierowaniem podstron w wordpress do localhost. Ai zasugerowało utworzenie wtyczki fix-codespaces.php w katalogu wp-content/mu-plugins.

2 Konfiguracja przyjaznych adresów permalink. Pomimo ustawienia permalink na post name.
Podstrony wyrzucały błąd 404. Ai pomogło właczyć moduł mod_rewrite w serwerze Apache oraz obsługa pliku .htaccess. Serwer wyszukiwał wewnatrz kontenera plików wordpress typu podstron oferta itp nie znajdywał ich i wyrzucał błąd.
Ai wygenerowało plik w katalogu z nowymi regułami przypisywania tych zapytań. Wordpress dopiero na podstawie tych ścieżek pobierał odpowiednią treść podstrony z bazy danych.

3. Ai pomogło w wygenrowaniu kodu do podstron - układu sekcji na podstronach w oparciu o znaczniki sekcji bloków w wordpresie.

# POPRAWKI : Musiałem nanieść poprawki składniowe - Poprawa nawiasów w odpowiednich miejscach

4 Tworzenie treści graficznych jak i tekstowych.
- Ai wygenerowało obrazy.
  
# POPRAWKI: Opisy grafiki wymagały lekkiej poprawy spójności tego co jest na grafice.
- Jako że nie znam się na kawie, opisy do wpisów w blogu/ Aktualności też wygenerowało AI. 

# MP1 L03 G1
- Weryfikacja kontrastu przez DevTools zgodnie z WCAG AA
treść główna - tekst #191919 tło #FAF7F2 kontrast 16.45:1 wynik ok
linki - tekst #5C3A21 tło #FAF7F2 kontrast 9,43:1 wynik ok 
przyciski CTA tekst #FAF7F2 tło #5C3A21 kontrast 9.43:1 wynik ok
Elementy akcentujące tekst #8C4a27 tło #FAF7F2 kontrast 6.38:1 wynik ok
Nagłówek na zdjęciu Hero tekst #FFFFFF tło #1E1A17 Kontrast 17.28:1 wynik ok

# MP1 l03 G2
- Wstawiłem dodatkowy CSS zgodnie z WCAG 2.2 : focus klawiatury - weryfikacja klawiszem tab, odstep przewijania, minimalne cele dotykowe, płynna typografia nagłówka H1
- Weryfikacja RWD na szerokosci 375 px w DevTools - poprawiony pionowy odstęp między kolumnami na ekranach mobilnych i wysokość okładek.

# Użycie AI L03 G1 G2
- Przygotowanie struktur i propozycji reguł CSS w dodatkowy css
# Poprawiono
 - Weryfikacja kontrastów ręczna
 - Testy focusu i widoku mobilnego
 - Korekta CSS na urządzenia mobilne - poprawiono braki w odstępach kolumn w sekcji Dlaczego Ziarno&Kawa oraz zbyt wysokie bloki okładek. Ręcznie poprawiłem kod marginesu dolnego i zmniejszyłem wysokość