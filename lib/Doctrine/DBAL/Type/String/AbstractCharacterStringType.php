<?php

/*
 * This file is part of the DZH package.
 *
 * (c) DZH GmbH <projekte@dzh-online.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\DBAL\Type\String;

use Doctrine\DBAL\Type\AbstractStringType;

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 *
 * @todo collation as object?
 */
abstract class AbstractCharacterStringType extends AbstractStringType
{
    private $collation;

    public function __construct($collation = null)
    {
        $this->setCollation($collation);
    }

    public function setCollation($collation)
    {
        $this->collation = $collation;
    }
}
