#  Symfony 2
### Walidacja

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

1. Stwórz nowy projekt o nazwie `project_validation`
2. Następnie:
1. Wszystkie zadania rozwiązuj w domyślnym bundlu `AppBundle`

#### Zadanie 2

1. W projekcie stwórz nową encję `Książka`, która ma mieć następujące pola i walidacje:
   * `id`
   * `title` - napis, co najmniej `5` znaków
   * `rating` - `float` w przedziale od `0.00` do `10.00`
   * `description` - tekst, maksymalnie `600` znaków
   * `pages` - `int`, większy od `0`

#### Zadanie 3

1. W projekcie stwórz nową encję `Autor`, która ma mieć następujące pola i walidacje:
   * `id`
   * `name` - napis, co najmniej `5` znaków
   * `description` - tekst, maksymalnie `600` znaków
   * `age` - `int`, co najmniej `18`

#### Zadanie 4

1. Połącz stworzone encje relacją wiele do jednego (dwukierunkową).  
   Pamiętaj o wygenerowaniu odpowiednich setterów i getterów dla relacji (użyj do tego konsoli).
   Pamiętaj o walidacji, w przypadku `Książki`, `Autor` musi być nastawiony (nie może być `null`)!
