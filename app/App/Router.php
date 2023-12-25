<?php

namespace TugasBesar\BookingClass2g\App;

class Router
{
    private static array $_routes = [];
    public static function add(
        string $method,
        string $path,
        string $controller,
        string $function,
        array $middlewares = []
    ): void {
        $variables = [];
        $pattern = preg_replace_callback('/{([a-zA-Z0-9_]+)}/', function ($matches) use (&$variables) {
            $variables[] = $matches[1];
            return '([a-zA-Z0-9_]+)';
        }, $path);
        $pattern = '#^' . $pattern . '$#';


        self::$_routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middlewares,
            'pattern' => $pattern,
            'variables' => $variables,
        ];
    }

    public static function run(): void
    {
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$_routes as $route) {
            if (preg_match($route['pattern'], $path, $matches) && $method == $route['method']) {
                array_shift($matches);
                $variables = array_combine($route['variables'], $matches);

                try {
                    // memanggil middleware
                    foreach ($route['middleware'] as $middleware) {
                        $instance = new $middleware;
                        $instance->before();
                    }

                    $function = $route['function'];
                    $controller = new $route['controller'];

                    if ($method == 'POST')
                        $variables[] = new Request();

                    call_user_func_array([$controller, $function], $variables);
                    return;
                } catch (\Throwable $e) {
                    $env = parse_ini_file(__DIR__ . '/../../.env');
                    if ($env['ENVIRONMENT'] == 'development') {
                        http_response_code(500);
                        echo "INTERNAL SERVER ERROR: ";
                        echo "<pre>"
                            . $e->getMessage() . "\n"
                            . $e->getTraceAsString() . "\n"
                            . "</pre>";
                        return;
                    } else {
                        http_response_code(500);
                        return;
                    }
                }
            }
        }

        http_response_code(404);
        include_once '404.php';
    }
}
