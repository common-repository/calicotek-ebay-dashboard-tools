<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'TransactionType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'OrderType.php';

class OrderTransactionType extends EbatNs_ComplexType
{
	// start props
	// @var OrderType $Order
	var $Order;
	// @var TransactionType $Transaction
	var $Transaction;
	// end props

/**
 *

 * @return OrderType
 */
	function getOrder()
	{
		return $this->Order;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setOrder($value)
	{
		$this->Order = $value;
	}
/**
 *

 * @return TransactionType
 */
	function getTransaction()
	{
		return $this->Transaction;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setTransaction($value)
	{
		$this->Transaction = $value;
	}
/**
 *

 * @return 
 */
	function OrderTransactionType()
	{
		$this->EbatNs_ComplexType('OrderTransactionType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Order' =>
				array(
					'required' => false,
					'type' => 'OrderType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Transaction' =>
				array(
					'required' => false,
					'type' => 'TransactionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
