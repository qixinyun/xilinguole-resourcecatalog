<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'HEIMDFR'=>3,
        'HEIMDZRR'=>4,
        'HMDFR'=>5,
        'HMDZRR'=>6,
        'SFCYRYXX'=>7,
'LDMFXJGZZ'=>8,
'MBFQYML'=>9,
'SHTTDJXX'=>10,
'SHGW'=>11,
'SSZK'=>12,
'STWJ'=>13,
'WFCXYZ'=>14,
'WFXFAQ'=>15,
'WHGGAQ'=>16,
'WPXS'=>17,
'XSJMWL'=>18,
'YXGZ'=>19,
'ZZQMXD'=>20,
        //@position_type_21
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['XLGLMFZHGGWYH'] => array(
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

            self::TYPE['SHGW'],
            self::TYPE['SSZK'],
            self::TYPE['STWJ'],
            self::TYPE['WFCXYZ'],
            self::TYPE['WFXFAQ'],
            self::TYPE['WHGGAQ'],
            self::TYPE['WPXS'],
            self::TYPE['XSJMWL'],
            self::TYPE['YXGZ'],
            self::TYPE['ZZQMXD'],
        ),
        IUserGroup::ID['RMYHXLGLMZXZH'] => array(),
        IUserGroup::ID['XLGLMWZZB'] => array(),
        IUserGroup::ID['XLGLMWXCB'] => array(),
        IUserGroup::ID['XLGLMZFW'] => array(),
        IUserGroup::ID['XLGLMZJRMFY'] => array(self::TYPE['HEIMDZRR'],self::TYPE['HEIMDFR'],),
        IUserGroup::ID['XLGLMRMJCY'] => array(),
        IUserGroup::ID['XLGLMJYJ'] => array(),
        IUserGroup::ID['XLGLMKXJSJ'] => array(),
        IUserGroup::ID['XLGLMGYHXXHJ'] => array(),
        IUserGroup::ID['XLGLMGAJ'] => array(),
        IUserGroup::ID['XLGLMMZJ'] => array(self::TYPE['SHTTDJXX'],self::TYPE['MBFQYML'],),
        IUserGroup::ID['XLGLMSFJ'] => array(self::TYPE['SFCYRYXX']),
        IUserGroup::ID['XLGLMCZJ'] => array(),
        IUserGroup::ID['XLGLMRLZYHSHBZJ'] => array(self::TYPE['HMDZRR'],self::TYPE['HMDFR'],self::TYPE['HEIMDZRR'],self::TYPE['HEIMDFR'],),
        IUserGroup::ID['XLGLMZRZYJ'] => array(),
        IUserGroup::ID['XLGLMZFHCXJSJ'] => array(),
        IUserGroup::ID['XLGLMNMJ'] => array(),
        IUserGroup::ID['XLGLMSLJ'] => array(),
        IUserGroup::ID['XLGLMLYCYJ'] => array(),
        IUserGroup::ID['XLGLMSWUJ'] => array(),
        IUserGroup::ID['XLGLMWTLYGDJ'] => array(),
        IUserGroup::ID['XLGLMHZGSJRGZBGS'] => array(),
        IUserGroup::ID['XLGLMXFJ'] => array(),
        IUserGroup::ID['XLGLMSWJ'] => array(self::TYPE['HMDZRR'],self::TYPE['HMDFR'],self::TYPE['HEIMDZRR'],self::TYPE['HEIMDFR'],),
        IUserGroup::ID['XLGLMYBJJ'] => array(),
        IUserGroup::ID['XLGLMYCZMJ'] => array(),
        IUserGroup::ID['XLGLMYZGLJ'] => array(),
        IUserGroup::ID['XLGLMJTYSGLJ'] => array(),
        IUserGroup::ID['XLGLMSTHJJ'] => array(),
        IUserGroup::ID['XLGLMWSJKWYH'] => array(),
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
