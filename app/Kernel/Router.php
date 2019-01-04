<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/2
 */

namespace App\Kernel;

use Kite\Http\BaseRouter;

/**
 * 路由类，路由设置在当前类中
 * Class Router
 * @package App\Kernel
 */
class Router extends BaseRouter
{
    /**
     * Router constructor.
     * @param $config [框架的配置信息]
     */
    public function __construct($config)
    {
        parent::__construct($this->routers(), $config);
    }

    /**
     * @return Array 自定义的路由
     */
    public function routers()
    {
        $routers = [
            ['path' => '/news', 'action' => 'Index', 'method' => 'POST'],
            //用户模块
            ['path' => '/user/login', 'action' => 'User\Login', 'method' => 'GET'],
            ['path' => '/user/register', 'action' => 'User\Register', 'method' => 'POST'],
            ['path' => '/user/active', 'action' => 'User\ActiveList', 'method' => 'GET'],
            ['path' => '/user/upload', 'action' => 'User\UploadArticle', 'method' => 'POST'],
            ['path' => '/user/article', 'action' => 'User\ArticleList', 'method' => 'GET'],
            ['path' => '/user/invite', 'action' => 'User\ShowInvite', 'method' => 'GET'],
            ['path' => '/user/react', 'action' => 'User\ReactInvite', 'method' => 'GET'],
            ['path' => '/user/grade', 'action' => 'User\UploadGrade', 'method' => 'POST'],
            ['path' => '/user/task' , 'action' => 'User\CheckTask', 'method' => 'GET'],
            ['path' => '/user/mygrade', 'action' => 'User\GetGrade', 'method' => 'GET'],
            ['path' => '/spider', 'action' => 'Spider', 'method' => 'GET'],

            //admin模块
            ['path' => '/admin/invite', 'action' => 'Admin\InviteCheck', 'method' => 'POST'],
            ['path' => '/admin/refuse', 'action' => 'Admin\InviteRefuse', 'method' => 'GET'],
            ['path' => '/admin/distribute', 'action' => 'Admin\Distribute', 'method' => 'GET'],
            ['path' => '/admin/recommend', 'action' => 'Admin\Recommend', 'method' => 'POST'],
            ['path' => '/admin/active', 'action' => 'Admin\AddActive', 'method' => 'POST'],
        ];
        return $routers;
    }
}