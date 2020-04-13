<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Request;
use think\Session;
use think\Validate;

class Uploads extends Base {
	// 图片上传类
	public function imgUpload(Request $request) {
        //设置图片保存路径
        $save_path = ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads';
		//获取文件对象
        $file = $request->file('file');
        //验证并上传
        $info = $file->validate([
            'size'=>'1048576','ext'=>'jpg,jpeg,gif,png,ico'
        ])->move($save_path);

        //判断是否成功
        if($info){
            $img_path = '/static/uploads/' . str_replace('\\', '/', $info->getSaveName());
            $res = Model('Image')->add($img_path);
            if ($res['code'] == 0) {
                return json($res);
            }
            return json(['code'=>1,'url'=>$img_path,'msg'=>'上传成功']);
        }else{
            return json(['code'=>0,'url'=>'','msg'=>$file->getError()]);
        }
		
	}
}