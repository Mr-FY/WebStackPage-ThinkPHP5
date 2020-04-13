<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index(){
    	$type_list = Db::name('menu_type')
    					->where('status',1)
    					->order('menu_order desc')
    					->select();
    	$links_list = Db::name('links')
    					->where('status',1)
    					->order('link_order desc')
    					->select();
    	$list = [];
    	foreach ($type_list as $key => $value) {
    		$list[$key]['type_name'] = $value['type_name'];
    		// $list[$key]['arr'] = $value['type_name'];
    		foreach ($links_list as $ke => $val) {
    			if ($val['mt_id'] == $value['id']) {
    				$list[$key]['arr'][] = $val;
    			}
    		}
    	}

    	foreach ($list as $k => $v) {
    		if (!empty($v['arr'])) {
    			$list[$k]['arr'] = array_chunk($v['arr'],4,true);
    		}
    	}

    	$info = Db::name('site')->where('id',1)->find();
    	
    	$this->assign('type_list',$type_list);
    	$this->assign('list',$list);
    	$this->assign('info',$info);
        return $this->fetch('index/index');
    }

    public function about(){
    	$info = Db::name('site')->where('id',1)->find();
    	$this->assign('info',$info);
    	return $this->fetch('index/about');
    }

    public function test(){
    	$data = [
    		'mt_id' => 4,
    		'link_name' => '测试',
    		'link_address' => 'https://www.baidu.com',
    		'link_icon' => '/static/uploads/20200410/40b818a0d7f35f716ec454702b660f9b.jpg',
    		'link_note' => '百度一下,你就知道',
    		'link_order' => 1,
    		'add_time' => '2020-04-10 23:26:05',
    		'status' => 1,
    	];
    	for ($i=0; $i < 30; $i++) { 
    		$res = Db::name('links')->insert($data);
    		if ($res) {
    			var_dump('success');
    		}else{
    			var_dump('error');
    		}
    	}
    	

    }
}
