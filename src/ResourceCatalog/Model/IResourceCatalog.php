<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['XLGLMFZHGGWYH'] => array(),
        IUserGroup::ID['RMYHXLGLMZXZH'] => array(),
        IUserGroup::ID['XLGLMWZZB'] => array(),
        IUserGroup::ID['XLGLMWXCB'] => array(),
        IUserGroup::ID['XLGLMZFW'] => array(),
        IUserGroup::ID['XLGLMZJRMFY'] => array(),
        IUserGroup::ID['XLGLMRMJCY'] => array(),
        IUserGroup::ID['XLGLMJYJ'] => array(),
        IUserGroup::ID['XLGLMKXJSJ'] => array(),
        IUserGroup::ID['XLGLMGYHXXHJ'] => array(),
        IUserGroup::ID['XLGLMGAJ'] => array(),
        IUserGroup::ID['XLGLMMZJ'] => array(),
        IUserGroup::ID['XLGLMSFJ'] => array(),
        IUserGroup::ID['XLGLMCZJ'] => array(),
        IUserGroup::ID['XLGLMRLZYHSHBZJ'] => array(),
        IUserGroup::ID['XLGLMZRZYJ'] => array(),
        IUserGroup::ID['XLGLMZFHCXJSJ'] => array(),
        IUserGroup::ID['XLGLMNMJ'] => array(),
        IUserGroup::ID['XLGLMSLJ'] => array(),
        IUserGroup::ID['XLGLMLYCYJ'] => array(),
        IUserGroup::ID['XLGLMSWJ'] => array(),
        IUserGroup::ID['XLGLMWTLYGDJ'] => array(),
        IUserGroup::ID['XLGLMHZGSJRGZBGS'] => array(),
        IUserGroup::ID['XLGLMXFJ'] => array(),
        IUserGroup::ID['XLGLMSWJ'] => array(),
        IUserGroup::ID['XLGLMYBJJ'] => array(),
        IUserGroup::ID['XLGLMYCZMJ'] => array(),
        IUserGroup::ID['XLGLMYZGLJ'] => array(),
        IUserGroup::ID['XLGLMJTYSGLJ'] => array(),
        IUserGroup::ID['XLGLMSTHJJ'] => array(),
        IUserGroup::ID['XLGLMWSJKWYK,H'] => array(),
        IUserGroup::ID['XLGLMYJGLJ'] => array(),
        IUserGroup::ID['XLGLMSJJ'] => array(),
        IUserGroup::ID['XLGLMSCJDGLJ'] => array(),
        IUserGroup::ID['GGZYGLZX'] => array(),
        IUserGroup::ID['XLGLMDSJFZGLJ'] => array(),
        IUserGroup::ID['XLGLMNYJ'] => array(),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
