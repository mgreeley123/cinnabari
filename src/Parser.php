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
 * @author Spencer Mortensen <smortensen@datto.com>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL-3.0
 * @copyright 2016, 2017 Datto, Inc.
 */

namespace Datto\Cinnabari;

use Datto\Cinnabari\AbstractRequest\Node;
use Datto\Cinnabari\Parser\Language\Functions;
use Datto\Cinnabari\Parser\Language\Operators;
use Datto\Cinnabari\Parser\Language\Properties;

class Parser
{
    /** @var Parser\Parser */
    private $parser;

    /** @var Parser\Resolver */
    private $resolver;

    public function __construct(Functions $functions, Operators $operators, Properties $properties)
    {
        $this->parser = new Parser\Parser($operators);
        $this->resolver = new Parser\Resolver($functions, $properties);
    }

    /**
     * @param string $input
     * @return Node
     * @throws Exception
     */
    public function parse($input)
    {
        $request = $this->parser->parse($input);
        return $this->resolver->resolve($request);
    }
}
