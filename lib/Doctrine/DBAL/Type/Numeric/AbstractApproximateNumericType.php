<?php

/*
 * This file is part of the DZH package.
 *
 * (c) DZH GmbH <projekte@dzh-online.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\DBAL\Type\Numeric;

use Doctrine\DBAL\Type\AbstractNumericType;

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 */
abstract class AbstractApproximateNumericType extends AbstractNumericType
{
    private $accuracy;

    public function __construct(Accuracy $accuracy = null, $unsigned = false)
    {
        parent::__construct($unsigned);

        $this->accuracy = $accuracy ?: new Accuracy(10, 0);
    }

    public function setAccuracy(Accuracy $accuracy)
    {
        $this->accuracy = $accuracy;
    }
}
