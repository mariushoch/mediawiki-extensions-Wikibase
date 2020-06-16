<?php

declare( strict_types = 1 );
namespace Wikibase\Repo\FederatedProperties;

use Wikibase\DataModel\Entity\PropertyId;
use Wikibase\DataModel\Services\Lookup\PropertyDataTypeLookup;
use Wikibase\DataModel\Services\Lookup\PropertyDataTypeLookupException;

/**
 * @license GPL-2.0-or-later
 * @author Addshore
 */
class ApiPropertyDataTypeLookup implements PropertyDataTypeLookup {

	/**
	 * @var ApiEntityLookup
	 */
	private $apiEntityLookup;

	/**
	 * @param ApiEntityLookup $apiEntityLookup
	 */
	public function __construct( ApiEntityLookup $apiEntityLookup ) {
		$this->apiEntityLookup = $apiEntityLookup;
	}

	/**
	 * @inheritDoc
	 */
	public function getDataTypeIdForProperty( PropertyId $propertyId ) {
		$responsePartForProperty = $this->apiEntityLookup->getResultPartForId( $propertyId );
		if ( !isset( $responsePartForProperty['datatype'] ) ) {
			throw new PropertyDataTypeLookupException( $propertyId );
		}
		return $responsePartForProperty['datatype'];
	}

}
