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
use Doctrine\DBAL\Type\AbstractType;

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 *
 * @todo default as object?
 * @todo ordinal position in table?
 * @todo table reference?
 */
class Column extends AbstractObject
{
    private $comment;

    private $default;

    private $nullable;

    private $table;

    private $type;

    public function __construct(
        Table $table,
        Identifier $identifier,
        AbstractType $type,
        $nullable = false,
        $default = null,
        $comment = null
    ) {
        parent::__construct($identifier);

        $this->table = $table;
        $this->type = $type;
        $this->setNullable($nullable);
        $this->setDefault($default);
        $this->setComment($comment);
    }

    public function getTable()
    {
        return $this->table;
    }

    public function setComment($comment)
    {
        $this->comment = (string) $comment;
    }

    public function setDefault($default)
    {
        $this->default = $default;
    }

    public function setNullable($nullable)
    {
        $this->nullable = (boolean) $nullable;
    }

    public function setType(AbstractType $type)
    {
        $this->type = $type;
    }
}
