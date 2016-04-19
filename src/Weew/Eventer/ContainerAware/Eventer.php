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
        $this->setContainer($container);
        parent::__construct();
    }

    /**
     * @return IContainer
     */
    public function getContainer() {
        return $this->container;
    }

    /**
     * @param IContainer $container
     */
    public function setContainer(IContainer $container) {
        $this->container = $container;
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
