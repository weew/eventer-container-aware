<?php

namespace Weew\Events;

use Weew\Container\IContainer;
use Weew\Events\Invokers\ContainerAwareCallableInvoker;
use Weew\Events\Invokers\ContainerAwareSubscriberInvoker;

class ContainerAwareEventDispatcher extends EventDispatcher {
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
            new ContainerAwareCallableInvoker($this->container),
            new ContainerAwareSubscriberInvoker($this->container)
        ];
    }
}
