<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'StoreCustomPageArrayType.php';
require_once 'AbstractResponseType.php';

class GetStoreCustomPageResponseType extends AbstractResponseType
{
	// start props
	// @var StoreCustomPageArrayType $CustomPageArray
	var $CustomPageArray;
	// end props

/**
 *

 * @return StoreCustomPageArrayType
 */
	function getCustomPageArray()
	{
		return $this->CustomPageArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCustomPageArray($value)
	{
		$this->CustomPageArray = $value;
	}
/**
 *

 * @return 
 */
	function GetStoreCustomPageResponseType()
	{
		$this->AbstractResponseType('GetStoreCustomPageResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CustomPageArray' =>
				array(
					'required' => false,
					'type' => 'StoreCustomPageArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
