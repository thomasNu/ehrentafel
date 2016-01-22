<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Steffen Liebig <steffen.liebig@gmx.de>
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
 *
 *
 * @package ehrentafel
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Ehrentafel_Domain_Model_Ehrung extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * nr
	 *
	 * @var integer
	 */
	protected $nr;

	/**
	 * titel
	 *
	 * @var string
	 */
	protected $titel;

	/**
	 * sort
	 *
	 * @var string
	 */
	protected $sort;

	/**
	 * person
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Ehrentafel_Domain_Model_Person>
	 */
	protected $person;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->person = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the nr
	 *
	 * @return integer $nr
	 */
	public function getNr() {
		return $this->nr;
	}

	/**
	 * Sets the nr
	 *
	 * @param integer $nr
	 * @return void
	 */
	public function setNr($nr) {
		$this->nr = $nr;
	}

	/**
	 * Returns the titel
	 *
	 * @return string $titel
	 */
	public function getTitel() {
		return $this->titel;
	}

	/**
	 * Sets the titel
	 *
	 * @param string $titel
	 * @return void
	 */
	public function setTitel($titel) {
		$this->titel = $titel;
	}

	/**
	 * Returns the sort
	 *
	 * @return string $sort
	 */
	public function getSort() {
		return $this->sort;
	}

	/**
	 * Sets the sort
	 *
	 * @param string $sort
	 * @return void
	 */
	public function setSort($sort) {
		$this->sort = $sort;
	}

	/**
	 * Adds a Person
	 *
	 * @param Tx_Ehrentafel_Domain_Model_Person $person
	 * @return void
	 */
	public function addPerson(Tx_Ehrentafel_Domain_Model_Person $person) {
		$this->person->attach($person);
	}

	/**
	 * Removes a Person
	 *
	 * @param Tx_Ehrentafel_Domain_Model_Person $personToRemove The Person to be removed
	 * @return void
	 */
	public function removePerson(Tx_Ehrentafel_Domain_Model_Person $personToRemove) {
		$this->person->detach($personToRemove);
	}

	/**
	 * Returns the person
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Ehrentafel_Domain_Model_Person> $person
	 */
	public function getPerson() {
		return $this->person;
	}

	/**
	 * Sets the person
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Ehrentafel_Domain_Model_Person> $person
	 * @return void
	 */
	public function setPerson(Tx_Extbase_Persistence_ObjectStorage $person) {
		$this->person = $person;
	}

}
?>