<?php

namespace Hybrid\Contracts\Queue;

interface Factory {

    /**
     * Resolve a queue connection instance.
     *
     * @param string|null $name
     * @return \Hybrid\Contracts\Queue\Queue
     */
    public function connection( $name = null );

}
