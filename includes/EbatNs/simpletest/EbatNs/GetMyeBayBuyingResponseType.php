<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'PaginatedItemArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'MyeBayFavoriteSellerListType.php';
require_once 'ItemType.php';
require_once 'MyeBayFavoriteSearchListType.php';
require_once 'BidGroupArrayType.php';
require_once 'PaginatedOrderTransactionArrayType.php';
require_once 'BuyingSummaryType.php';

class GetMyeBayBuyingResponseType extends AbstractResponseType
{
	// start props
	// @var BuyingSummaryType $BuyingSummary
	var $BuyingSummary;
	// @var PaginatedItemArrayType $WatchList
	var $WatchList;
	// @var PaginatedItemArrayType $BidList
	var $BidList;
	// @var PaginatedItemArrayType $BestOfferList
	var $BestOfferList;
	// @var PaginatedOrderTransactionArrayType $WonList
	var $WonList;
	// @var PaginatedItemArrayType $LostList
	var $LostList;
	// @var MyeBayFavoriteSearchListType $FavoriteSearches
	var $FavoriteSearches;
	// @var MyeBayFavoriteSellerListType $FavoriteSellers
	var $FavoriteSellers;
	// @var ItemType $SecondChanceOffer
	var $SecondChanceOffer;
	// @var BidGroupArrayType $BidAssistantList
	var $BidAssistantList;
	// end props

/**
 *

 * @return BuyingSummaryType
 */
	function getBuyingSummary()
	{
		return $this->BuyingSummary;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBuyingSummary($value)
	{
		$this->BuyingSummary = $value;
	}
/**
 *

 * @return PaginatedItemArrayType
 */
	function getWatchList()
	{
		return $this->WatchList;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWatchList($value)
	{
		$this->WatchList = $value;
	}
/**
 *

 * @return PaginatedItemArrayType
 */
	function getBidList()
	{
		return $this->BidList;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBidList($value)
	{
		$this->BidList = $value;
	}
/**
 *

 * @return PaginatedItemArrayType
 */
	function getBestOfferList()
	{
		return $this->BestOfferList;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBestOfferList($value)
	{
		$this->BestOfferList = $value;
	}
/**
 *

 * @return PaginatedOrderTransactionArrayType
 */
	function getWonList()
	{
		return $this->WonList;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setWonList($value)
	{
		$this->WonList = $value;
	}
/**
 *

 * @return PaginatedItemArrayType
 */
	function getLostList()
	{
		return $this->LostList;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setLostList($value)
	{
		$this->LostList = $value;
	}
/**
 *

 * @return MyeBayFavoriteSearchListType
 */
	function getFavoriteSearches()
	{
		return $this->FavoriteSearches;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFavoriteSearches($value)
	{
		$this->FavoriteSearches = $value;
	}
/**
 *

 * @return MyeBayFavoriteSellerListType
 */
	function getFavoriteSellers()
	{
		return $this->FavoriteSellers;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFavoriteSellers($value)
	{
		$this->FavoriteSellers = $value;
	}
/**
 *

 * @return ItemType
 * @param  $index 
 */
	function getSecondChanceOffer($index = null)
	{
		if ($index) {
		return $this->SecondChanceOffer[$index];
	} else {
		return $this->SecondChanceOffer;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setSecondChanceOffer($value, $index = null)
	{
		if ($index) {
	$this->SecondChanceOffer[$index] = $value;
	} else {
	$this->SecondChanceOffer = $value;
	}

	}
/**
 *

 * @return BidGroupArrayType
 */
	function getBidAssistantList()
	{
		return $this->BidAssistantList;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBidAssistantList($value)
	{
		$this->BidAssistantList = $value;
	}
/**
 *

 * @return 
 */
	function GetMyeBayBuyingResponseType()
	{
		$this->AbstractResponseType('GetMyeBayBuyingResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'BuyingSummary' =>
				array(
					'required' => false,
					'type' => 'BuyingSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WatchList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WonList' =>
				array(
					'required' => false,
					'type' => 'PaginatedOrderTransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LostList' =>
				array(
					'required' => false,
					'type' => 'PaginatedItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSearches' =>
				array(
					'required' => false,
					'type' => 'MyeBayFavoriteSearchListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FavoriteSellers' =>
				array(
					'required' => false,
					'type' => 'MyeBayFavoriteSellerListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SecondChanceOffer' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'BidAssistantList' =>
				array(
					'required' => false,
					'type' => 'BidGroupArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
