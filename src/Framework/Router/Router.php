<?php

namespace App\Framework\Router;

use App\Framework\Response\JsonResponse;

class Router
{
    protected $routes = [];
    private $projectDirectory;

    public function __construct($projectDirectory)
    {
        $this->projectDirectory = $projectDirectory;
        $this->init();
    }

    private function init()
    {
        $filename = $this->projectDirectory . '/config/routes.json';

        $json = file_get_contents($filename);

        $this->routes = json_decode($json, true);
    }

    /**
     * @throws \Exception
     */
    public function resolve(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];

        $url = '/' . $_GET['url'];

        if (!isset($this->routes[$url])) {
            $this->redirectTo404();
        }

        $route = $this->routes[$url];

        if ($route['method'] !== $method) {
            $this->redirectTo404();
        }

        $controller = 'App\\Controller\\'.$route['controller'] . 'Controller';
        $controller = new $controller();

        $response = $controller->{$route['function']}();

        if (!$response instanceof JsonResponse) {
            throw new \Exception('Response not valid');
        }

        $this->displayResponse($response);
    }

    private function redirectTo404()
    {
        $response = new JsonResponse([
            'message' => 'Ressource not found'
        ], JsonResponse::STATUS_NOT_FOUND);


        $this->displayResponse($response);
    }

    private function displayResponse(JsonResponse $response)
    {
        http_response_code($response->getStatus());

        echo $response->getData();
        die;
    }
}