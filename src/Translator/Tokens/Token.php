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

namespace Datto\Cinnabari\Translator\Tokens;

abstract class Token
{
	const TYPE_SELECT = 1;
	const TYPE_TABLE = 2;
	const TYPE_JOIN = 3;
	const TYPE_FILTER = 4;
	const TYPE_SORT = 5;
	const TYPE_SLICE = 6;
	const TYPE_VALUE = 7;

	/** @var integer */
	private $tokenType;

	/**
	 * @param integer $tokenType
	 */
	public function __construct($tokenType)
	{
		$this->tokenType = $tokenType;
	}

	/**
	 * @return integer
	 */
	public function getTokenType()
	{
		return $this->tokenType;
	}
}
