<?php
// This file is generated by build/generateAutoload.php, do not adjust manually
// phpcs:disable Generic.Files.LineLength
global $wgAutoloadClasses;

$wgAutoloadClasses += [
	'DataValues\\DataValueFactory' => __DIR__ . '/includes/DataValueFactory.php',
	'Wikibase\\ByIdDispatchingItemTermStore' => __DIR__ . '/includes/Store/ByIdDispatchingItemTermStore.php',
	'Wikibase\\Change' => __DIR__ . '/includes/Changes/Change.php',
	'Wikibase\\ChangeRow' => __DIR__ . '/includes/Changes/ChangeRow.php',
	'Wikibase\\ContentLanguagesLanguageFallbackChainFilterer' => __DIR__ . '/includes/ContentLanguagesLanguageFallbackChainFilterer.php',
	'Wikibase\\DiffChange' => __DIR__ . '/includes/Changes/DiffChange.php',
	'Wikibase\\EntityChange' => __DIR__ . '/includes/Changes/EntityChange.php',
	'Wikibase\\EntityFactory' => __DIR__ . '/includes/EntityFactory.php',
	'Wikibase\\InconsistentRedirectException' => __DIR__ . '/includes/Store/InconsistentRedirectException.php',
	'Wikibase\\ItemChange' => __DIR__ . '/includes/Changes/ItemChange.php',
	'Wikibase\\LanguageFallbackChain' => __DIR__ . '/includes/LanguageFallbackChain.php',
	'Wikibase\\LanguageFallbackChainFactory' => __DIR__ . '/includes/LanguageFallbackChainFactory.php',
	'Wikibase\\LanguageWithConversion' => __DIR__ . '/includes/LanguageWithConversion.php',
	'Wikibase\\LibHooks' => __DIR__ . '/LibHooks.php',
	'Wikibase\\Lib\\Changes\\CentralIdLookupFactory' => __DIR__ . '/includes/Changes/CentralIdLookupFactory.php',
	'Wikibase\\Lib\\Changes\\EntityChangeFactory' => __DIR__ . '/includes/Changes/EntityChangeFactory.php',
	'Wikibase\\Lib\\Changes\\EntityDiffChangedAspects' => __DIR__ . '/includes/Changes/EntityDiffChangedAspects.php',
	'Wikibase\\Lib\\Changes\\EntityDiffChangedAspectsFactory' => __DIR__ . '/includes/Changes/EntityDiffChangedAspectsFactory.php',
	'Wikibase\\Lib\\ContentLanguages' => __DIR__ . '/includes/ContentLanguages.php',
	'Wikibase\\Lib\\DataType' => __DIR__ . '/includes/DataType.php',
	'Wikibase\\Lib\\DataTypeDefinitions' => __DIR__ . '/includes/DataTypeDefinitions.php',
	'Wikibase\\Lib\\DataTypeFactory' => __DIR__ . '/includes/DataTypeFactory.php',
	'Wikibase\\Lib\\DataValue\\UnmappedEntityIdValue' => __DIR__ . '/includes/DataValue/UnmappedEntityIdValue.php',
	'Wikibase\\Lib\\DifferenceContentLanguages' => __DIR__ . '/includes/DifferenceContentLanguages.php',
	'Wikibase\\Lib\\EntityTypeDefinitions' => __DIR__ . '/includes/EntityTypeDefinitions.php',
	'Wikibase\\Lib\\FormatableSummary' => __DIR__ . '/includes/FormatableSummary.php',
	'Wikibase\\Lib\\LanguageFallbackIndicator' => __DIR__ . '/includes/LanguageFallbackIndicator.php',
	'Wikibase\\Lib\\LanguageNameLookup' => __DIR__ . '/includes/LanguageNameLookup.php',
	'Wikibase\\Lib\\MediaWikiContentLanguages' => __DIR__ . '/includes/MediaWikiContentLanguages.php',
	'Wikibase\\Lib\\MessageException' => __DIR__ . '/includes/MessageException.php',
	'Wikibase\\Lib\\Modules\\DataTypesModule' => __DIR__ . '/includes/Modules/DataTypesModule.php',
	'Wikibase\\Lib\\Modules\\MediaWikiConfigModule' => __DIR__ . '/includes/Modules/MediaWikiConfigModule.php',
	'Wikibase\\Lib\\Modules\\MediaWikiConfigValueProvider' => __DIR__ . '/includes/Modules/MediaWikiConfigValueProvider.php',
	'Wikibase\\Lib\\Modules\\PropertyValueExpertsModule' => __DIR__ . '/includes/Modules/PropertyValueExpertsModule.php',
	'Wikibase\\Lib\\Modules\\SettingsValueProvider' => __DIR__ . '/includes/Modules/SettingsValueProvider.php',
	'Wikibase\\Lib\\ParserFunctions\\CommaSeparatedList' => __DIR__ . '/includes/ParserFunctions/CommaSeparatedList.php',
	'Wikibase\\Lib\\PropertyInfoDataTypeLookup' => __DIR__ . '/includes/PropertyInfoDataTypeLookup.php',
	'Wikibase\\Lib\\PropertyInfoSnakUrlExpander' => __DIR__ . '/includes/PropertyInfoSnakUrlExpander.php',
	'Wikibase\\Lib\\Reporting\\ExceptionHandler' => __DIR__ . '/includes/Reporting/ExceptionHandler.php',
	'Wikibase\\Lib\\Reporting\\LogWarningExceptionHandler' => __DIR__ . '/includes/Reporting/LogWarningExceptionHandler.php',
	'Wikibase\\Lib\\Reporting\\ReportingExceptionHandler' => __DIR__ . '/includes/Reporting/ReportingExceptionHandler.php',
	'Wikibase\\Lib\\Reporting\\RethrowingExceptionHandler' => __DIR__ . '/includes/Reporting/RethrowingExceptionHandler.php',
	'Wikibase\\Lib\\RepositoryDefinitions' => __DIR__ . '/includes/RepositoryDefinitions.php',
	'Wikibase\\Lib\\Serialization\\CallbackFactory' => __DIR__ . '/includes/Serialization/CallbackFactory.php',
	'Wikibase\\Lib\\Serialization\\RepositorySpecificDataValueDeserializerFactory' => __DIR__ . '/includes/Serialization/RepositorySpecificDataValueDeserializerFactory.php',
	'Wikibase\\Lib\\Serialization\\SerializationModifier' => __DIR__ . '/includes/Serialization/SerializationModifier.php',
	'Wikibase\\Lib\\SimpleCacheWithBagOStuff' => __DIR__ . '/includes/SimpleCacheWithBagOStuff.php',
	'Wikibase\\Lib\\Sites\\SiteMatrixParser' => __DIR__ . '/includes/Sites/SiteMatrixParser.php',
	'Wikibase\\Lib\\Sites\\SitesBuilder' => __DIR__ . '/includes/Sites/SitesBuilder.php',
	'Wikibase\\Lib\\SnakUrlExpander' => __DIR__ . '/includes/SnakUrlExpander.php',
	'Wikibase\\Lib\\StaticContentLanguages' => __DIR__ . '/includes/StaticContentLanguages.php',
	'Wikibase\\Lib\\StatsdMissRecordingSimpleCache' => __DIR__ . '/includes/StatsdMissRecordingSimpleCache.php',
	'Wikibase\\Lib\\Store\\AbstractTermPropertyLabelResolver' => __DIR__ . '/includes/Store/AbstractTermPropertyLabelResolver.php',
	'Wikibase\\Lib\\Store\\BadRevisionException' => __DIR__ . '/includes/Store/BadRevisionException.php',
	'Wikibase\\Lib\\Store\\ByIdDispatchingEntityInfoBuilder' => __DIR__ . '/includes/Store/ByIdDispatchingEntityInfoBuilder.php',
	'Wikibase\\Lib\\Store\\CacheAwarePropertyInfoStore' => __DIR__ . '/includes/Store/CacheAwarePropertyInfoStore.php',
	'Wikibase\\Lib\\Store\\CacheRetrievingEntityRevisionLookup' => __DIR__ . '/includes/Store/CacheRetrievingEntityRevisionLookup.php',
	'Wikibase\\Lib\\Store\\CachingEntityRevisionLookup' => __DIR__ . '/includes/Store/CachingEntityRevisionLookup.php',
	'Wikibase\\Lib\\Store\\CachingFallbackLabelDescriptionLookup' => __DIR__ . '/includes/Store/CachingFallbackLabelDescriptionLookup.php',
	'Wikibase\\Lib\\Store\\CachingPropertyInfoLookup' => __DIR__ . '/includes/Store/CachingPropertyInfoLookup.php',
	'Wikibase\\Lib\\Store\\CachingPropertyOrderProvider' => __DIR__ . '/includes/Store/CachingPropertyOrderProvider.php',
	'Wikibase\\Lib\\Store\\CachingSiteLinkLookup' => __DIR__ . '/includes/Store/CachingSiteLinkLookup.php',
	'Wikibase\\Lib\\Store\\ChunkAccess' => __DIR__ . '/includes/Store/ChunkAccess.php',
	'Wikibase\\Lib\\Store\\ChunkCache' => __DIR__ . '/includes/Store/ChunkCache.php',
	'Wikibase\\Lib\\Store\\DelegatingEntityTermStoreWriter' => __DIR__ . '/includes/Store/DelegatingEntityTermStoreWriter.php',
	'Wikibase\\Lib\\Store\\DispatchingEntityInfoBuilder' => __DIR__ . '/includes/Store/DispatchingEntityInfoBuilder.php',
	'Wikibase\\Lib\\Store\\DispatchingEntityPrefetcher' => __DIR__ . '/includes/Store/DispatchingEntityPrefetcher.php',
	'Wikibase\\Lib\\Store\\DispatchingEntityRevisionLookup' => __DIR__ . '/includes/Store/DispatchingEntityRevisionLookup.php',
	'Wikibase\\Lib\\Store\\DispatchingPropertyInfoLookup' => __DIR__ . '/includes/Store/DispatchingPropertyInfoLookup.php',
	'Wikibase\\Lib\\Store\\DispatchingTermBuffer' => __DIR__ . '/includes/Store/DispatchingTermBuffer.php',
	'Wikibase\\Lib\\Store\\DivergingEntityIdException' => __DIR__ . '/includes/Store/DivergingEntityIdException.php',
	'Wikibase\\Lib\\Store\\Elastic\\ElasticTermLookup' => __DIR__ . '/includes/Store/Elastic/ElasticTermLookup.php',
	'Wikibase\\Lib\\Store\\Elastic\\TermLookupSearcher' => __DIR__ . '/includes/Store/Elastic/TermLookupSearcher.php',
	'Wikibase\\Lib\\Store\\EntityByLinkedTitleLookup' => __DIR__ . '/includes/Store/EntityByLinkedTitleLookup.php',
	'Wikibase\\Lib\\Store\\EntityContentDataCodec' => __DIR__ . '/includes/Store/EntityContentDataCodec.php',
	'Wikibase\\Lib\\Store\\EntityContentTooBigException' => __DIR__ . '/includes/Store/EntityContentTooBigException.php',
	'Wikibase\\Lib\\Store\\EntityInfo' => __DIR__ . '/includes/Store/EntityInfo.php',
	'Wikibase\\Lib\\Store\\EntityInfoBuilder' => __DIR__ . '/includes/Store/EntityInfoBuilder.php',
	'Wikibase\\Lib\\Store\\EntityInfoTermLookup' => __DIR__ . '/includes/Store/EntityInfoTermLookup.php',
	'Wikibase\\Lib\\Store\\EntityNamespaceLookup' => __DIR__ . '/includes/Store/EntityNamespaceLookup.php',
	'Wikibase\\Lib\\Store\\EntityRevision' => __DIR__ . '/includes/Store/EntityRevision.php',
	'Wikibase\\Lib\\Store\\EntityRevisionCache' => __DIR__ . '/includes/Store/EntityRevisionCache.php',
	'Wikibase\\Lib\\Store\\EntityRevisionLookup' => __DIR__ . '/includes/Store/EntityRevisionLookup.php',
	'Wikibase\\Lib\\Store\\EntityStore' => __DIR__ . '/includes/Store/EntityStore.php',
	'Wikibase\\Lib\\Store\\EntityStoreWatcher' => __DIR__ . '/includes/Store/EntityStoreWatcher.php',
	'Wikibase\\Lib\\Store\\EntityTermLookup' => __DIR__ . '/includes/Store/EntityTermLookup.php',
	'Wikibase\\Lib\\Store\\EntityTermLookupBase' => __DIR__ . '/includes/Store/EntityTermLookupBase.php',
	'Wikibase\\Lib\\Store\\EntityTermStoreWriter' => __DIR__ . '/includes/Store/EntityTermStoreWriter.php',
	'Wikibase\\Lib\\Store\\EntityTitleLookup' => __DIR__ . '/includes/Store/EntityTitleLookup.php',
	'Wikibase\\Lib\\Store\\FallbackLabelDescriptionLookup' => __DIR__ . '/includes/Store/FallbackLabelDescriptionLookup.php',
	'Wikibase\\Lib\\Store\\FallbackPropertyOrderProvider' => __DIR__ . '/includes/Store/FallbackPropertyOrderProvider.php',
	'Wikibase\\Lib\\Store\\FieldPropertyInfoProvider' => __DIR__ . '/includes/Store/FieldPropertyInfoProvider.php',
	'Wikibase\\Lib\\Store\\HashSiteLinkStore' => __DIR__ . '/includes/Store/HashSiteLinkStore.php',
	'Wikibase\\Lib\\Store\\HttpUrlPropertyOrderProvider' => __DIR__ . '/includes/Store/HttpUrlPropertyOrderProvider.php',
	'Wikibase\\Lib\\Store\\LabelConflictFinder' => __DIR__ . '/includes/Store/LabelConflictFinder.php',
	'Wikibase\\Lib\\Store\\LanguageFallbackLabelDescriptionLookup' => __DIR__ . '/includes/Store/LanguageFallbackLabelDescriptionLookup.php',
	'Wikibase\\Lib\\Store\\LanguageFallbackLabelDescriptionLookupFactory' => __DIR__ . '/includes/Store/LanguageFallbackLabelDescriptionLookupFactory.php',
	'Wikibase\\Lib\\Store\\LatestRevisionIdResult' => __DIR__ . '/includes/Store/LatestRevisionIdResult.php',
	'Wikibase\\Lib\\Store\\MultiTermStoreWriter' => __DIR__ . '/includes/Store/MultiTermStoreWriter.php',
	'Wikibase\\Lib\\Store\\PrefetchingTermLookup' => __DIR__ . '/includes/Store/PrefetchingTermLookup.php',
	'Wikibase\\Lib\\Store\\PropertyInfoLookup' => __DIR__ . '/includes/Store/PropertyInfoLookup.php',
	'Wikibase\\Lib\\Store\\PropertyInfoProvider' => __DIR__ . '/includes/Store/PropertyInfoProvider.php',
	'Wikibase\\Lib\\Store\\PropertyInfoStore' => __DIR__ . '/includes/Store/PropertyInfoStore.php',
	'Wikibase\\Lib\\Store\\PropertyOrderProvider' => __DIR__ . '/includes/Store/PropertyOrderProvider.php',
	'Wikibase\\Lib\\Store\\PropertyOrderProviderException' => __DIR__ . '/includes/Store/PropertyOrderProviderException.php',
	'Wikibase\\Lib\\Store\\RedirectRevision' => __DIR__ . '/includes/Store/RedirectRevision.php',
	'Wikibase\\Lib\\Store\\RevisionBasedEntityLookup' => __DIR__ . '/includes/Store/RevisionBasedEntityLookup.php',
	'Wikibase\\Lib\\Store\\RevisionedUnresolvedRedirectException' => __DIR__ . '/includes/Store/RevisionedUnresolvedRedirectException.php',
	'Wikibase\\Lib\\Store\\SiteLinkLookup' => __DIR__ . '/includes/Store/SiteLinkLookup.php',
	'Wikibase\\Lib\\Store\\SiteLinkStore' => __DIR__ . '/includes/Store/SiteLinkStore.php',
	'Wikibase\\Lib\\Store\\StorageException' => __DIR__ . '/includes/Store/StorageException.php',
	'Wikibase\\Lib\\Store\\TermIndexPropertyLabelResolver' => __DIR__ . '/includes/Store/TermIndexPropertyLabelResolver.php',
	'Wikibase\\Lib\\Store\\TermIndexSearchCriteria' => __DIR__ . '/includes/Store/TermIndexSearchCriteria.php',
	'Wikibase\\Lib\\Store\\TypeDispatchingEntityRevisionLookup' => __DIR__ . '/includes/Store/TypeDispatchingEntityRevisionLookup.php',
	'Wikibase\\Lib\\Store\\TypeDispatchingEntityStore' => __DIR__ . '/includes/Store/TypeDispatchingEntityStore.php',
	'Wikibase\\Lib\\Store\\WikiPagePropertyOrderProvider' => __DIR__ . '/includes/Store/WikiPagePropertyOrderProvider.php',
	'Wikibase\\Lib\\Store\\WikiTextPropertyOrderProvider' => __DIR__ . '/includes/Store/WikiTextPropertyOrderProvider.php',
	'Wikibase\\Lib\\UnionContentLanguages' => __DIR__ . '/includes/UnionContentLanguages.php',
	'Wikibase\\Lib\\UserInputException' => __DIR__ . '/includes/UserInputException.php',
	'Wikibase\\Lib\\UserLanguageLookup' => __DIR__ . '/includes/UserLanguageLookup.php',
	'Wikibase\\Lib\\WikibaseContentLanguages' => __DIR__ . '/includes/WikibaseContentLanguages.php',
	'Wikibase\\MultiItemTermStore' => __DIR__ . '/includes/Store/MultiItemTermStore.php',
	'Wikibase\\MultiPropertyTermStore' => __DIR__ . '/includes/Store/MultiPropertyTermStore.php',
	'Wikibase\\PopulateSitesTable' => __DIR__ . '/maintenance/populateSitesTable.php',
	'Wikibase\\RepoAccessModule' => __DIR__ . '/includes/Modules/RepoAccessModule.php',
	'Wikibase\\Settings' => __DIR__ . '/includes/Settings.php',
	'Wikibase\\SettingsArray' => __DIR__ . '/includes/SettingsArray.php',
	'Wikibase\\SitesModule' => __DIR__ . '/includes/Modules/SitesModule.php',
	'Wikibase\\Store\\BufferingTermLookup' => __DIR__ . '/includes/Store/BufferingTermLookup.php',
	'Wikibase\\Store\\EntityIdLookup' => __DIR__ . '/includes/Store/EntityIdLookup.php',
	'Wikibase\\StringNormalizer' => __DIR__ . '/includes/StringNormalizer.php',
	'Wikibase\\Summary' => __DIR__ . '/includes/Summary.php',
	'Wikibase\\TermIndex' => __DIR__ . '/includes/Store/TermIndex.php',
	'Wikibase\\TermIndexEntry' => __DIR__ . '/includes/TermIndexEntry.php',
	'Wikibase\\TermIndexItemTermStore' => __DIR__ . '/includes/Store/TermIndexItemTermStore.php',
	'Wikibase\\TermIndexPropertyTermStore' => __DIR__ . '/includes/Store/TermIndexPropertyTermStore.php',
	'Wikibase\\WikibaseSettings' => __DIR__ . '/includes/WikibaseSettings.php',
];
