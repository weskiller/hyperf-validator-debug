<?php


namespace App\Repository;

use Hyperf\Config\Annotation\Value;


class ResourceProvider
{
    /**
     * @Value("storage.root")
     * @var string
     */
    public string $root;

    /**
     * @Value("storage.prefix")
     * @var string
     */
    public string $prefix;

    /**
     * @Value("storage.tmp")
     * @var string
     */
    public string $tmp;
}
