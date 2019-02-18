# PHP &ndash; Symfony - zadania domowe
> Wstęp do symfony


#### Zadanie 1 – przygotowanie projektu
Utwórz nowy projekt o nazwie **symfony_newsletter**

1. Dodaj nowego bundla o nazwie CodersLabBundle, korzystając z komend konsolowych.
2. Usuń domyślnego bundla o nazwie AppBundle. Procedura składa się z 3 kroków.
    
> Routing i kontrolery

#### Zadanie 1 – generowanie kontrolerów
Wygeneruj kontroler o nazwie Address, którego zadaniem będzie obsługa formularza zbierającego adresy email
od użytkowników odwiedzających stronę.
Podczas generowania kontrolera dodaj akcje ze standardowym routingiem.
Nazwy akcji to:
* newEmail
* succesAdd
* userExist
* deleteEmail

#### Zadanie 2 - akcja newEmail
Zadaniem akcji jest obsługa danych wysłanych metodą POST.
Docelowo będą te dane zapisywane w bazie danych ale na tym etapie tworzenia
systemu wyświetlimy je na stronie.

1. Akcja ma wyświetlić prosty formularz HTML przesyłający dane metodą POST 
   do tej samej akcji, która go wyświetliła. 
   Formularz jest wyświetlany z pomocą obiektu typu Response.
2. Pole formularza do wpisania adresu powinno posiadać atrybut name="userEmail"
3. Jeśli zostaną wysłane dane to z akcji zwracany jest obiekt typu Response,który
   zamiast formularza zawiera informację do wyświetlenia: "Dane zostały wysłane"


#### Zadanie 3 - akcja succesAdd
Zadaniem tej akcji jest utworzenie sesji, w której zapisany zostanie niepowtarzalny 
identyfikatora użytkownika tzw. token. Jeśli token istnieje w sesji to po ponownym 
wejściu na stronę newEmail zostajemy przekierowani do akcji userExist.

``` Token w późniejszym etapie zostanie zapisany w bazie danych na potrzeby identyfikacji ```
    
1. W celu wygenerowania tokena należy skorzystać z połączenia dwóch stringów: 
   unikalnego id sesji oraz znacznika czasu UNIX (funkcja time() )
2. Token zapisujemy w sesji pod kluczem "userToken"
3. Akcja zwraca obiekt Response z komunikatem „Adres email został dodany”
4. Modyfikujemy akcję newEmail w taki sposób aby sprawdzała czy token został przydzielony
5. Jeśli został to należy ustawić przekierowanie do akcji userExist
6. Zamieniamy również obiekt Response na przekierowanie do akcji succesAdd 