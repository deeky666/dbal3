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
class Table extends AbstractObject
{
    private $columns;

    private $foreignKeyConstraints;

    private $indexes;

    public function __construct(Identifier $identifier) {
        parent::__construct($identifier);

        $this->columns = new SortedColumnSet($this);
        $this->indexes = new IndexSet();
    }

    public function addColumn(Column $column)
    {
        // catch and rethrow exception
        $this->columns->add($column);
    }

    public function dropColumn(Identifier $identifier)
    {
        return $this->columns->remove($identifier);
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function getForeignKeyConstraints()
    {
        return $this->foreignKeyConstraints;
    }

    public function getIndexes()
    {
        return $this->indexes;
    }
}
