<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'FeedbackSummaryType.php';
require_once 'AbstractResponseType.php';
require_once 'FeedbackDetailArrayType.php';

class GetFeedbackResponseType extends AbstractResponseType
{
	// start props
	// @var FeedbackDetailArrayType $FeedbackDetailArray
	var $FeedbackDetailArray;
	// @var int $FeedbackDetailItemTotal
	var $FeedbackDetailItemTotal;
	// @var FeedbackSummaryType $FeedbackSummary
	var $FeedbackSummary;
	// @var int $FeedbackScore
	var $FeedbackScore;
	// end props

/**
 *

 * @return FeedbackDetailArrayType
 */
	function getFeedbackDetailArray()
	{
		return $this->FeedbackDetailArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackDetailArray($value)
	{
		$this->FeedbackDetailArray = $value;
	}
/**
 *

 * @return int
 */
	function getFeedbackDetailItemTotal()
	{
		return $this->FeedbackDetailItemTotal;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackDetailItemTotal($value)
	{
		$this->FeedbackDetailItemTotal = $value;
	}
/**
 *

 * @return FeedbackSummaryType
 */
	function getFeedbackSummary()
	{
		return $this->FeedbackSummary;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackSummary($value)
	{
		$this->FeedbackSummary = $value;
	}
/**
 *

 * @return int
 */
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}
/**
 *

 * @return 
 */
	function GetFeedbackResponseType()
	{
		$this->AbstractResponseType('GetFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'FeedbackDetailArray' =>
				array(
					'required' => false,
					'type' => 'FeedbackDetailArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackDetailItemTotal' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackSummary' =>
				array(
					'required' => false,
					'type' => 'FeedbackSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
