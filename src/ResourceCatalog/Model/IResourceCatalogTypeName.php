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
        IResourceCatalog::TYPE['CXSFSCZTJBXX'] => '诚信示范商场主体基本信息',
        IResourceCatalog::TYPE['HQBZDLY'] => '获取不正当利益',
        IResourceCatalog::TYPE['KHTSSJ'] => '客户投诉事件',
        IResourceCatalog::TYPE['MSSCSHCSJZXX'] => '民盛商场商户慈善捐赠信息',
        IResourceCatalog::TYPE['MSSCSHZYZFWXX'] => '民盛商场商户志愿服务信息',
        IResourceCatalog::TYPE['NDZJFWGZ'] => '年度最佳服务柜组',
        IResourceCatalog::TYPE['QGMXD'] => '全国明星店',
        IResourceCatalog::TYPE['QQGGSS'] => '窃取公共设施',
        IResourceCatalog::TYPE['RLJJZX'] => '扰乱经营秩序',
        IResourceCatalog::TYPE['RSGJ'] => '人身攻击',
        IResourceCatalog::TYPE['SBYY'] => '散布谣言',
        IResourceCatalog::TYPE['CCJCJG'] => '抽查检查结果',
        IResourceCatalog::TYPE['GZRYXX'] => '公职人员信息',
        IResourceCatalog::TYPE['YSZYZGZXX'] => '医师执业资格证信息',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['LSZYZGZXX'] => '律师执业资格证信息',
        IResourceCatalog::TYPE['XYSFSQ'] => '信用示范（商圈、街区）',
        IResourceCatalog::TYPE['QYFRGGXYZHPJJG'] => '企业法人公共信用综合评价结果',
        IResourceCatalog::TYPE['QYGGXYXX'] => '企业高管信用信息',
        IResourceCatalog::TYPE['QYJTXYXX'] => '企业集团信用信息',
        IResourceCatalog::TYPE['GRZZXKXX'] => '个人资质许可信息',
        IResourceCatalog::TYPE['QYJBXX'] => '企业基本信息',
        IResourceCatalog::TYPE['QYHYSJ'] => '企业行业数据',
        IResourceCatalog::TYPE['XZCJ'] => '行政裁决信息――国标',
        IResourceCatalog::TYPE['XZJDJC'] => '行政监督检查信息――国标',
        IResourceCatalog::TYPE['XZJL'] => '行政奖励信息――国标',
        IResourceCatalog::TYPE['XZQR'] => '行政确认信息――国标',
        IResourceCatalog::TYPE['XZQZ'] => '行政强制信息――国标',
        IResourceCatalog::TYPE['LXGLZDZYMLXX'] => '履行管理制度资源目录信息',
        IResourceCatalog::TYPE['XHQNSPCXSFYQZTXX'] => '镶黄旗奶食品诚信示范园区主体基本信息',
        //@position
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
