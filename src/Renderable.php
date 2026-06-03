<?php

namespace Hybrid\Contracts;

interface Renderable {
    /**
     * Returns an HTML string for output.
     *
     * @return string
     */
    public function render();
}
