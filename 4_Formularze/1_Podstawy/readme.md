#  Formularze
### Podstawy

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

Stwórz nowy projekt o nazwie `projekt_form`.
Następnie:
1. Wszystkie zadania rozwiązuj w domyślnym bundlu `AppBundle`

#### Zadanie 2

1. Wygeneruj model `Tweet`, który ma zawierać:
   * id,
   * nazwę,
   * tekst.

2. Wygeneruj dla niego Kontroler z następującymi akcjami:
   * `create`,
   * `new`,
   * `showAll`.

Póki co napisz akcję `showAll`, która wyświetli tytuły wszystkich Tweetów w bazie danych.

#### Zadanie 3

1. Napisz dla Tweeta następujące akcje:
   * `new`, która ma wyświetlać formularz,
   * `create`, która ma na podstawie formularza tworzyć nową encję i zapisywać do bazy danych.

#### Zadanie 4

1. Dopisz akcję `/update/{id}`.
2. Jeżeli wejdziemy na nią metodą `GET`, to ma wczytać Tweet o podanym `id` i następnie wyświetlić do niego formularz do edycji.
3. Jeżeli wejdziemy na nią metodą `POST`, to powinna zapamiętać wysłane informacje do bazy danych.