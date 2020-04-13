<?php
namespace app\admin\model;
use think\Model;
use think\Session;

class Site extends Model {

	public function list() {
        $data = $this
            ->order('id asc')
            ->paginate(10, false, ['query' => request()->param()]);
        return $data;
	}

    //搜索
    public function saveSite(){
        $info = $this->where('id',1)->find();
        if (empty($info)) {
            $info = [
                'title' => '风影导航',
                'keywords' => '风影导航,网址导航,设计资源,创意导航,创意网站导航,个人导航,网址收藏',
                'description' => '风影导航:收集国内外优秀实用网站、技术资源网站、UI设计资源网站、灵感创意网站、素材资源网站，分享优质产品设计技术类书签。',
                'logo' => '/static/index/assets/images/logo@2x.png',
                'logo_collapsed' => '/static/index/assets/images/logo-collapsed@2x.png',
                'icon' => '/static/index/assets/images/favicon.png',
            ];
            $this->save($info);
        }else{
            $info = $info->toArray();
        }
        return $info;
    }

    //编辑
    public function doUp($data){
        if ($this->where('id',1)->update($data)) {
            return ['code' => 1, 'msg' => '保存成功'];
        }else{
            return ['code' => 0, 'msg' => '您可能未作出任何修改'];
        }
    }

}