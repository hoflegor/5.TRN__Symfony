# PHP &ndash; Symfony - zadania domowe
> Widok i Twig


#### Zadanie 1 - widok dla akcji newEmail
Zmieniamy zwracany przez akcję obiekt typu Respons na widok twiga zawierający formularz HTML.

#### Zadanie 2 - widok dla akcji succesAdd
Zmieniamy zwracany przez akcję obiekt typu Respons na widok zawierający komunikat "Adres email został dodany"

#### Zadanie 3 – widok dla akcji userExist
Akcja ta w przypadku wejścia metodą GET powinna wyświetlać formularz edycji adresu email. 
W przypadku wysłania danych metodą POST powinna uaktualnić adres (narazie fikcyjnie) i zamiast formularza edycji
wyświetlić komunikat „Adres został uaktualniony”.

#### Zadanie 4 - link do usunięcia adresu
Tuż obok formularza edycji w akcji userExist, dodajemy link do usunięcia adresu i sesji użytkownika.
Link prowadzi do akcji deleteEmail przyjmującej jeden parametr na wejściu czyli userToken. 
Link powinien posiadać klasę class="btn".
Akcja po przyjęciu danych z tokenem użytkownika usuwa klucz w sesji oraz prezentuje komunikat „Adres email został usunięty”.