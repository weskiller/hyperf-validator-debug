<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ResourceProvider;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;

/**
 * Class TestController
 *
 * @package App\Controller
 * @Controller()
 */
class TestController
{
    /**
     * @Inject()
     * @var \App\Repository\Storage\ResourceProvider
     */
    protected \App\Repository\Storage\ResourceProvider $storageResource;

    /**
     * @Inject()
     * @var \App\Repository\Test\ResourceProvider
     */
    protected \App\Repository\Test\ResourceProvider $testResource;

    /**
     * @Inject()
     * @var ResourceProvider
     */
    protected ResourceProvider $resource;

    /**
     * @RequestMapping(methods={"get"},path="/test")
     *
     * @param  RequestInterface  $request
     * @param  ResponseInterface  $response
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(RequestInterface $request, ResponseInterface $response)
    {
        var_dump(isset($this->storageResource->root),isset($this->testResource->root),isset($this->resource->root));
        return $response->raw(sprintf('%d | %d | %d ',isset($this->storageResource->root),isset($this->testResource->root),isset($this->resource->root)));
    }
}
