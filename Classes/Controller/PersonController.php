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
class Tx_Ehrentafel_Controller_PersonController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * personRepository
	 *
	 * @var Tx_Ehrentafel_Domain_Repository_PersonRepository
	 */
	protected $personRepository;

	/**
	 * injectPersonRepository
	 *
	 * @param Tx_Ehrentafel_Domain_Repository_PersonRepository $personRepository
	 * @return void
	 */
	public function injectPersonRepository(Tx_Ehrentafel_Domain_Repository_PersonRepository $personRepository) {
		$this->personRepository = $personRepository;
	}

	/**
	 * action show
	 *
	 * @param Tx_Ehrentafel_Domain_Model_Ehrung $ehrung
	 * @return void
	 */
	public function showAction(Tx_Ehrentafel_Domain_Model_Ehrung $ehrung) {
		$this->view->assign('ehrung', $ehrung);
//		$personen = $this->personRepository->findGeehrte($ehrung->getUid(), t3lib_div::inList('1,2,8,10', $ehrung->getNr()) ? '*' : '');
		$personen = $this->personRepository->findGeehrte($ehrung->getUid(), $ehrung->getSort());
		$this->view->assign('personen', $personen);

// Ehrenteller an Person: {person.name} {person.vorname}, {person.ort} 
// Ehrenteller an Verein: {person.ort} {person.name} (ohne 1. Zeichen) 
/*        if ($ehrung->getNr() == 7) {
            foreach ($personen as $person) {
                if ($person->getOrt()) {
                    preg_match('%[A-Z](.+)%', $person->getName(), $matches);
                    if (preg_match('%^[A-Z]%', $person->getName())) {
                        $geehrt = $person->getName() . ' ' . $person->getVorname() . ', ' . $person->getOrt();
                    } else {
                        $geehrt = preg_replace('%^\*%', '', $person->getOrt()) . ' ' . $matches[1];
                    }
                }
            }
        }   */
	}
}
?>
