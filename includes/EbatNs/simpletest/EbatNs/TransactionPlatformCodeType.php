<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class TransactionPlatformCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $eBay
	var $eBay = 'eBay';
	// @var string $Express
	var $Express = 'Express';
	// @var string $Half
	var $Half = 'Half';
	// @var string $Shopping
	var $Shopping = 'Shopping';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function TransactionPlatformCodeType()
	{
		$this->EbatNs_FacetType('TransactionPlatformCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TransactionPlatformCodeType = new TransactionPlatformCodeType();

?>
