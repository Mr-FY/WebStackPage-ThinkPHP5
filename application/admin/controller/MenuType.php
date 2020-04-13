<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use think\Request;
use think\Validate;
use think\Db;

//用户
class MenuType extends Base {
	/**
	 * 显示资源列表
	 *
	 * @return \think\Response
	 */
	public function index() {
		$list = Model('MenuType')->list();
		$this->assign('list',$list);
		return $this->fetch('menutype/index');
	}

	//图标
	public function icons(){
		return $this->fetch('menutype/icons');
	}

	/**
	 * 显示创建资源表单页.
	 *
	 * @return \think\Response
	 */
	public function create() {
		return $this->fetch('menutype/add');
	}

	/**
	 * 保存新建的资源
	 *
	 * @param  \think\Request  $request
	 * @return \think\Response
	 */
	public function save(Request $request) {
		$param = $request->only(['type_name','menu_order','menu_icon']);
		$validate = new Validate([
			'menu_order|排序' => 'require|number|length:1,10',
		]);
		if (!$validate->check($param)) {
			return json(['code'=>0,'msg'=>$validate->getError()]);
		}
		//提交给model进行数据库操作
		$res = Model('MenuType')->add($param);
		return json($res);
	}

	/**
	 * 显示指定的资源
	 *
	 * @param  int  $id
	 * @return \think\Response
	 */
	public function read($id) {
		$param = request()->only(['start', 'end', 'tel']);
		$list = Model('MenuType')->search($param);
		$this->assign('list',$list);
		return $this->fetch('menutype/index');
	}

	/**
	 * 显示编辑资源表单页.
	 *
	 * @param  int  $id
	 * @return \think\Response
	 */
	public function edit($id) {
		$data = Model('MenuType')->edit($id);
		$this->assign('data', $data);
		return $this->fetch('menutype/edit');
	}

	/**
	 * 保存更新的资源
	 *
	 * @param  \think\Request  $request
	 * @param  int  $id
	 * @return \think\Response
	 */
	public function update(Request $request, $id) {
		//开关控制
		if ($request->get('ajax/s') == 1) {

			$status = $request->only(['status']);

			if (!empty($status)) {
				return json(Model('MenuType')->kg($id, $status));
			}else{
				return json(['code' => 0, 'msg' => '非法操作:缺少必要参数']);
			}
		}

		//更新操作
		$param = $request->only(['type_name','menu_order','menu_icon']);
		$validate = new Validate([
			'menu_order|排序' => 'require|number|length:1,10',
		]);
		if (!$validate->check($param)) {
			return json(['code'=>0,'msg'=>$validate->getError()]);
		}
		
		//执行更新数据库操作
		$res = Model('MenuType')->doUp($id, $param);
		return json($res);
	}

	/**
	 * 删除指定资源
	 *
	 * @param  int  $id
	 * @return \think\Response
	 */
	public function delete($id) {
		$have_row = Db::name('links')->where('mt_id',$id)->find();
		if (empty($have_row)) {
			$res = Model('MenuType')->doDel($id);
		}else{
			$res = ['code' => 0,'msg' => '该分类下有链接存在,删除失败!'];
		}
		
		return json($res);
	}

}
