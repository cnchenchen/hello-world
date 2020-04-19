<?php
namespace app\index\controller;

use think\Db;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨两剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }

    public function getData()
    {

        //http://www.tp5.com/index.php/Index/Index/getData
        //这里用这个url地址可以访问到
        //域名/入口文件/模块/控制器/接口
        return 'helloWorld';

    }

    public function blog()
    {

        return '你好';

    }

    public function dataBase()
    {

        //使用Db::table()的时候，表必须是全名，如果设置了表前缀，可以使用Db::name()
        //$user = Db::table('db_user')->where('id',1)->find();

        $user = Db::name('user')->where('id',1)->find();

        //可以展示数据库中的数据了，但是不能直接return数据会报错；
        //var_dump($uid);
        var_dump($user);
        die;

        return $user;

    }








}
