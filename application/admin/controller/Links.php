<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use think\Request;
use think\Validate;

//用户
class Links extends Base {
	/**
	 * 显示资源列表
	 *
	 * @return \think\Response
	 */
	public function index() {
		$list = Model('Links')->list();
		$this->assign('list',$list);
		return $this->fetch('links/index');
	}

	//图标
	public function icons(){
		return $this->fetch('links/icons');
	}

	/**
	 * 显示创建资源表单页.
	 *
	 * @return \think\Response
	 */
	public function create() {
		$mlist = Model('MenuType')->menulist();
		$this->assign('mlist',$mlist);
		return $this->fetch('links/add');
	}

	/**
	 * 保存新建的资源
	 *
	 * @param  \think\Request  $request
	 * @return \think\Response
	 */
	public function save(Request $request) {
		$param = $request->only(['mt_id','link_name','link_address','link_icon','link_note','link_order']);
		$validate = new Validate([
			'mt_id|分类' => 'require|number|length:1,10',
			'link_name|链接名称' => 'require|chsDash',
			'link_icon|图标' => 'require',
			'link_order|排序' => 'require|number|length:1,10',
			'link_address|链接地址' => 'require|url',
		]);
		if (!$validate->check($param)) {
			return json(['code'=>0,'msg'=>$validate->getError()]);
		}
		//提交给model进行数据库操作
		$res = Model('Links')->add($param);
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
		$list = Model('Links')->search($param);
		$this->assign('list',$list);
		return $this->fetch('links/index');
	}

	/**
	 * 显示编辑资源表单页.
	 *
	 * @param  int  $id
	 * @return \think\Response
	 */
	public function edit($id) {
		$data = Model('Links')->edit($id);
		$mlist = Model('MenuType')->menulist();
		$this->assign('mlist',$mlist);
		$this->assign('data', $data);
		return $this->fetch('links/edit');
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
				return json(Model('Links')->kg($id, $status));
			}else{
				return json(['code' => 0, 'msg' => '非法操作:缺少必要参数']);
			}
		}

		//更新操作
		$param = $request->only(['mt_id','link_name','link_address','link_icon','link_note','link_order']);
		$validate = new Validate([
			'mt_id|分类' => 'require|number|length:1,10',
			'link_name|链接名称' => 'require|chsAlphaNum',
			'link_icon|图标' => 'require',
			'link_order|排序' => 'require|number|length:1,10',
			'link_address|链接地址' => 'require|url',
		]);
		if (!$validate->check($param)) {
			return json(['code'=>0,'msg'=>$validate->getError()]);
		}
		
		//执行更新数据库操作
		$res = Model('Links')->doUp($id, $param);
		return json($res);
	}

	/**
	 * 删除指定资源
	 *
	 * @param  int  $id
	 * @return \think\Response
	 */
	public function delete($id) {
		$res = Model('Links')->doDel($id);
		return json($res);
	}

}
