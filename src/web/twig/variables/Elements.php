<?php
/**
 * @link      http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   http://craftcms.com/license
 */

namespace craft\app\web\twig\variables;

use craft\app\base\ElementInterface;

/**
 * Class Elements variable.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class Elements
{
    // Public Methods
    // =========================================================================

    /**
     * Returns an element type.
     *
     * @param ElementInterface $class
     *
     * @return ElementInterface|null
     */
    public function getElementInstance($class)
    {
        return new $class;
    }
}