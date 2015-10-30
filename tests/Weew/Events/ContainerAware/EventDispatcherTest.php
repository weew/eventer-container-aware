<?php

namespace Tests\Weew\ContainerAware\Events;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Weew\Events\ContainerAware\EventDispatcher;
use Weew\Events\ContainerAware\Invokers\CallableInvoker;
use Weew\Events\ContainerAware\Invokers\SubscriberInvoker;

class EventDispatcherTest extends PHPUnit_Framework_TestCase {
    public function test_get_subscription_invokers() {
        $dispatcher = new EventDispatcher(new Container());
        $invokers = $dispatcher->getSubscriptionInvokers();
        $this->assertEquals(2, count($invokers));
        $this->assertTrue($invokers[0] instanceof CallableInvoker);
        $this->assertTrue($invokers[1] instanceof SubscriberInvoker);
    }
}
