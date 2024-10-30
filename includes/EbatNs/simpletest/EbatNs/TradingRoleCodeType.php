<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class TradingRoleCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Buyer
	var $Buyer = 'Buyer';
	// @var string $Seller
	var $Seller = 'Seller';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function TradingRoleCodeType()
	{
		$this->EbatNs_FacetType('TradingRoleCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TradingRoleCodeType = new TradingRoleCodeType();

?>
