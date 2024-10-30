<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class BotBlockResponseType extends EbatNs_ComplexType
{
	// start props
	// @var string $BotBlockToken
	var $BotBlockToken;
	// @var string $BotBlockUrl
	var $BotBlockUrl;
	// @var string $BotBlockAudioUrl
	var $BotBlockAudioUrl;
	// end props

/**
 *

 * @return string
 */
	function getBotBlockToken()
	{
		return $this->BotBlockToken;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBotBlockToken($value)
	{
		$this->BotBlockToken = $value;
	}
/**
 *

 * @return string
 */
	function getBotBlockUrl()
	{
		return $this->BotBlockUrl;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBotBlockUrl($value)
	{
		$this->BotBlockUrl = $value;
	}
/**
 *

 * @return string
 */
	function getBotBlockAudioUrl()
	{
		return $this->BotBlockAudioUrl;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBotBlockAudioUrl($value)
	{
		$this->BotBlockAudioUrl = $value;
	}
/**
 *

 * @return 
 */
	function BotBlockResponseType()
	{
		$this->EbatNs_ComplexType('BotBlockResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BotBlockToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BotBlockUrl' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BotBlockAudioUrl' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
