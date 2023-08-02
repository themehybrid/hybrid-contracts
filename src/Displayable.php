<?php
/**
 * Displayable contract.
 *
 * Displayable classes should implement a `display()` method. The intent of this
 * method is to output an HTML string to the screen. This data should already be
 * escaped prior to being output.
 *
 * @package   HybridContracts
 * @link      https://github.com/themehybrid/hybrid-contracts
 *
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2021, Justin Tadlock
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Contracts;

/**
 * Displayable interface.
 *
 * @since  1.0.0
 *
 * @access public
 */
interface Displayable {

    /**
     * Prints the HTML string.
     *
     * @since  1.0.0
     * @return void
     *
     * @access public
     */
    public function display();

}
