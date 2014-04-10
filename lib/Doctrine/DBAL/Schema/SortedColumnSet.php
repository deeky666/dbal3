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
class SortedColumnSet implements \IteratorAggregate
{
    /**
     * .
     *
     * @var Column[]
     */
    private $columns;

    /**
     * .
     *
     * @var Table
     */
    private $table;

    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    public function add(Column $column)
    {
        if ( ! $column->getTable()->getIdentifier()->equals($this->table->getIdentifier())) {
            // throw exception
        }

        foreach ($this->columns as $presentColumn) {
            if ($presentColumn->getIdentifier()->equals($column->getIdentifier())) {
                // throw exception
            }
        }

        $this->columns[] = $column;
    }

    public function contains(Identifier $identifier)
    {
        foreach ($this->columns as $column) {
            if ($column->getIdentifier()->equals($identifier)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->columns);
    }

    public function remove(Identifier $identifier)
    {
        foreach ($this->columns as $index => $column) {
            if ($column->getIdentifier()->equals($identifier)) {
                unset($this->columns[$index]);

                return true;
            }
        }

        return false;
    }
}
