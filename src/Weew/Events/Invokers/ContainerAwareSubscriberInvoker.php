<?php

namespace Weew\Events\Invokers;

use Weew\Container\IContainer;
use Weew\Events\IEvent;
use Weew\Events\IEventSubscriber;

class ContainerAwareSubscriberInvoker extends SubscriberInvoker {
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
     * @return IEventSubscriber
     */
    protected function createSubscriber($class) {
        return $this->container->get($class);
    }

    /**
     * @param IEventSubscriber $subscriber
     * @param IEvent $event
     */
    protected function invokeSubscriber(IEventSubscriber $subscriber, IEvent $event) {
        $this->container->callMethod($subscriber, 'handle', ['event' => $event]);
    }
}
