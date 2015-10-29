<?php

namespace Weew\Events\Invokers;

use Weew\Container\IContainer;
use Weew\Events\IEvent;

class ContainerAwareCallableInvoker extends CallableInvoker {
    /**
     * @var IContainer
     */
    protected $container;

    /**
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        $this->container = $container;
    }

    /**
     * @param callable $subscriber
     * @param IEvent $event
     */
    protected function invokeSubscriber(callable $subscriber, IEvent $event) {
        $this->container->call($subscriber, ['event' => $event]);
    }
}
