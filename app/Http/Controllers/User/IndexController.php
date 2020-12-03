<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\AbstractController;
use App\Http\Middleware\AuthMiddleware;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Annotation\Middleware;
use Psr\Http\Message\ResponseInterface;

/**
 * @Controller(prefix="user")
 * @Middleware(AuthMiddleware::class)
 * Class IndexController
 * @package App\Http\Controllers\User
 */
class IndexController extends AbstractController
{
    /**
     * @GetMapping(path="")
     * @return ResponseInterface
     */
    public function index(): ResponseInterface
    {
        return $this->display('user');
    }
}
