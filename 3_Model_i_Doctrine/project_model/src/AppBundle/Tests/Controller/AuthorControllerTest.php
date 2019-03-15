<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorControllerTest extends WebTestCase
{
    public function testCreateauthor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createAuthor');
    }

    public function testShowauthor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAuthor');
    }

    public function testShowallauthors()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllAuthors');
    }

}
