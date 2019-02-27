<img alt="Logo" src="http://coderslab.pl/wp-content/themes/coderslab/svg/logo-coderslab.svg" width="400">

# Symfony 2 - Snippety
> Krótkie kawałki kodu, które pokazują zależności, rozwiązują popularne problemy oraz pokazują jak używać niektórych funkcji.


#### Polecenia konsolowe Symfony

```bash

symfony new nazwa_projektu wersja
# tworzenie nowego projektu symfony

php app/console server:start 0.0.0.0:8080
# uruchomienie serwera na porcie 8080

php app/console server:stop 0.0.0.0:8080
# zatrzymanie serwera pracującego na porcie 8080

########

php app/console generate:bundle
# generowanie nowego bundla

php app/console generate:controller
# generowanie kontrolera

########

php app/console debug:router <nazwa ścieżki>
# informacje o routingu dla <nazwa ścieżki>

php app/console assets:install
# kopiowanie zasobów do katalogu web

php app/console cache:clear
# czyszczenie cache symfony

########
DOCTRINE

php app/console doctrine:database:create
# tworzenie bazy danych

php app/console doctrine:schema:update –force
# generowanie tablicy w bazie danych

php app/console doctrine:generate:entities My_Bundle/Entity/My_Entity
# generowanie seterów i geterów w encji

php app/console doctrine:generate:entity
# generowanie pojedynczej encji

########

php app/console generate:doctrine:crud
php app/console security:encode-password
```

#### Często używane podlinkowania

```php
use Symfony\Component\HttpFoundation\Response;// obiekt Response
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;// adnotacje w routingu
use Symfony\Component\HttpFoundation\Cookie;// do obsługi ciasteczek
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;// do obsługi adnotacji systemu szablonów 
use Doctrine\ORM\Mapping as ORM;// do obsługi adnotacji w plikach modelu
use Doctrine\Common\Collections\ArrayCollection;// w przypadku zwracania tablicy wyników
```

#### Kod realizujący specyficzne zadania w symfony

```php
$request->query->get('name');// $_GET dla wartości name
$request->request->get('page');// $_POST dla wartości page
```

#### Sesja i ciasteczka

```php
$session = $request->getSession();// pobranie sesji do zmiennej $session
$session->set('foo', 'bar');// ustawienie w sesji bar pod kluczem foo
$foobar = $session->get('foo', "default_value");// pobranie z sesji wartości 
//spod klucza foo z wartością domyślną default_value w przypadku braku wartości
$cookie = new Cookie("cookieName", ‘value’, time() + (3600 * 48));// ustawia 
//ciasteczko o nazwie cookieName, z wartością value, na dwie doby.
$response->headers->setCookie($cookie);// zapamiętanie ciasteczka
$cookies = $req->cookies->all();// pobranie wszystkich ciasteczek do tablicy $cookies
$cookieValue = $cookies["cookieName"];// pobranie wartości zapisanej w ciasteczku pod kluczem cookieName
```

#### Przekierowania i generowanie url

```php
$this->redirect($url, array(), 302);// przekierowanie do podanego $url z kodem 
//przekierowania 302, metoda zwraca obiekt typu Request
$url = generateUrl('homepage');// generuje względną ścieżką dostępu do akcji o
//aliasie `homepage`
$url = $this->generateUrl(
    'action_name',
    ['slug' => 'slug_value'],
    UrlGeneratorInterface::ABSOLUTE_URL
);// generowanie bezwzględnej ścieżki dostępu do akcji o aliasie "action_name"
```

#### Twig

```twig
{# Przykład zaawansowanego użycia instrukcji warunkowej if #}
{% if v is null or (v is not null and v <= 0) %}
    {# ... #}
{% elseif v not in [1, 2, 3] %}
    {# ... #}
{% elseif v matches '/wyrazenie_regularne/' %}
    {# ... #}
{% elseif v starts with 'a' %}
    {# ... #}
{% endif %}

{# Przykład użycia pętli #} 
{% for val in arr %}
    {# ... #}
{% else %}
    {# ... #}
{% endfor %}

{# Wywołanie w widoku akcji kontrolera #}
{{ render(controller('AppBundle:Article:recentArticles', { 	'max': 3 } )) }}

{# Przykład dziedziczenia szablonu #}
{% extends "base.html" %}
{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
    <style type="text/css" href="style_2.css">
    </style>
{% endblock %}
{% block content %}
    <h1>Index</h1>
    <p class="important">
        Welcome on my awesome homepage.
    </p>
{% endblock %}
```

#### Model i doctrine

```php
//Przykład zapisania do encji wartości
$em = $this->getDoctrine()->getManager();   
$em->persist($firstPost);
$em->flush();

//Użycie repozytorium
$repository = $this->getDoctrine()->getRepository('My_bundle:My_Entity');
$post = $repository->find($id);
$post = $repository->findOneById($id);
$post = $repository->findOneByTitle('foo');
$post = $repository->findOneByRaiting(4.0);
$post = $repository->findOneByPostText('Some text...');

//Użycie DQL
$query = $em->createQuery(
         'SELECT u FROM myBundle:User u
          BETWEEN :start AND :stop
         ');
$query->setParameter("start", 20);
$query->setParameter("stop", 30);
$users= $query->getResult();
```