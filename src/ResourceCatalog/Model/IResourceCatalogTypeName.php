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
        IResourceCatalog::TYPE['SFCYRYXX'] => '司法从业人员信息',
IResourceCatalog::TYPE['LDMFXJGZZ'] => '劳动模范/先进工作者',
IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
        //@position
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
