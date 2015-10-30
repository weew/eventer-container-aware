<?php

namespace Tests\Weew\Events\ContainerAware\Stubs;

use Weew\Container\IContainer;
use Weew\Events\IEvent;
use Weew\Events\IEventSubscriber;

class ContainerAwareSubscriber implements IEventSubscriber {
    public function __construct(IContainer $container) {}

    public function handle(IEvent $event) {
        /** @var CustomEvent $event */
        $shared = &$event->getShared();
        $shared[] = 2;
    }
}
