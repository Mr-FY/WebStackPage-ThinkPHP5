<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Request;
use think\Session;
use think\Validate;

// 站点管理
class Site extends Base {
	
    //站点信息
	public function site() {
        $info = Model('Site')->saveSite();
        $this->assign('info',$info);
        return $this->fetch('site/site');
    }

    //提交修改
    public function siteUpdate(Request $request) {
        $param = $request->only(['title','keywords','description','logo']);
        $res = Model('Site')->doUp($param);
        return json($res);
    }

    //图片库
    public function images(){
        $list = Model('Image')->list();
        $this->assign('list',$list);
        return $this->fetch('site/images');
    }

    //删除图片
    public function imagesDel($id){
        $res = Model('Image')->doDel($id);
        return json($res);
    }
}