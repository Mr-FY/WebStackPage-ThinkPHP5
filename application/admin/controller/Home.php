<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Request;
use think\Session;
use think\Validate;

class Home extends Base {
	// 后台菜单框架
	public function index() {
		// var_dump(Session::get('admin'));
		$this->assign('admin', Session::get('admin'));
		return $this->fetch('home/home');
	}

	public function repassword() {
		$session = Session::get('admin');
		$id = $session['id'];
		$data = Db::name('admin')->where('id', $id)->find();
		$this->assign('data', $data);
		return $this->fetch('home/repassword');
	}

	public function repassword_post(Request $request) {
		$param = $request->only(['admin_name', 'password']);
		$validate = new Validate([
			'password|密码' => 'chsDash|length:8,18',
		]);
		if (!$validate->check($param)) {
			return json(['code' => 0, 'msg' => $validate->getError()]);
		}
		if (empty($param['password'])) {
			unset($param['password']);
		} else {
			$param['password'] = sha1(md5($param['password']));
		}
		$session = Session::get('admin');
		$id = $session['id'];
		$bool = Db::name('admin')->where('id', $id)->update($param);
		if ($bool) {
			return json(['code' => 1, 'msg' => '操作成功']);
		} else {
			return json(['code' => 0, 'msg' => '操作失败,您未做出修改.']);
		}
	}
}