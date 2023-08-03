<?php

namespace Hybrid\Contracts;

/**
 * Renderable interface.
 *
 * @since  1.0.0
 *
 * @access public
 */
interface Renderable {

    /**
     * Returns an HTML string for output.
     *
     * @since  1.0.0
     * @return string
     *
     * @access public
     */
    public function render();

}
