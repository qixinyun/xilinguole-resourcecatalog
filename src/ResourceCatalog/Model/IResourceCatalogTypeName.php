<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '行政许可公示信息',
IResourceCatalog::TYPE['HEIMDFR'] => '黑名单(法人)',
IResourceCatalog::TYPE['HEIMDZRR'] => '黑名单(自然人)',
IResourceCatalog::TYPE['HMDFR'] => '红名单(法人)',
IResourceCatalog::TYPE['HMDZRR'] => '红名单(自然人)',
		//@position
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
