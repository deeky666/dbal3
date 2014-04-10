<?php

/*
 * This file is part of the DZH package.
 *
 * (c) DZH GmbH <projekte@dzh-online.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\DBAL\Schema;

use Doctrine\DBAL\SQL\Identifier;

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 */
class Index extends AbstractObject
{
    private $columns;

    private $table;

    public function __construct(Identifier $identifier, SortedColumnSet $columns)
    {
        $this->columns = $columns;
    }

    public function setTable(Table $table)
    {
        if ($this->table) {
            // throw exception
        }

        $this->table = $table;
    }
}
