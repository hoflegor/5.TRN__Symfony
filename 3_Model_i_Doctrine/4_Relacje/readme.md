#  Model i Doctrine
### Relacje

**WAŻNE -  nie zmieniaj struktury/nazw plików oraz korzystaj z przygotowanych zmiennych**

#### Zadanie 1

1. Stwórz model i kontroler dla `autora`
2. Model powinien mieć następujące informację:
   * Id,
   * Imię i nazwisko,
   * Opis.
3. Kontroler powinien umożliwiać:
   * tworzenie nowego autora w systemie,
   * wyświetlenia autora,
   * wyświetlenia wszystkich autorów.

#### Zadanie 2

1. Połącz autora i książkę relacją jeden do wielu (dwukierunkowa).
2. Pamiętaj o ponownym wygenerowaniu bazy danych, setterów, getterów do obu klas za pomocą odpowiednich komend konsolowych.

#### Zadanie 3

1. Zmodyfikuj tworzenie książki, tak żeby użytkownik mógł wybrać jej autora.
2. W tym celu w kontrolerze wczytaj wszystkich autorów i podaj ich do widoku.  
   W widoku w pętli dodaj ich wszystkich do elementu `select`.

#### Zadanie 4

1. Zmodyfikuj wyświetlania zarówno książki, jak i autora.
2. Książka powinna pokazywać dane swojego autora (imię i nazwisko) i podawać link do jego strony.
3. Autor powinien wypisywać, ile ma książek.  
   Następnie w liście pokazywać ich nazwy i linki do stron książek.
