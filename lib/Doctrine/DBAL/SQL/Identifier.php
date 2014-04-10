<?php

/*
 * This file is part of the DZH package.
 *
 * (c) DZH GmbH <projekte@dzh-online.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\DBAL\SQL;

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 */
class Identifier
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function equals(Identifier $identifier)
    {
        return $this->name === $identifier->getName();
    }
}
