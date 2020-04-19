<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use \think\Route;

//设置下面的路由，就可以以这个URL访问到dataBase接口；
//http://www.tp5.com/index.php/admin
Route::rule('admin','Index/Index/dataBase','POST|GET');

//这个路由应该是以后常用的方式，当然还有路由分组定义的。
Route::rule('index','Index/Index/getData','POST|GET');

//批量注册路由;
    //批量注册路由，就是一个rule中有多个路由，同意统一规定type，路径自己定义即可；
Route::rule([
    'admin' => 'Index/Index/dataBase',
    'index' => 'Index/Index/getData',
    'blog' => 'Index/Index/blog'
],'','GET|POST');

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
