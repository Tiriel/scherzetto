<?php

declare(strict_types=1);

namespace Tests\Lib\Http;

use Lib\Application;
use Lib\Http\Request;
use Lib\Http\ResponseSender;
use Psr\Http\Message\ResponseInterface;
use Tests\TestCase;

class ResponseSenderTest extends TestCase
{
    /** @var Application */
    private $application;

    /** @var ResponseInterface */
    private $response;

    /** @var ResponseSender */
    private $sender;

    public function setUp()
    {
        $this->application = new Application();
        $this->response = $this->application->handleRequest(new Request([], [], [], ['REQUEST_URI' => '/dummy']));
        $this->sender = new ResponseSender($this->response);
    }

    /**
     * @runInSeparateProcess
     */
    public function testSendResponse()
    {
        ob_start();
        $this->sender->sendResponse();
        $echo = ob_get_clean();

        $this->assertEquals('Not Found', $echo);
    }

    public function testSendHeadersAlreadySent()
    {
        ob_start();
        $this->sender->sendResponse();
        $echo = ob_get_clean();

        $this->assertEquals('Not Found', $echo);
        $this->assertTrue(headers_sent());
    }
}
