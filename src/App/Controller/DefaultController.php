<?php

declare(strict_types=1);

namespace App\Controller;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Scherzetto\Templating\Templater;

class DefaultController
{
    /**
     * @var Templater
     */
    private $templater;

    public function __construct()
    {
        $this->templater = new Templater();
    }

    public function notFoundAction()
    {
        return $this->returnResponse('Not Found', 404);
    }

    public function render($template, array $params): ResponseInterface
    {
        $view = $this->templater->render($template, $params);

        return $this->returnResponse($view);
    }

    public function returnResponse($body = '', $statusCode = 200): ResponseInterface
    {
        $headers = [
            'Content-Type' => ['text/html; charset=UTF-8'],
            'Cache-Control' => ['max-age=172800', 'public'],
        ];

        return new Response($statusCode, $headers, $body);
    }
}
