<?php

declare(strict_types=1);

namespace Tests\App\Controller;

use App\Controller\DefaultController;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class DefaultControllerTest extends TestCase
{
    /** @var DefaultController */
    private $controller;

    public function setUp()
    {
        $this->controller = new DefaultController();
    }

    public function testRender()
    {
        $response = $this->controller->render('index.html.twig', []);
        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatusCode());
    }
}
