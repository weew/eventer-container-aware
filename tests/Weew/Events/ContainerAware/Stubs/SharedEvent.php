<?php

namespace Tests\Weew\Events\ContainerAware\Stubs;

use Weew\Events\Event;

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
