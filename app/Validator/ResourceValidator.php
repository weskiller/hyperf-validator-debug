<?php


namespace App\Validator;


use App\Repository\ResourceProvider;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Event\Annotation\Listener;
use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Validation\Event\ValidatorFactoryResolved;

/**
 * Class ResourceValidator
 *
 * @package App\Validator
 * @Listener()
 */
class ResourceValidator implements ListenerInterface
{
    public function listen(): array
    {
        return [
            ValidatorFactoryResolved::class,
        ];
    }

    /**
     * @Inject()
     * @var ResourceProvider
     */
    protected ResourceProvider $provider;

    public function process(object $event)
    {
        return true;
    }
}