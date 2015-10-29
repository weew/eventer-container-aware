<?php

namespace Tests\Weew\Events;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Weew\Events\ContainerAwareEventDispatcher;
use Weew\Events\Invokers\ContainerAwareCallableInvoker;
use Weew\Events\Invokers\ContainerAwareSubscriberInvoker;

class ContainerAwareEventDispatcherTest extends PHPUnit_Framework_TestCase {
    public function test_get_subscription_invokers() {
        $dispatcher = new ContainerAwareEventDispatcher(new Container());
        $invokers = $dispatcher->getSubscriptionInvokers();
        $this->assertEquals(2, count($invokers));
        $this->assertTrue($invokers[0] instanceof ContainerAwareCallableInvoker);
        $this->assertTrue($invokers[1] instanceof ContainerAwareSubscriberInvoker);
    }
}
