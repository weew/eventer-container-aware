<?php

namespace Weew\Events\ContainerAware;

use Weew\Container\IContainer;
use Weew\Events\ContainerAware\Invokers\SubscriberInvoker;
use Weew\Events\EventDispatcher as BaseDispatcher;

class EventDispatcher extends BaseDispatcher {
    /**
     * @var IContainer
     */
    protected $container;

    /**
     * @param IContainer $container
     */
    public function __construct(IContainer $container) {
        $this->container = $container;
        parent::__construct();
    }

    /**
     * @return array
     */
    protected function createDefaultInvokers() {
        return [
            new Invokers\CallableInvoker($this->container),
            new SubscriberInvoker($this->container)
        ];
    }
}
