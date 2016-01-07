<?php

namespace Weew\Eventer\ContainerAware;

use Weew\Container\IContainer;
use Weew\Eventer\ContainerAware\Invokers\CallableInvoker;
use Weew\Eventer\ContainerAware\Invokers\SubscriberInvoker;
use Weew\Eventer\Eventer as BaseEventer;

class Eventer extends BaseEventer {
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
            new CallableInvoker($this->container),
            new SubscriberInvoker($this->container)
        ];
    }
}
