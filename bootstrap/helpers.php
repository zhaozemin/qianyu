<?php
/**
 * Created by PhpStorm.
 * User: zhaozemin
 * Date: 2020/5/20
 * Time: 8:52 PM
 */
function test_helper() {
    return 'OK';
}
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
function ngrok_url($routeName, $parameters = [])
{
    // 开发环境，并且配置了 NGROK_URL
    if(app()->environment('local') && $url = config('app.ngrok_url')) {
        // route() 函数第三个参数代表是否绝对路径
        return $url.route($routeName, $parameters, false);
    }

    return route($routeName, $parameters);
}