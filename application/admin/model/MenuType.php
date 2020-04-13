<?php
namespace app\admin\model;
use think\Model;
use think\Session;

class MenuType extends Model {

	public function list() {
        $data = $this
            ->order('menu_order desc')
            ->paginate(10, false, ['query' => request()->param()]);
        return $data;
	}

    //用于添加链接时遍历的列表
    public function menulist(){
        $data = $this
            ->where('status',1)
            ->order('menu_order desc')
            ->select();
        
        foreach ($data as $key => $value) {
            $data[$key] = $value->toArray();
        }

        return $data;
    }

    //添加用户
    public function add($data) {
        $repeat = $this->where('type_name',$data['type_name'])->find();
        if ($repeat) {
            return ['code' => 0, 'msg' => '该分类名已存在!'];
        }

        $data['status'] = 1;
        $data['add_time'] = date('Y-m-d H:i:s');
        
        $result = $this->save($data);

        if ($result) {
            return ['code' => 1, 'msg' => '添加成功!'];
        }else{
            return ['code' => 0, 'msg' => '添加失败,请刷新后重试!'];
        }
    }


	public function edit($id) {
		$data = $this->where('id', $id)->find()->toArray();
		return $data;
	}

    //编辑
    public function doUp($id,$data){
        if ($this->where('id',$id)->update($data)) {
            return ['code' => 1, 'msg' => '保存成功!'];
        }else{
            return ['code' => 0, 'msg' => '您可能未作出任何修改!'];
        }
    }

    //删除
    public function doDel($id){
        if($this->where('id',$id)->delete()){
            return ['code' => 1,'msg' => '删除成功!'];
        }else{
            return ['code' => 0,'msg' => '删除失败!'];
        }
    }

    //开关控制
    public function kg($id, $status){
        if ($this->where('id',$id)->update($status)) {
            return ['code' => 1,'msg' => '操作成功'];
        }else{
            return ['code' => 0,'msg' => '操作失败'];
        }
    }

}