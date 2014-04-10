<?php

/*
 * This file is part of the DZH package.
 *
 * (c) DZH GmbH <projekte@dzh-online.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\DBAL\Type\String\Binary;

use Doctrine\DBAL\Type\String\AbstractBinaryStringType;
use Doctrine\DBAL\Type\String\VaryingStringType;

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 */
class BinaryType extends AbstractBinaryStringType implements VaryingStringType
{
    private $fixedLength;

    private $length;

    public function __construct($length = 255, $fixedLength = false)
    {
        $this->setLength($length);
        $this->setFixedLength($fixedLength);
    }

    public function getLength()
    {
        return $this->length;
    }

    public function hasFixedLength()
    {
        return $this->fixedLength;
    }

    public function setFixedLength($fixedLength)
    {
        $this->fixedLength = (boolean) $fixedLength;
    }

    public function setLength($length)
    {
        $this->length = (integer) $length;
    }
}
