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

/**
 * .
 *
 * @author Steve Müller <st.mueller@dzh-online.de>
 */
interface VaryingStringType
{
    public function getLength();

    public function hasFixedLength();

    public function setFixedLength($fixedLength);

    public function setLength($length);
}
