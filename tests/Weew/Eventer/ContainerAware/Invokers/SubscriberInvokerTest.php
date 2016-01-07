<?php

namespace Tests\Weew\Eventer\ContainerAware\Invokers;

use PHPUnit_Framework_TestCase;
use Tests\Weew\Eventer\ContainerAware\Stubs\ContainerAwareSubscriber;
use Tests\Weew\Eventer\ContainerAware\Stubs\SharedEvent;
use Weew\Container\Container;
use Weew\Eventer\ContainerAware\Invokers\SubscriberInvoker;
use Weew\Eventer\EventSubscription;

class SubscriberInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $shared = [];
        $invoker = new SubscriberInvoker(new Container());
        $event = new SharedEvent();
        $event->setShared($shared);

        $this->assertFalse($invoker->invoke(new EventSubscription(1, 'foo', 'bla'), $event));
        $this->assertEquals([], $shared);
        $this->assertTrue($invoker->invoke(new EventSubscription(1, 'foo', ContainerAwareSubscriber::class), $event));
        $this->assertEquals([2], $shared);
        $this->assertTrue($invoker->invoke(new EventSubscription(1, 'foo', new ContainerAwareSubscriber(new Container())), $event));
        $this->assertEquals([2, 2], $shared);
    }
}
