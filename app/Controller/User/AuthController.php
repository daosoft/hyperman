<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\ViewEngine\Contract\Renderable;

/**
 * @AutoController(prefix="user")
 * Class AuthController
 * @package App\Controller\User
 */
class AuthController extends AbstractController
{
    /**
     * @return Renderable
     */
    public function login(): Renderable
    {
        return $this->display('login');
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function loginHandler(RequestInterface $request): ResponseInterface
    {
        return $this->succeed([
            'method' => 'handle',
            'message' => 'Login',
        ]);
    }

    /**
     * @return Renderable
     */
    public function register(): Renderable
    {
        return $this->display('register');
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function registerHandler(RequestInterface $request): ResponseInterface
    {
        return $this->succeed([
            'method' => 'handle',
            'message' => 'Register',
        ]);
    }
}
