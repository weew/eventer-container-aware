<?php

namespace Tests\Weew\Events\Invokers;

use PHPUnit_Framework_TestCase;
use Tests\Weew\Events\Stubs\ContainerAwareSubscriber;
use Tests\Weew\Events\Stubs\SharedEvent;
use Weew\Container\Container;
use Weew\Events\EventSubscription;
use Weew\Events\Invokers\ContainerAwareSubscriberInvoker;

class ContainerAwareSubscriberInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $shared = [];
        $invoker = new ContainerAwareSubscriberInvoker(new Container());
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
