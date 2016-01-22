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
class Tx_Ehrentafel_Domain_Model_Person extends Tx_Extbase_DomainObject_AbstractEntity {

    /**
     * ehrung
     *
     * @var integer
     */
    protected $ehrung;

    /**
     * name
     *
     * @var string
     */
    protected $name;

    /**
     * vorname
     *
     * @var string
     */
    protected $vorname;

    /**
     * jahr
     *
     * @var string
     */
    protected $jahr;
     /**
     * ort
     *
     * @var string
     */
    protected $ort;
    /**
     * text
     *
     * @var string
     */

    protected $text;

    /**
     * verstorben
     *
     * @var boolean
     */
    protected $verstorben = FALSE;

    /**
     * Returns the ehrung
     *
     * @return integer $ehrung
     */
    public function getEhrung() {
        return $this->ehrung;
    }

    /**
     * Sets the ehrung
     *
     * @param integer $ehrung
     * @return void
     */
    public function setEhrung($ehrung) {
        $this->ehrung = $ehrung;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Returns the vorname
     *
     * @return string $vorname
     */
    public function getVorname() {
        return $this->vorname;
    }

    /**
     * Sets the vorname
     *
     * @param string $vorname
     * @return void
     */
    public function setVorname($vorname) {
        $this->vorname = $vorname;
    }

   /**
     * Returns the ort
     *
     * @return string $ort
     */
    public function getOrt() {
        return $this->ort;
    }

    /**
     * Sets the ort
     *
     * @param string $ort
     * @return void
     */
    public function setOrt($ort) {
        $this->ort = $ort;
    }

    /**
     * Returns the jahr
     *
     * @return string $jahr
     */
    public function getJahr() {
        return $this->jahr;
    }

    /**
     * Sets the jahr
     *
     * @param string $jahr
     * @return void
     */
    public function setJahr($jahr) {
        $this->jahr = $jahr;
    }

    /**
     * Returns the text
     *
     * @return string $text
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText($text) {
        $this->text = $text;
    }

    /**
     * Returns the verstorben
     *
     * @return boolean $verstorben
     */
    public function getVerstorben() {
        return $this->verstorben;
    }

    /**
     * Sets the verstorben
     *
     * @param boolean $verstorben
     * @return void
     */
    public function setVerstorben($verstorben) {
        $this->verstorben = $verstorben;
    }

    /**
     * Returns the boolean state of verstorben
     *
     * @return boolean
     */
    public function isVerstorben() {
        return $this->getVerstorben();
    }

}
?>
