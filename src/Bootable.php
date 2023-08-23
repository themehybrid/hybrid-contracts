<?php

namespace Hybrid\Contracts;

/**
 * Bootable interface.
 */
interface Bootable {

    /**
     * Boots the class by running `add_action()` and `add_filter()` calls.
     *
     * @return void
     */
    public function boot();

}
