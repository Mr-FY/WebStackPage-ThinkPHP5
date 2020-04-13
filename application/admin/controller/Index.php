<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;
use think\Request;
use think\Session;
use think\Validate;

class Index extends Base {
	// 后台菜单框架
	public function index() {
		$serverinfo = new \ServerInfo\ServerInfo;
        @$info = [
            '后台版本'=>'v1.0',
            '服务器时间' => $serverinfo->GetServerTime(),
            '服务器系统' => $serverinfo->Serveros(),
            '服务器解释引擎' => $serverinfo->GetServerSoftwares(),
            '服务器IP' => $serverinfo->ServerIp(),
            'PHP版本' => $serverinfo->GetPhpVersion(),
            'HTTP版本' => $serverinfo->GetHttpVersion(),
            '网站根目录' => $serverinfo->GetDocumentRoot(),
            '最大执行时间' => $serverinfo->GetMaxExecutionTime(),
            '最大文件上传' => $serverinfo->GetServerFileUpload(),
            '全部变量' => $serverinfo->GetRegisterGlobals(),
            '安全模式' => $serverinfo->GetSafeMode(),
            '图形处理' => $serverinfo->GetGdVersion(),
            '内存占用' => $serverinfo->GetMemoryUsage(),
            '版权所有'=>'风影OvO(fyovo.com)',
            '开发者'=>'风影OvO(fyovo@qq.com)'
        ];

        //获取管理员登陆信息
        $admin_name = Session::get('admin')['admin_name'];
        $time = date('Y-m-d H:i:s');
        $this->assign('info', $info);
        $this->assign('admin_name', $admin_name);
        $this->assign('time', $time);
		return $this->fetch('index/index');
	}
}