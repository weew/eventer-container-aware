<?php

namespace Weew\Events\ContainerAware\Invokers;

use Weew\Container\IContainer;
use Weew\Events\IEvent;
use Weew\Events\IEventSubscriber;
use Weew\Events\Invokers\SubscriberInvoker as BaseInvoker;

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
