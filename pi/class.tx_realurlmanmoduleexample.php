<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2005-2006 Juraj Sulek (juraj@sulek.sk)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * Plugin realurlmanmoduleexample.
 *
 * @author	Juraj Sulek <juraj@sulek.sk>
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   43: class tx_realurlmanmoduleexample extends t3lib_SCbase
 *   52:     function showModule()
 *
 * TOTAL FUNCTIONS: 1
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */

$LANG->includeLLFile('EXT:realurlmanmoduleexample/pi/locallang.php');
class tx_realurlmanmoduleexample extends t3lib_SCbase {

	var $helpfunc;

	/**
	 * return the html of site
	 *
	 * @return	string		HTML
	 */
	function showModule(){
		global $LANG,$BACK_PATH;

		$return_content=$LANG->getLL("label.example_text");

		return $this->pObj->doc->section($LANG->getLL("label.example_titel"),$return_content,0,1);
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/realurlmanmoduleexample/pi/class.tx_realurlmanmoduleexample.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/realurlmanmoduleexample/pi/class.tx_realurlmanmoduleexample.php']);
}

?>