<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'OrderTransactionType.php';
require_once 'EbatNs_ComplexType.php';

class OrderTransactionArrayType extends EbatNs_ComplexType
{
	// start props
	// @var OrderTransactionType $OrderTransaction
	var $OrderTransaction;
	// end props

/**
 *

 * @return OrderTransactionType
 * @param  $index 
 */
	function getOrderTransaction($index = null)
	{
		if ($index) {
		return $this->OrderTransaction[$index];
	} else {
		return $this->OrderTransaction;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setOrderTransaction($value, $index = null)
	{
		if ($index) {
	$this->OrderTransaction[$index] = $value;
	} else {
	$this->OrderTransaction = $value;
	}

	}
/**
 *

 * @return 
 */
	function OrderTransactionArrayType()
	{
		$this->EbatNs_ComplexType('OrderTransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'OrderTransaction' =>
				array(
					'required' => false,
					'type' => 'OrderTransactionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
