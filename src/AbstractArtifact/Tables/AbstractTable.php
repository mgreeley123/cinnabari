<?php

/**
 * Copyright (C) 2016, 2017 Datto, Inc.
 *
 * This file is part of Cinnabari.
 *
 * Cinnabari is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * Cinnabari is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Cinnabari. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Mark Greeley mgreeley@datto.com>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL-3.0
 * @copyright 2016, 2017 Datto, Inc.
 */

namespace Datto\Cinnabari\AbstractArtifact\Tables;

use Datto\Cinnabari\Pixies\AliasMapper;

/**
 * Abstract class AbstractTable
 *
 * A FROM/INTO table, JOIN, or SELECT subquery.
 */
abstract class AbstractTable
{
    /** @var string */
    private $tag;

    /**
     * AbstractTable constructor.
     *
     * Construct a table per the parameters, and assign it a tag (see class AliasMapper).
     *
     * @param AliasMapper $mapper
     */
    public function __construct(AliasMapper $mapper)
    {
        $this->tag = $mapper->createTableTag();
    }

    /**
     * Return the tag for this table (see class AliasMapper)
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }
}
