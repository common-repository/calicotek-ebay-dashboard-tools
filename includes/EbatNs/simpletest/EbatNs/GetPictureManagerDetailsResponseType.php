<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PictureManagerDetailsType.php';
require_once 'AbstractResponseType.php';

class GetPictureManagerDetailsResponseType extends AbstractResponseType
{
	// start props
	// @var PictureManagerDetailsType $PictureManagerDetails
	var $PictureManagerDetails;
	// end props

/**
 *

 * @return PictureManagerDetailsType
 */
	function getPictureManagerDetails()
	{
		return $this->PictureManagerDetails;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPictureManagerDetails($value)
	{
		$this->PictureManagerDetails = $value;
	}
/**
 *

 * @return 
 */
	function GetPictureManagerDetailsResponseType()
	{
		$this->AbstractResponseType('GetPictureManagerDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PictureManagerDetails' =>
				array(
					'required' => false,
					'type' => 'PictureManagerDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>