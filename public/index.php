<?php

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__).'/vendor/autoload.php';

// Charger les variables d'environnement
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

$env = $_SERVER['APP_ENV'] ?? 'dev';
$debug = (bool) ($_SERVER['APP_DEBUG'] ?? ('dev' === $env));

// Activer le débogage en mode développement
if ($debug) {
    Debug::enable();
}

// Instancier le kernel
$kernel = new App\Kernel($env, $debug);

// Gérer la requête
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

// Terminer le cycle de vie de la requête
$kernel->terminate($request, $response);
