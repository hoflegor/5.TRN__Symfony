#  Formularze
### Zaawansowane

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

1. Wygeneruj model `User`, który ma zawierać:
   * id,
   * nick,
   * tweet_id,
2. Połącz model `User` z modelem `Tweet` relacją jeden do jednego jednokierunkową.
3. Wygeneruj dla niego Kontroler z następującymi akcjami:
   * `create`
   * `new`
   * `showAll`

#### Zadanie 2

1. Formularz dodawania nowego użytkownika (akcja `new`) powinien umożliwiać wybór Tweeta za pośrednictwem pola wyboru.
2. Użyj do tego celu specjalnego pola wyboru encji w formularzu.

#### Zadanie 3

1. Zmodyfikuj widok formularza w taki sposób aby każde jego pole znajdowało się w oddzielnym tagu html `<div></div>`.
2. Potrzebne Ci będą metody twiga jak `form_widget()`, `form_label()` itp.
