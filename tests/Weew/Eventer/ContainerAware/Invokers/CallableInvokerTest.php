<?php

namespace Tests\Weew\Eventer\ContainerAware\Invokers;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Weew\Container\IContainer;
use Weew\Eventer\ContainerAware\Invokers\CallableInvoker;
use Weew\Eventer\EventSubscription;
use Weew\Eventer\GenericEvent;

class CallableInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $shared = [];
        $invoker = new CallableInvoker(new Container());
        $subscription = new EventSubscription(1, 'foo', function(IContainer $container) use (&$shared) {
            $shared[] = 1;
        });

        $this->assertFalse($invoker->invoke(new EventSubscription(1, 'foo', 'bla'), new GenericEvent()));
        $this->assertEquals([], $shared);
        $this->assertTrue($invoker->invoke($subscription, new GenericEvent()));
        $this->assertEquals([1], $shared);
    }
}
