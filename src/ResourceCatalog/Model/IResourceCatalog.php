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
        //@position_type_8
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['XLGLMFZHGGWYH'] => array(self::TYPE['HMDZRR'],self::TYPE['HMDFR'],self::TYPE['HEIMDZRR'],self::TYPE['HEIMDFR'],),
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
        IUserGroup::ID['XLGLMMZJ'] => array(),
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
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
