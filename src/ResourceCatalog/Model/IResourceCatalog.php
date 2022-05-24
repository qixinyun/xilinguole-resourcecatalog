<?php

namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'HEIMDFR' => 3,
        'HEIMDZRR' => 4,
        'HMDFR' => 5,
        'HMDZRR' => 6,
        'SFCYRYXX' => 7,
        'LDMFXJGZZ' => 8,
        'MBFQYML' => 9,
        'SHTTDJXX' => 10,
        'SHGW' => 11,
        'SSZK' => 12,
        'STWJ' => 13,
        'WFCXYZ' => 14,
        'WFXFAQ' => 15,
        'WHGGAQ' => 16,
        'WPXS' => 17,
        'XSJMWL' => 18,
        'YXGZ' => 19,
        'ZZQMXD' => 20,
        'CXSFSCZTJBXX' => 21,
        'HQBZDLY' => 22,
        'KHTSSJ' => 23,
        'MSSCSHCSJZXX' => 24,
        'MSSCSHZYZFWXX' => 25,
        'NDZJFWGZ' => 26,
        'QGMXD' => 27,
        'QQGGSS' => 28,
        'RLJJZX' => 29,
        'RSGJ' => 30,
        'SBYY' => 31,
        'CCJCJG'=>32,
        'GZRYXX' => 33,
        'YSZYZGZXX' => 34,
        'JSZGXX' => 35,
        'LSZYZGZXX' => 36,
        'XYSFSQ' => 37,
        'QYFRGGXYZHPJJG' => 38,
        //@position_type_39
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['CCJCJG'],
        ),
        IUserGroup::ID['XLGLMFZHGGWYH'] => array(
            self::TYPE['QYFRGGXYZHPJJG'],
            self::TYPE['ZZQMXD'],
            self::TYPE['YXGZ'],
            self::TYPE['XSJMWL'],
            self::TYPE['WPXS'],
            self::TYPE['WHGGAQ'],
            self::TYPE['WFXFAQ'],
            self::TYPE['WFCXYZ'],
            self::TYPE['STWJ'],
            self::TYPE['SSZK'],
            self::TYPE['SHGW'],
            self::TYPE['HMDZRR'],
            self::TYPE['HMDFR'],
            self::TYPE['HEIMDZRR'],
            self::TYPE['HEIMDFR'],
            self::TYPE['SFCYRYXX'],

            self::TYPE['SBYY'],
            self::TYPE['RSGJ'],
            self::TYPE['RLJJZX'],
            self::TYPE['QQGGSS'],
            self::TYPE['QGMXD'],
            self::TYPE['NDZJFWGZ'],
            self::TYPE['MSSCSHZYZFWXX'],
            self::TYPE['MSSCSHCSJZXX'],
            self::TYPE['KHTSSJ'],
            self::TYPE['HQBZDLY'],
            self::TYPE['CXSFSCZTJBXX'],
        ),
        IUserGroup::ID['RMYHXLGLMZXZH'] => array(),
        IUserGroup::ID['XLGLMWZZB'] => array(),
        IUserGroup::ID['XLGLMWXCB'] => array(),
        IUserGroup::ID['XLGLMZFW'] => array(),
        IUserGroup::ID['XLGLMZJRMFY'] => array(self::TYPE['HEIMDZRR'], self::TYPE['HEIMDFR'],),
        IUserGroup::ID['XLGLMRMJCY'] => array(),
        IUserGroup::ID['XLGLMJYJ'] => array(
            self::TYPE['JSZGXX'],
        ),
        IUserGroup::ID['XLGLMKXJSJ'] => array(),
        IUserGroup::ID['XLGLMGYHXXHJ'] => array(),
        IUserGroup::ID['XLGLMGAJ'] => array(),
        IUserGroup::ID['XLGLMMZJ'] => array(self::TYPE['SHTTDJXX'], self::TYPE['MBFQYML'],),
        IUserGroup::ID['XLGLMSFJ'] => array(
            self::TYPE['SFCYRYXX'],
            self::TYPE['LSZYZGZXX'],
        ),
        IUserGroup::ID['XLGLMCZJ'] => array(),
        IUserGroup::ID['XLGLMRLZYHSHBZJ'] => array(
            self::TYPE['HMDZRR'], 
            self::TYPE['HMDFR'], 
            self::TYPE['HEIMDZRR'], 
            self::TYPE['HEIMDFR'],
            self::TYPE['GZRYXX'],
        ),
        IUserGroup::ID['XLGLMZRZYJ'] => array(),
        IUserGroup::ID['XLGLMZFHCXJSJ'] => array(),
        IUserGroup::ID['XLGLMNMJ'] => array(),
        IUserGroup::ID['XLGLMSLJ'] => array(),
        IUserGroup::ID['XLGLMLYCYJ'] => array(),
        IUserGroup::ID['XLGLMSWUJ'] => array(),
        IUserGroup::ID['XLGLMWTLYGDJ'] => array(),
        IUserGroup::ID['XLGLMHZGSJRGZBGS'] => array(),
        IUserGroup::ID['XLGLMXFJ'] => array(),
        IUserGroup::ID['XLGLMSWJ'] => array(self::TYPE['HMDZRR'], self::TYPE['HMDFR'], self::TYPE['HEIMDZRR'], self::TYPE['HEIMDFR'],),
        IUserGroup::ID['XLGLMYBJJ'] => array(),
        IUserGroup::ID['XLGLMYCZMJ'] => array(),
        IUserGroup::ID['XLGLMYZGLJ'] => array(),
        IUserGroup::ID['XLGLMJTYSGLJ'] => array(),
        IUserGroup::ID['XLGLMSTHJJ'] => array(),
        IUserGroup::ID['XLGLMWSJKWYH'] => array(
            self::TYPE['YSZYZGZXX'],
        ),
        IUserGroup::ID['XLGLMYJGLJ'] => array(),
        IUserGroup::ID['XLGLMSJJ'] => array(),
        IUserGroup::ID['XLGLMSCJDGLJ'] => array(),
        IUserGroup::ID['GGZYGLZX'] => array(),
        IUserGroup::ID['XLGLMDSJFZGLJ'] => array(),
        IUserGroup::ID['XLGLMNYJ'] => array(),
        IUserGroup::ID['XLGLMGH'] => array(self::TYPE['LDMFXJGZZ'],),

        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
