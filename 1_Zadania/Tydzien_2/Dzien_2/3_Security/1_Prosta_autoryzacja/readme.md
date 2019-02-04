#  Security
### Prosta autoryzacja

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

1. Stwórz nowy projekt o nazwie `project_static_user`.
2. Następnie:
   * Stwórz w nim nowy bundle o nazwie ... nazwę już powinieneś znać na pamięć :).
   * Usuń `AppBundle`.

#### Zadanie 2

1. W projekcie stwórz kontroler z dwoma akcjami:
   * `/all`
   * `/restricted`
2. Następnie skonfiguruj Symfony tak, żeby akcja `restricted` była dostępna tylko po zalogowaniu.
3. Zrób to używając komponentu `Security` i statycznych użytkowników (wpisanych na stałe do plików konfiguracyjnych).