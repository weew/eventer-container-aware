<?php

namespace Tests\Weew\ContainerAware\Eventer;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Weew\Eventer\ContainerAware\Eventer;
use Weew\Eventer\ContainerAware\Invokers\CallableInvoker;
use Weew\Eventer\ContainerAware\Invokers\SubscriberInvoker;

class EventDispatcherTest extends PHPUnit_Framework_TestCase {
    public function test_get_subscription_invokers() {
        $eventer = new Eventer(new Container());
        $invokers = $eventer->getSubscriptionInvokers();
        $this->assertEquals(2, count($invokers));
        $this->assertTrue($invokers[0] instanceof CallableInvoker);
        $this->assertTrue($invokers[1] instanceof SubscriberInvoker);
    }

    public function test_get_and_set_container() {
        $eventer = new Eventer(new Container());
        $container = new Container();
        $eventer->setContainer($container);
        $this->assertTrue($container === $eventer->getContainer());
    }
}
