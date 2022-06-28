<?php

namespace Hybrid\Contracts;

/**
 * Bootable interface.
 *
 * @since  1.0.0
 *
 * @access public
 */
interface Bootable {

    /**
     * Boots the class by running `add_action()` and `add_filter()` calls.
     *
     * @since  1.0.0
     * @return void
     *
     * @access public
     */
    public function boot();

}
