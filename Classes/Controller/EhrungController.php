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
class Tx_Ehrentafel_Controller_EhrungController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * ehrungRepository
	 *
	 * @var Tx_Ehrentafel_Domain_Repository_EhrungRepository
	 */
	protected $ehrungRepository;

	/**
	 * injectEhrungRepository
	 *
	 * @param Tx_Ehrentafel_Domain_Repository_EhrungRepository $ehrungRepository
	 * @return void
	 */
	public function injectEhrungRepository(Tx_Ehrentafel_Domain_Repository_EhrungRepository $ehrungRepository) {
		$this->ehrungRepository = $ehrungRepository;
	}

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
	 * action list
	 *
	 * @param Tx_Ehrentafel_Domain_Model_Ehrung $ehrung
	 * @return void
	 */
	public function listAction(Tx_Ehrentafel_Domain_Model_Ehrung $ehrung = NULL) {
		if ($ehrung == NULL) {
			$ehrungen = $this->ehrungRepository->findAllSorted();
			$this->view->assign('ehrungen', $ehrungen);
		} else {
			$this->view->assign('ehrung', $ehrung);
			$personen = $this->personRepository->findGeehrte($ehrung->getUid());
			$this->view->assign('personen', $personen);
		}
	
	}
	/**
	 * action show
	 *
	 * @param Tx_Ehrentafel_Domain_Model_Ehrung $ehrung
	 * @return void
	 */
	public function showAction(Tx_Ehrentafel_Domain_Model_Ehrung $ehrung) {
		$this->view->assign('ehrung', $ehrung);
		$personen = $this->personRepository->findGeehrte($ehrung->getUid(), $ehrung->getSort());
		$this->view->assign('personen', $personen);
	}
}
?>
