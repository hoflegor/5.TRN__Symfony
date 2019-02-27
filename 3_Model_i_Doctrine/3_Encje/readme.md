#  Model i Doctrine
### Encje

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

1. Stwórz akcję `/newBook`, która ma wyświetlać formularz do tworzenia nowej książki
2. Formularz, póki co, napisz w normalnym HTML
3. Formularz ma kierować do akcji `/createBook`

#### Zadanie 2

1. Stwórz akcję `/createBook`
2. Akcja ta ma pobierać informacje z `POST` i na jej podstawie tworzyć i zapamiętywać do bazy danych nową książkę
3. Na razie powinna wyświetlać statyczną informację o tym, że udało się stworzyć książkę (co zweryfikuj za pomocą `PHPMyAdmin`)

#### Zadanie 3

1. Stwórz akcję `/showBook/{id}`, która ma pobierać książkę o podanym `id` z bazy danych i wyświetlać jej informację na stronie
2. Zmodyfikuj akcję `/createBook` tak żeby po stworzeniu nowej książki przekierowywała do akcji `/showBook` dla nowo dodanej książki

#### Zadanie 4

1. Stwórz akcję podpiętą do adresu `/showAllBooks`
2. Powinna ona wczytać wszystkie książki i wyświetlić ich tytuły
3. Przy każdej książce powinien być link do wyświetlenia pełnej informacji o niej

#### Zadanie 5

1. Stwórz akcję podpiętą do adresu `/deleteBook/{id}`
2. Powinna ona usuwać książkę o podanym `id` i wyświetlać komunikat o usunięciu