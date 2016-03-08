<?php

namespace Weew\Eventer\ContainerAware\Invokers;

use Weew\Container\IContainer;
use Weew\Eventer\IEvent;
use Weew\Eventer\Invokers\SubscriberInvoker as BaseInvoker;

class SubscriberInvoker extends BaseInvoker {
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
     * @param $class
     *
     * @return mixed
     */
    protected function createSubscriber($class) {
        return $this->container->get($class);
    }

    /**
     * @param $subscriber
     * @param IEvent $event
     */
    protected function invokeSubscriber($subscriber, IEvent $event) {
        $this->container->callMethod($subscriber, 'handle', ['event' => $event]);
    }
}
