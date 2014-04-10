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
abstract class AbstractExactNumericType extends AbstractNumericType
{
    private $autoIncrement;

    public function __construct($autoIncrement = false, $unsigned = false)
    {
        parent::__construct($unsigned);

        $this->setAutoIncrement($autoIncrement);
    }

    public function setAutoIncrement($autoIncrement)
    {
        $this->autoIncrement = (boolean) $autoIncrement;
    }
}
