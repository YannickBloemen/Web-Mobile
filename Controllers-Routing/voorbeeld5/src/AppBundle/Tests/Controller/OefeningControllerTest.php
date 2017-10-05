<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OefeningControllerTest extends WebTestCase
{
    public function testIngave()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ingave');
    }

    public function testDone()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/done');
    }

    public function testToon()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/toon');
    }

}
