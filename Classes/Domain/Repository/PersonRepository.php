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
class Tx_Ehrentafel_Domain_Repository_PersonRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * Finds list of Geehrte ordered by verstorben, name
	 *
	 * @param integer $ehrung Uid Ehrungsart
	 * @param string $sort 
	 * @return array List of Personen ordered
	 */
	public function findGeehrte($ehrung, $sort = '') {
		$query = $this->createQuery();
		$query->matching($query->equals('ehrung', $ehrung));
		$query->setOrderings($sort == '*' 
            ? array(
// 			    'verstorben' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING,
  			    'jahr' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING,
  			    'name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
            )
            : array(
  			    'verstorben' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING,
  			    'name' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
            )
		);
		return $query->execute();
	} 
}
?>
