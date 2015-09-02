<?php
namespace In2code\PowermailCond\Domain\Model;

use In2code\Powermail\Domain\Model\Field;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Alex Kellner <alexander.kellner@in2code.de>, in2code.de
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Rule Model
 *
 * @package powermail_cond
 * @license http://www.gnu.org/licenses/lgpl.html
 * 			GNU Lesser General Public License, version 3 or later
 */
class Rule extends AbstractEntity {

	/**
	 * Internal title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * relation to start field
	 *
	 * @var \In2code\Powermail\Domain\Model\Field
	 */
	protected $startField = '';

	/**
	 * 0 is set
	 * 1 is not set
	 * 2 contains
	 * 3 contains not
	 * 4 is
	 * 5 is not
	 * 6 greater than
	 * 7 less than
	 * 8 contains value from field
	 * 9 contains not value from field
	 *
	 * @var int
	 */
	protected $ops = 0;

	/**
	 * @var string
	 */
	protected $condString = '';

	/**
	 * @var string
	 */
	protected $equalField = '';

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return Condition
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return Field
	 */
	public function getStartField() {
		return $this->startField;
	}

	/**
	 * @param Field $startField
	 * @return Rule
	 */
	public function setStartField($startField) {
		$this->startField = $startField;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getOps() {
		return $this->ops;
	}

	/**
	 * @param int $ops
	 * @return Rule
	 */
	public function setOps($ops) {
		$this->ops = $ops;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCondString() {
		return $this->condString;
	}

	/**
	 * @param string $condString
	 * @return Rule
	 */
	public function setCondString($condString) {
		$this->condString = $condString;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEqualField() {
		return $this->equalField;
	}

	/**
	 * @param string $equalField
	 * @return Rule
	 */
	public function setEqualField($equalField) {
		$this->equalField = $equalField;
		return $this;
	}
}