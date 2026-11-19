## Karta Projektu MP2 - Ziarno&Kawa
# L04
# Zad G1 utworzono szkielet motywu. Motyw zgodnie z instrukcją widoczny jest w zakładce motywy.

# zad G2
  Po dodaniu templates/index.html witryna wyswietla treść bez urwanego tekstu. Strona ładuje pełną treść z sekcji Hero oraz reszty sekcji. Obrazy załadowały się poprawnie.

# Typy widoku szablonów każdej witryny:

  -Strona główna, używany szablon page.html
  -Podstrony (O nas, Oferta, Kontakt Polityka prywatności) używaja widoku page.html
  -Podstrona Aktualności (wpisy blogowe) widok szablonu index.html
  -Wpisy na stronie Aktualności widok szablonu single.html
  -Kategorie wpisów widok archive.html
  -Szablon 404 po sprawdzeniu w szablonach/Templates wyswietla widok 404.html

# Uzycie Ai
-Pomoc przy wyjaśnieniu hierarchi szablonów motywów blokowych i pomoc w przygotowaniu plików HTML szablonów.

- Wkład własny: utworzenie i konfiguracja plików w Codespace, dostosowanie treści, weryfikacja każdego widoku w edytorze Wordpress


# zad G3
  -Zmodyfikowano część szablonu w header. Ciemnozielone tło oraz tytuł- kolor marki zmieniono na kremowy z czarnego.
  -Użyłem wtyczki Create Block Theme żeby przenieść zmiany bezpośrednio do pliuków motywu w repozytorium.
  -Zweryfikowałem zmiany poleceniem git status i git diff
  -Dodałem reguły ignorowania paczek zip/
  -wyexportowałem motyw do zip ziarno i kawa zip za pomoca wtyczki.
  -W playground zainstalowałem i aktywowałem paczkę zip w czystym playground co potwierdziło zmianę palety kolorów.








Karta projektu MP1 - Ziarno&Kawa
**info**
# Wersja projektu MP1 znajduje się w gałęzi mp1. Dalej na gałęzi Main rozwijane są zadania do MP2

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

 # MP1 L03 G3
  Użycie AI
  Wygenerował regułe aditional css. Dodaliśmy bazowy kolor tła background #1E1A17 dla bloków wp-block-cover. Zbezpieczył kontrast dla białego tekstu w razie nie załadowania obrazu w tle.

  DO L03 praca własna - zdjęcia przeprowadzonego audytu w folderze zdjęcia audytu.

  # MP1 L03 G4
  ## Źródła i licencje (G4)

Wszystkie zasoby graficzne, typograficzne, wtyczki oraz oprogramowanie użyte w projekcie **Ziarno & Kawa** pochodzą z legalnych źródeł otwartego oprogramowania lub wolnych licencji:

| Kategoria | Zasób / Plik | Autor | Licencja | Link źródłowy |
| :--- | :--- | :--- | :--- | :--- |
| **System CMS** | WordPress | Społeczność WordPress | GNU GPLv2+ | https://wordpress.org/ |
| **Motyw** | Twenty Twenty-Five | WordPress.org | GNU GPLv2+ | https://wordpress.org/themes/twentytwentyfive/ |
| **Wtyczka** | Akismet Anti-spam (`wp-content/plugins/akismet`) | Automattic | GNU GPLv2+ | https://wordpress.org/plugins/akismet/ |
| **Wtyczka** | Hello Dolly (`wp-content/plugins/hello.php`) | Matt Mullenweg | GNU GPLv2+ | https://wordpress.org/plugins/hello-dolly/ |
| **Font (lokalny)** | **Lora** (`Lora-VariableFont_wght.ttf`, `Lora-Italic-VariableFont_wght.ttf`) | Cyreal (Olga Umpeleva, Alexei Vanyashin) | SIL Open Font License 1.1 (OFL) | https://fonts.google.com/specimen/Lora |
| **Font (motyw)** | **Manrope** | Mikhail Sharanda | SIL Open Font License 1.1 (OFL) | https://fonts.google.com/specimen/Manrope |
| **Font (motyw)** | **Fira Code** | Nikita Prokopov | SIL Open Font License 1.1 (OFL) | https://fonts.google.com/specimen/Fira+Code |
| **Zdjęcie 1 (Hero / Baner)** | `1fb41f88-fbfa-432e-a740-4475babdb41e.webp` | Autor z Unsplash / Openverse | Unsplash License / CC0 | https://unsplash.com/ |
| **Zdjęcie 2 (Sekcja / O nas)** | `adc6a64b-f5d8-4050-8b82-989eb6aedacc.webp` | Autor z Unsplash / Openverse | Unsplash License / CC0 | https://unsplash.com/ |
| **Zdjęcie 3 (Karta 1)** | `swieze-palenie-kawy-kolumna-1.webp` (Świeże palenie kawy) | Autor z Unsplash / Openverse | Unsplash License / CC0 | https://unsplash.com/ |
| **Zdjęcie 4 (Karta 2)** | `kolumna-2.webp` (Oferta / Kawa) | Autor z Unsplash / Openverse | Unsplash License / CC0 | https://unsplash.com/ |
| **Zdjęcie 5 (Karta 3)** | `kolumna-3.webp` (Oferta / Parzenie) | Autor z Unsplash / Openverse | Unsplash License / CC0 | https://unsplash.com/ |
| **Ikony** | Wbudowane ikony bloków WordPress (SVG) | Społeczność WordPress | GNU GPLv2+ | https://wordpress.org/ |

