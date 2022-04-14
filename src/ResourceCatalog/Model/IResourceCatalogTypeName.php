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
        IResourceCatalog::TYPE['SFCYRYXX'] => '重点人群信息',
IResourceCatalog::TYPE['LDMFXJGZZ'] => '劳动模范/先进工作者',
IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
IResourceCatalog::TYPE['SHGW'] => '损坏公物',
IResourceCatalog::TYPE['SSZK'] => '私收账款',
IResourceCatalog::TYPE['STWJ'] => '私调物价',
IResourceCatalog::TYPE['WFCXYZ'] => '违反诚信原则',
IResourceCatalog::TYPE['WFXFAQ'] => '违反消防安全',
IResourceCatalog::TYPE['WHGGAQ'] => '危害公共安全',
IResourceCatalog::TYPE['WPXS'] => '未批先售',
IResourceCatalog::TYPE['XSJMWL'] => '销售假冒伪劣',
IResourceCatalog::TYPE['YXGZ'] => '优秀柜组',
IResourceCatalog::TYPE['ZZQMXD'] => '自治区明星店',
        //@position
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
