<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['HEIMDFR'] => 'HEIMDFR',
        IResourceCatalog::TYPE['HEIMDZRR'] => 'HEIMDZRR',
        IResourceCatalog::TYPE['HMDFR'] => 'HMDFR',
        IResourceCatalog::TYPE['HMDZRR'] => 'HMDZRR',
        IResourceCatalog::TYPE['SFCYRYXX'] => 'SFCYRYXX',
        //@position
        IResourceCatalog::TYPE['TEST'] => 'TEST'
    );
}