## Użycie AI

Narzędzia AI zostały wykorzystane pomocniczo przy weryfikacji źródeł oraz zestawieniu licencji dla użytych motywów, wtyczek, lokalnych fontów i zdjęć.

# Zadanie rozszerzone B1 L03 Formularz kontaktowy
  Formularz kontaktowy na podstronie Kontakt zrobiłem przy pomocy wtyczki Contact form 7.
  Nad samym formularzem dodałem nagłówek "Napisz do nas!", żeby cała sekcja była lepiej uporządkowana i łatwiejsza do znalezienia podczas poruszania się po nagłówkach.

  Formularz zawiera:
  - Widoczne etykiety <label> Każde pole (imie naziwsko email wiadomosć oraz RODO) ma swoją widoczną etykietę.
  Dzięki temu wiadomo od razu co wpisać. Kliknięcie w tekst etykiety aktywuje pole danej etykiety.

  - Podpowiedzi autocomplete w polach na imie i nazwisko, adres email dodałem atrybuty aoutcomplete:name oraz autocomplete:email żeby przeglądarka mogła automatycznie podpowiadać zapisane dane uzytkownika.

  - Oznaczenie wymaganych pól i komunikaty. Przy każdym wymaganym polu w tekscie etykiety dopisałem (wymagane). Zamieniłem domyslne komunikaty po angielsku na tekst po polsku.

  - Zgoda RODO, Checkbox jest domyślnie odznaczony co wymusza na użytkowniku zaznaczenie go samodzielnie.
  
  # Kryteria WCAG2.2AA Accessible Authentication

  W formularzu zrobiłęm ukryte pole pułapkę, które jest schowane poza ekranem za pomocą CSS oraz ukryte przed czytnikami ekranu. Zwykły uzytkownik tego pola nie widzi i pomija je przy przechodzeniu klawiszem TAB, natomiast bot spamujący je wypełni.

  # WCAG 2.5.8 Target Size

  Sprawdziłem wszystkie klikalne elementy w formularzu. Mają rozmiar minimum 24x24px.
  - rozmiar przycisku Wyślij wiadomość 157x06x44px
  - pola tekstowe wysokość ponad 40px - trzeba było zmienić bo przeglądarka domyślnie ustawiła na 21px. Dla pól email i imie nazwisko.

  # Test formularza
  Klawiatura - przeklikałem cały formularz przez TAB.
  axe DevTools: Przeskanowałem podstronę Kontakt wtyczką axe DevTools, która nie zgłosiła błędów.

  # B2 L03 Preferencje użytkownika
  - W sekcji Additional Css dodałem obsługę systemowych preferencji dostępności oraz linku szybkiego przejścia do treści.
  - Wyłączyłem płynne przewijanie ruchu. Skróciłem czas trwania animacji i przejść do minimum.
  - Przy systemowym trybie wysokiego kontrastu dodałem wyraźne obramowanie dla przycisków blokowych.
  - skip link znajduje się na stałe w lewym górnym rogu.
  # Testy
  - Nawigacja klawiaturą TAB  - skip link pojawia się jako pierwszy interaktywny element po wejściu na stronę i po kliknięciu ENTER przenosi bezpośrednio na główną sekcje treści.
  - Test Emulacja w DevTools. Włączyłem opcje rendering. Animacje zostały wyłączone a przyciski zachowały obramowanie.
  - Test czytnika ekranu. Nagłówki oraz etykiety pól są czytane poprawnie.



