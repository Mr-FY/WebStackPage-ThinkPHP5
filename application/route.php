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

use think\Route;

/**
 * 前台路由
 */
Route::get('/','index/Index/index');
Route::get('/about','index/Index/about');
Route::get('/test','index/Index/test');


/**
 * 后台路由
 */
Route::get('/login','admin/Login/login');//后台登录页
Route::post('/dologinaaa','admin/Login/dologin');//后台登录处理
Route::get('/outlogin', 'admin/Login/outLogin');//退出登录

Route::group('admin', function () {
	Route::get('/home','admin/Home/index');//后台框架
	Route::get('/index','admin/Index/index');//后台主页
	Route::get('/icons','admin/MenuType/icons');//图标库
	Route::resource('/menu','admin/MenuType');//分类菜单
	Route::resource('/links','admin/Links');//链接管理
	Route::any('/uploads','admin/Uploads/imgUpload');//图片上传类
	Route::get('/images','admin/Site/images');//图标库
	Route::any('/imagesdel/:id','admin/Site/imagesDel');//删除图标
	Route::get('/site','admin/Site/site');//站点信息
	Route::any('/siteupdate','admin/Site/siteUpdate');//站点信息
	//修改密码
	Route::get('/repassword', 'admin/Home/repassword');
	Route::post('/repassword_post', 'admin/Home/repassword_post');
});