<?php
/**
 * Created by PhpStorm.
 * User: marin
 * Date: 2018/8/25
 * Time: 13:21
 */
namespace Marin\Phpservice\Facades;
use Illuminate\Support\Facades\Facade;
class PhpService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'phpservice';
    }
}