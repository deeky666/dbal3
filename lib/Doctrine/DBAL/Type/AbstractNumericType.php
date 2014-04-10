<?php

/*
 * This file is part of the DZH package.
 *
 * (c) DZH GmbH <projekte@dzh-online.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\DBAL\Type;

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 */
class AbstractNumericType extends AbstractType
{
    private $unsigned;

    public function __construct($unsigned = false)
    {
        $this->setUnsigned($unsigned);
    }

    public function setUnsigned($unsigned)
    {
        $this->unsigned = (boolean) $unsigned;
    }
}
