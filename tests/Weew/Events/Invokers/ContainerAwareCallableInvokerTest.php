<?php

namespace Tests\Weew\Events\Invokers;

use PHPUnit_Framework_TestCase;
use Weew\Container\Container;
use Weew\Container\IContainer;
use Weew\Events\EventSubscription;
use Weew\Events\GenericEvent;
use Weew\Events\Invokers\ContainerAwareCallableInvoker;

class ContainerAwareCallableInvokerTest extends PHPUnit_Framework_TestCase {
    public function test_invoke() {
        $shared = [];
        $invoker = new ContainerAwareCallableInvoker(new Container());
        $subscription = new EventSubscription(1, 'foo', function(IContainer $container) use (&$shared) {
            $shared[] = 1;
        });

        $this->assertFalse($invoker->invoke(new EventSubscription(1, 'foo', 'bla'), new GenericEvent()));
        $this->assertEquals([], $shared);
        $this->assertTrue($invoker->invoke($subscription, new GenericEvent()));
        $this->assertEquals([1], $shared);
    }
}
