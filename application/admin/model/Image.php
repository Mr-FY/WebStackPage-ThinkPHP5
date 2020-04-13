<?php
namespace app\admin\model;
use think\Model;
use think\Session;

class Image extends Model {

	public function list() {
        $data = $this
            ->order('add_time desc')
            ->paginate(18, false, ['query' => request()->param()]);
        return $data;
	}

    //添加
    public function add($url) {
        $data['path'] = $url;
        $data['add_time'] = date('Y-m-d H:i:s');
        
        $result = $this->save($data);

        if ($result) {
            return ['code' => 1, 'msg' => '上传成功'];
        }else{
            return ['code' => 0, 'msg' => '图片保存时出错'];
        }
    }

    //删除
    public function doDel($id){
        $find = $this->where('id',$id)->find()->toArray();
        $path = UPLOAD_PATH . $find['path'];
        if (file_exists($path)) {
            unlink($path);
            if($this->where('id',$id)->delete()){
                return ['code' => 1,'msg' => '删除成功!'];
            }else{
                return ['code' => 0,'msg' => '删除失败!'];
            }
        }else{
            return ['code' => 0,'msg' => $find['path'].'图片未在本地找到'];
        }
        
        
    }

}