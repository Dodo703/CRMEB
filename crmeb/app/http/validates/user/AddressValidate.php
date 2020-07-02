<?php
namespace app\http\validates\user;

use think\Validate;

/**
 * 用户地址验证类
 * Class AddressValidate
 * @package app\http\validates\user
 */
class AddressValidate extends  Validate
{
    protected $rule = [
        'real_name'  =>  'require',
        'phone'  =>  'require',
        'detail'  =>  'require',
    ];
    protected $message  =   [
        'real_name.require' => '名称必须填写',
        'phone.require' => '手机号必须填写',
        'detail.require' => '详细地址必须填写',
    ];
}