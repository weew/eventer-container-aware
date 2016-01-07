<?php

namespace Tests\Weew\Eventer\ContainerAware\Stubs;

use Weew\Container\IContainer;
use Weew\Eventer\IEvent;
use Weew\Eventer\IEventSubscriber;

class ContainerAwareSubscriber implements IEventSubscriber {
    public function __construct(IContainer $container) {}

    public function handle(IEvent $event) {
        /** @var CustomEvent $event */
        $shared = &$event->getShared();
        $shared[] = 2;
    }
}
