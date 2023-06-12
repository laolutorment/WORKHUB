<?php

/**
 * +----------------------------------------------------------------------
 * | 前台上传验证器
 * +----------------------------------------------------------------------

 * +----------------------------------------------------------------------
 */

namespace app\index\validate;

use think\Validate;

class uploadValidate extends Validate
{


    // protected $rule = [
    //     'image' => 'fileSize:512000|fileExt:jpg,png|width:0,500|height:0,500',
    // ];
    protected $rule = [
        'image' =>
        [
            'fileExt' => 'jpg,png',
            'fileSize' => 512000,
            'height' => '0,5000',
            'width' => '0,4000',
        ],
    ];
    protected $message = [
        'image.fileSize' => '上传的图片大小不符合要求',
        'image.fileExt' => '上传的图片格式不符合要求',
        'image.width' => '上传的图片宽度不符合要求',
        'image.height' => '上传的图片高度不符合要求',
    ];
    protected $scene = [
        'check' => ['image'],
    ];
    protected function width($value, $rule)
    {
        list($width, $height) = getimagesize($value->getRealPath());
        $widthRange = explode(',', $rule);
        if ($width < $widthRange[0] || $width > $widthRange[1]) {
            return '上传的图片宽度不符合要求';
        }
        return true;
    }
    protected function height($value, $rule)
    {
        list($width, $height) = getimagesize($value->getRealPath());
        $heightRange = explode(',', $rule);
        if ($height < $heightRange[0] || $height > $heightRange[1]) {
            return '上传的图片高度不符合要求';
        }
        return true;
    }
}
