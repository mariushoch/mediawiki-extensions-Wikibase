<?php

namespace Wikibase\Lib;

use ExtensionRegistry;
use ResourceLoader;

/**
 * File defining the hook handlers for the WikibaseLib extension.
 *
 * @license GPL-2.0-or-later
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 * @author Daniel Werner < daniel.a.r.werner@gmail.com >
 * @author H. Snater < mediawiki@snater.com >
 */
final class LibHooks {

	/**
	 * Callback called after extension registration,
	 * for any work that cannot be done directly in extension.json.
	 */
	public static function onRegistration(): void {
		global $wgResourceModules;

		$wgResourceModules = array_merge(
			$wgResourceModules,
			require __DIR__ . '/../resources/Resources.php'
		);
	}

	/**
	 * Hook to add PHPUnit test cases.
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/UnitTestsList
	 * @param string[] &$paths
	 * @return void
	 */
	public static function onUnitTestsList( array &$paths ): void {
		$paths[] = __DIR__ . '/../tests/phpunit/';
		$paths[] = __DIR__ . '/../../data-access/tests/phpunit/';
	}

	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/ResourceLoaderTestModules
	 * @param array &$testModules
	 * @param ResourceLoader $rl
	 * @return void
	 */
	public static function onResourceLoaderTestModules( array &$testModules, ResourceLoader $rl ): void {
		$testModules['qunit'] = array_merge(
			$testModules['qunit'],
			require __DIR__ . '/../tests/qunit/resources.php'
		);
	}

	/**
	 * Register ResourceLoader modules with dynamic dependencies.
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/ResourceLoaderRegisterModules
	 * @param ResourceLoader $rl
	 * @return void
	 */
	public static function onResourceLoaderRegisterModules( ResourceLoader $rl ): void {
		$moduleTemplate = [
			'localBasePath' => __DIR__ . '/../',
			'remoteExtPath' => 'Wikibase/lib',
		];

		$modules = [
			'wikibase.Site' => $moduleTemplate + [
				'scripts' => [
					'resources/wikibase.Site.js',
				],
				'dependencies' => [
					'mediawiki.util',
					'util.inherit',
					'wikibase',
				],
			],
		];

		$isUlsLoaded = ExtensionRegistry::getInstance()->isLoaded( 'UniversalLanguageSelector' );
		if ( $isUlsLoaded ) {
			$modules['wikibase.Site']['dependencies'][] = 'ext.uls.mediawiki';
		}

		$rl->register( $modules );
	}

	/**
	 * Called when generating the extensions credits, use this to change the tables headers.
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/ExtensionTypes
	 * @param array &$extensionTypes
	 * @return void
	 */
	public static function onExtensionTypes( array &$extensionTypes ): void {
		// @codeCoverageIgnoreStart
		$extensionTypes['wikibase'] = wfMessage( 'version-wikibase' )->text();
		// @codeCoverageIgnoreEnd
	}

}
