<?php

namespace Hybrid\Contracts;

/**
 * Renderable interface.
 */
interface Renderable {

    /**
     * Returns an HTML string for output.
     *
     * @return string
     */
    public function render();

}
