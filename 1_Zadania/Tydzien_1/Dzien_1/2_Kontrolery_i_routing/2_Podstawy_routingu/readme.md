#  Kontrolery i routing
### Podstawy routingu

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1 - rozwiązywane z wykładowcą

1. Stwórz nową akcję przypisaną do adresu `/goodbye/{username}`, gdzie:  
   * `{username}` jest slugiem.
2. Akcja ma wyświetlać napis: `Goodbye ` + nazwa przekazana przez slug.

#### Zadanie 2

1. Stwórz nową akcję przypisaną do adresu `/welcome/{name}/{surname}`, gdzie:  
   * `{name}` i `{surname}` są slugami.
2. Akcja ma wyświetlać napis: `Welcome ` + dane przekazane przez slugi.
3. Nadaj slugom wartości domyślne (np. Twoje imię i nazwisko).

#### Zadanie 3

1. Stwórz nową akcję przypisaną do adresu `/showPost/{id}` gdzie:  
   * `{id}` jest slugiem.
2. Akcja ma wyświetlać napis: `Showing post ` + `id`.
3. Dodaj odpowiednie adnotacje, tak aby `id` było liczbą.

#### Zadanie 4

Stwórz dwie akcje:
1. Pierwsza akcja ma być przypisana do adresu `/form` i metody `GET`.  
   Ma ona wyświetlać formularz zawarty w pliku `form.html.twig` z polem tekstowym.
2. Druga akcja ma być przypisana do adresu `/form` i metody `POST`.  
   Akcja ma, póki co, wyświetlać napis `Formularz przyjęty`.  
   Nie przejmuj się, na tym etapie, przesłanymi danymi.

#### Zadanie 5

1. Dodaj do całego kontrolera przedrostek `/first`.
2. Zobacz, jak zmieniły się adresy wszystkich do tej pory stworzonych przez Ciebie strony.
