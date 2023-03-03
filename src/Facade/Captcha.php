<?php

namespace Think\Component\Captcha\Facade;

use think\Facade;

/**
 * Class Captcha
 * @package Think\Component\Captcha\Facade
 * @mixin \Think\Component\Captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return 'Think\Component\Captcha\Captcha';
    }
}
