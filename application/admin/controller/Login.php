<?php
namespace app\admin\controller;
use think\Cache;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use \think\Validate;

class Login extends Controller {
	public function login() {
		return $this->fetch('login/login');
	}

	public function dologin(Request $request) {

		$admin_name = $request->post('admin_name/s');
		$password = $request->post('password/s');

		if (empty($admin_name) || empty($password)) {
			return json(['code' => 0, 'msg' => '账号或密码未填写']);
		}

		// 验证
		$validate = new Validate([
			'admin_name|用户名' => 'require|alphaDash',
			'password|密码' => 'require|alphaDash',
		]);
		$param = [
			'admin_name' => $admin_name,
			'password' => $password,
		];
		if (!$validate->check($param)) {
			return json(['code' => 0, 'msg' => $validate->getError()]);
		}
		$users = Db::name('admin')->where('admin_name', $admin_name)->find();

		if (empty($users)) {
			return json(['code' => 0, 'msg' => '账号或密码错误']);
		}
		if ($users['admin_name'] == $admin_name && $users['password'] == sha1(md5($password))) {
			if ($users['status'] == 1) {
				
				$token = admin_token();
				unset($users['password']);
				$users['token'] = $token;
				Session::set('admin', $users);
				// 更新token
				@Db::name('admin')
					->where('id', $users['id'])
					->update(['token' => $token]);

				return json(['code' => 1, 'msg' => '登录成功']);
			} else {
				return json(['code' => 0, 'msg' => '账户被封禁,请联系管理员!']);
			}
		} else {
			return json(['code' => 0, 'msg' => '账号或密码错误']);
		}

	}

	public function outlogin() {
		Session::delete('admin');
		return $this->redirect('/login.html');
	}

}