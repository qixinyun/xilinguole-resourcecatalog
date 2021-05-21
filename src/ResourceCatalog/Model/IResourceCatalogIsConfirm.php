<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogIsConfirm
{
    const TYPE_RESOURECATALOG_CONFIRM = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['HEIMDFR'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['HEIMDZRR'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['HMDFR'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['HMDZRR'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['SFCYRYXX'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        //@position
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM']
    );
}
