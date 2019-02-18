<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorControllerTest extends WebTestCase
{
    public function testShowathor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAthor');
    }

    public function testShowallactor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllActor');
    }

    public function testAddauthor()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addAuthor');
    }

}
