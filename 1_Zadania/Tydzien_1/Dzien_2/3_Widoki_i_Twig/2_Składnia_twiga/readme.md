#  Widoki i Twig
### Składnia Twiga

###### Zadanioa rozwiązane w %root/%1_Zadania\Tydzien_1\Dzien_2\3_Widoki_i_Twig\1_Widoki\projekt_view

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

1. Stwórz nową akcję przypisaną do adresu `/render/{username}`.
2. Podepnij do niej widok `view_ex_b1.html.twig` (który możesz znaleźć w katalogu z zadaniami).  
   Widok ten przyjmuje jedną zmienną o nazwie `username`.  
   Przekaż ją.

#### Zadanie 2

1. Przerób zadania:
   * 3 z działu [1_Widoki][widoki]
   * 1 z aktualnego działu
2. W taki sposób, żeby skorzystać z adnotacji `@Template`.  
   Nie usuwaj starego rozwiązania, tylko je zakomentuj.

#### Zadanie 3

1. Stwórz akcję podpiętą do adresu `/repeatSentence/{n}`.
2. Do akcji dopisz widok, który powtórzy `n` razy zdanie `Symfony jest fajne`.  
   Pętle wykonaj w szablonie, przekaż do niego liczbę powtórzeń.

Zmodyfikuj swoje rozwiązanie w taki sposób, żeby zdanie, które wyświetlasz, było przekazane z kontrolera.  
Dopiero w chwili, w której zdanie nie jest przekazane, ma się wyświetlić napis:  
`Symfony jest fajne`.

#### Zadanie 4

1. Stwórz akcję podpiętą do adresu `/createRandoms/{start}/{end}/{n}`.
2. Akcja ma generować tablicę z `n` losowymi liczbami z zakresu `start` do `end`, którą prześlesz do swojego widoku.
3. Następnie w Twigu użyj pętli `for` żeby wyświetlić wszystkie przesłane liczby.
4. Jeżeli tablica jest pusta (czyli podane `n` jest mniejsze lub równe `0`) wyświetl odpowiednią informacje.

#### Zadanie 5

1. Stwórz szablon, który powinien wyświetlić artykuł.  
   Klasę artykułu możesz znaleźć w katalogu z ćwiczeniami.
2. Umieść go w folderze: `/yourBundle/Entity` (jeżeli go nie ma, to go stwórz).
   Pamiętaj o zmianie namespace na poprawny + dołączenia klasy `Article` do Twojego kontrolera:
   ```php
   use <your_bundle>\Entity\Article;
   ```
4. Następnie dopisz akcję `/showArticle/{id}`, która wczyta artykuł o podanym `id` i go wyświetli.

<!-- Links -->
[widoki]: ../1_Widoki#zadanie-3---rozwiązywane-z-wykładowcą
