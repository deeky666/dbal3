<?php

/*
 * This file is part of the DZH package.
 *
 * (c) DZH GmbH <projekte@dzh-online.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\DBAL\Type\Numeric\Approximate;

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 */
final class Accuracy
{
    private $precision;

    private $scale;

    public function __construct($precision, $scale)
    {
        $precision = (integer) $precision;
        $scale = (integer) $scale;

        if ($precision < 1) {
            // throw exception
        }

        if ($scale < 0) {
            // throw exception
        }

        if ($scale > $precision) {
            // throw exception
        }

        $this->precision = $precision;
        $this->scale = $scale;
    }

    public function getPrecision()
    {
        return $this->precision;
    }

    public function getScale()
    {
        return $this->scale;
    }
}
