<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeRedBlackList
{
    const TYPE_RED_BLACK_LIST = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['HEIMDFR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['HEIMDZRR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['HMDFR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['HMDZRR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['SFCYRYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['LDMFXJGZZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['SHGW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
IResourceCatalog::TYPE['SSZK'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['STWJ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['WFCXYZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['WFXFAQ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['WHGGAQ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['WPXS'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['XSJMWL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['YXGZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
IResourceCatalog::TYPE['ZZQMXD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        //@position
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL']
    );
}
