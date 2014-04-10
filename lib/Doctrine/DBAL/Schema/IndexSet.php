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

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 */
class IndexSet implements \IteratorAggregate
{
    /**
     * .
     *
     * @var Index[]
     */
    private $indexes = array();

    public function __construct(array $indexes = array())
    {
        foreach ($indexes as $index) {
            if ( ! $index instanceof Index) {
                // throw exception
            }

            $this->add($index);
        }
    }

    public function add(Index $index)
    {
        foreach ($this->indexes as $presentIndex) {
            if ($presentIndex->getIdentifier()->equals($index->getIdentifier())) {
                // throw exception
            }
        }

        $this->indexes[] = $index;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->indexes);
    }

    public function isEmpty()
    {
        return empty($this->indexes);
    }
}
