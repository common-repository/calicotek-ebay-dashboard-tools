<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class DetailNameCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $CountryDetails
	var $CountryDetails = 'CountryDetails';
	// @var string $CurrencyDetails
	var $CurrencyDetails = 'CurrencyDetails';
	// @var string $PaymentOptionDetails
	var $PaymentOptionDetails = 'PaymentOptionDetails';
	// @var string $RegionDetails
	var $RegionDetails = 'RegionDetails';
	// @var string $ShippingLocationDetails
	var $ShippingLocationDetails = 'ShippingLocationDetails';
	// @var string $ShippingServiceDetails
	var $ShippingServiceDetails = 'ShippingServiceDetails';
	// @var string $SiteDetails
	var $SiteDetails = 'SiteDetails';
	// @var string $TaxJurisdiction
	var $TaxJurisdiction = 'TaxJurisdiction';
	// @var string $URLDetails
	var $URLDetails = 'URLDetails';
	// @var string $TimeZoneDetails
	var $TimeZoneDetails = 'TimeZoneDetails';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// @var string $DispatchTimeMaxDetails
	var $DispatchTimeMaxDetails = 'DispatchTimeMaxDetails';
	// @var string $ItemSpecificDetails
	var $ItemSpecificDetails = 'ItemSpecificDetails';
	// @var string $UnitOfMeasurementDetails
	var $UnitOfMeasurementDetails = 'UnitOfMeasurementDetails';
	// end props

/**
 *

 * @return 
 */
	function DetailNameCodeType()
	{
		$this->EbatNs_FacetType('DetailNameCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DetailNameCodeType = new DetailNameCodeType();

?>
