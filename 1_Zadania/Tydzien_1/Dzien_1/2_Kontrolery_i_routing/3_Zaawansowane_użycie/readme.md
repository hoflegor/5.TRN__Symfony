#  Kontrolery i routing
### Zaawansowane użycie

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

1. Do drugiej akcji z zadania 4 z zadań [Podstawy Routingu][podstawy_routingu] dopisz kod, który będzie poprawnie odczytywał dane z formularza i wyświetli je na stronie.

Można edytować plik widoku zawierający formularz wg uznania.

#### Zadanie 2

Stwórz dwie akcje:
1. Pierwsza ma być przypisana do adresu `/setSession/{value}`.  
   Ma zapisywać do sesji przekazaną wartość (pod kluczem `usertext`),
2. Druga ma być przypisana do adresu `/getSession` i wczytywać zawartość sesji będącą pod kluczem `usertext` oraz wyświetlać ją na stronie (jeżeli w sesji nie ma żadnej wartości, to powinna się wyświetlać odpowiednia informacja).

#### Zadanie 3

Stwórz trzy akcje:
1. Pierwsza ma być przypisana do adresu `/setCookie/{value}`.  
   Ma zapisywać do ciasteczka przekazaną wartość (pod kluczem „myCookie”).
2. Druga ma być przypisana do adresu `/getCookie` i wczytywać zawartość ciasteczka `myCookie` i wyświetlać ją na stronie (jeżeli nie ma nic w tym ciasteczku, to powinna się wyświetlić odpowiednia informacja).
3. Trzecia ma być przypisana do adresu `/deleteCookie` i powinna kasować ciasteczko o nazwie `myCookie`.

#### Zadanie 4

1. Napisz akcje przypisaną do adresu `/redirectMe`, która powinna przekierowywać do akcji z punktu 3. poprzedniego zadania.  

#### Zadanie 5

1. Napisz akcje przypisaną do adresu `/showAllLinks`.
2. Akcja powinna wyświetlać linki do wszystkich akcji, które dziś zrobiliśmy.
3. Wygeneruj linki na dwa sposoby:
   * używając ścieżek względnych,
   * używając ścieżek bezwzględnych.

Pamiętaj o przekazywaniu slugów, jeżeli jest taka potrzeba.

<!-- Links -->
[podstawy_routingu]: ../2_Podstawy_routingu#zadanie-4
