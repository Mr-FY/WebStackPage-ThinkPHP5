<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;

class Base extends Controller {
	public function _initialize() {
		if (Session::has('admin')) {
			$session = Session::get('admin');
			$id = $session['id'];
			$token = $session['token'];
			// 检查是否有人登录 token对比不上说明有人登录 则踢出登录人
			$t = Db::name('admin')->where('id', $id)->value('token');
			if ($t != $token) {
				Session::delete('admin');
				return $this->error('有人已登录此账号', '/login.html');
			}
		} else {
			return $this->redirect('/login.html');
		}
	}


	public function logs() {
		$request = Request::instance();
		$log['a_id'] = Session::get('admin')['id'];
		$log['time'] = date('Y-m-d H:i:s');
		$log['ip'] = getip();
		$log['c_name'] = $request->controller();
		$log['f_name'] = $request->action();
		@Db::name('log')->insert($log);
	}
}