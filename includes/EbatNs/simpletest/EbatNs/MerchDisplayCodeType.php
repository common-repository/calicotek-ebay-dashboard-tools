<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class MerchDisplayCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $DefaultTheme
	var $DefaultTheme = 'DefaultTheme';
	// @var string $StoreTheme
	var $StoreTheme = 'StoreTheme';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function MerchDisplayCodeType()
	{
		$this->EbatNs_FacetType('MerchDisplayCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MerchDisplayCodeType = new MerchDisplayCodeType();

?>
