<?php

namespace Tests\Weew\Eventer\ContainerAware\Stubs;

use Weew\Eventer\Event;

class SharedEvent extends Event {
    private $shared;

    public function getFoo() {
        return 'foo';
    }

    public function setShared(array &$shared) {
        $this->shared = &$shared;
    }

    public function &getShared() {
        return $this->shared;
    }
}
