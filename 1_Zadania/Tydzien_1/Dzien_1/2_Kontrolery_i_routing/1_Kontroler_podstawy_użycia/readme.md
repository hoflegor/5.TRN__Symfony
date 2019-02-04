#  Kontrolery i routing
### Kontroler podstawy użycia

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

1. Stwórz nowy projekt o nazwie `projekt_controler`.
2. Następnie:
1. Wszystkie zadania rozwiązuj w domyślnym bundlu `AppBundle`

#### Zadanie 2

1. Wygeneruj nowy kontroler o nazwie `first` za pomocą odpowiedniej komendy konsolowej.  
   Podczas generacji nie dodawaj mu żadnych akcji.
2. Następnie stwórz akcję, która będzie przypisana do adresu `/helloWorld`.  
   Akcja ta ma wypisywać na stronie przywitanie.
3. Pamiętaj o:
   * Stworzeniu odpowiedniej adnotacji do routingu
   * Zwróceniu obiektu typu `Response` z akcji (nie zapomnij o dołączeniu klasy `Response` poprzez `use`)
   * Odpowiednim nazwaniu metody (musi się kończyć słowem `Action`)


<!-- Links -->
[wstep_do_symfony]: ../../1_Wstep_do_Symfony#zadanie-2
