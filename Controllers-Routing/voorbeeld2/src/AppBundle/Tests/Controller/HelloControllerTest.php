<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testHello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello');
    }

}
