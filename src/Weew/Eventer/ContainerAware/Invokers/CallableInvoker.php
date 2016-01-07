<?php

namespace Weew\Eventer\ContainerAware\Invokers;

use Weew\Container\IContainer;
use Weew\Eventer\IEvent;
use Weew\Eventer\Invokers\CallableInvoker as BaseInvoker;

class CallableInvoker extends BaseInvoker {
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
