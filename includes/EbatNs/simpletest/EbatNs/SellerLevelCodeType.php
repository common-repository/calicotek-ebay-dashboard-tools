<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class SellerLevelCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Bronze
	var $Bronze = 'Bronze';
	// @var string $Silver
	var $Silver = 'Silver';
	// @var string $Gold
	var $Gold = 'Gold';
	// @var string $Platinum
	var $Platinum = 'Platinum';
	// @var string $Titanium
	var $Titanium = 'Titanium';
	// @var string $None
	var $None = 'None';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function SellerLevelCodeType()
	{
		$this->EbatNs_FacetType('SellerLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellerLevelCodeType = new SellerLevelCodeType();

?>
