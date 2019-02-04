<?php

use App\Application;
use Scherzetto\Env\EnvVarsSetter;
use Scherzetto\Env\Parser\DotenvParser;
use Scherzetto\Http\Request;
use Scherzetto\Http\ResponseSender;

require __DIR__.'/../vendor/autoload.php';

$env = getenv('APP_ENV') ?? EnvVarsSetter::ENV_DEV;
(new EnvVarsSetter(new DotenvParser()))->loadEnv('.env', 'APP_ENV', $env);

$app      = new Application();
$request  = Request::createFromGlobals();
$response = $app->handleRequest($request);

$sender = new ResponseSender($response);
$sender->sendResponse();
