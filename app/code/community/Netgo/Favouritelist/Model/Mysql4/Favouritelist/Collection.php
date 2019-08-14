<?php
/***************************************
 *** My Favourite List ***
 ***************************************
 *
 * @copyright   Copyright (c) 2015
 * @company     NetAttingo Technologies
 * @package     Netgo_Favouritelist
 * @author 		NetGo
 * @dev			netattingomails@gmail.com
 *
 */
 
    class Netgo_Favouritelist_Model_Mysql4_Favouritelist_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
    {

		public function _construct(){
			$this->_init("favouritelist/favouritelist");
		}

		

    }
	 