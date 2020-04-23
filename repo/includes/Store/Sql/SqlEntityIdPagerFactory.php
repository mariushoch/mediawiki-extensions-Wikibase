<?php

namespace Wikibase\Repo\Store\Sql;

use LinkCache;
use Wikibase\DataModel\Services\EntityId\EntityIdPager;
use Wikibase\Lib\Store\EntityIdLookup;
use Wikibase\Lib\Store\EntityNamespaceLookup;

/**
 * Factory for SqlEntityIdPager objects.
 *
 * @license GPL-2.0-or-later
 * @author Marius Hoch
 */
class SqlEntityIdPagerFactory {

	/**
	 * @var EntityNamespaceLookup
	 */
	private $entityNamespaceLookup;

	/**
	 * @var EntityIdLookup
	 */
	private $entityIdLookup;
	/**
	 * @var LinkCache|null
	 */
	private $linkCache;

	public function __construct(
		EntityNamespaceLookup $entityNamespaceLookup,
		EntityIdLookup $entityIdLookup,
		LinkCache $linkCache = null
	) {
		$this->entityNamespaceLookup = $entityNamespaceLookup;
		$this->entityIdLookup = $entityIdLookup;
		$this->linkCache = $linkCache;
	}

	/**
	 * @param string[] $entityTypes The desired entity types, or empty array for any type.
	 * @param string $redirectMode A EntityIdPager::XXX_REDIRECTS constant (default is NO_REDIRECTS).
	 *
	 * @return SqlEntityIdPager
	 */
	public function newSqlEntityIdPager( array $entityTypes = [], $redirectMode = EntityIdPager::NO_REDIRECTS ) {
		return new SqlEntityIdPager(
			$this->entityNamespaceLookup,
			$this->entityIdLookup,
			$entityTypes,
			$redirectMode,
			$this->linkCache
		);
	}

}
