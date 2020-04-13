<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\MrF\FyNavigation\public/../application/admin\view\menutype\add.html";i:1586507499;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    
    <head>
        <meta charset="UTF-8">
        <title>添加分类</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/static/admin/css/font.css">
        <link rel="stylesheet" href="/static/admin/css/xadmin.css">
        <script type="text/javascript" src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="/admin/icons.html" target="_blank"><cite style="color: #00A2D6;font-size: 24px;">点击查看图标库</cite></a>
            <a>点击左侧链接查看图标库,只需填写class="<span style="color: red;">此处内容</span>"即可.</a>
          </span>
        </div>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form">
                  <div class="layui-form-item">
                      <label for="type_name" class="layui-form-label">
                          <span class="x-red">*</span>分类名称
                      </label>
                      <div class="layui-input-inline">
                          <input type="text" id="type_name" name="type_name" required="" lay-verify="type_name"
                          autocomplete="off" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red">*</span>显示在主页左侧的分类
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="menu_order" class="layui-form-label">
                          <span class="x-red">*</span>分类排序
                      </label>
                      <div class="layui-input-inline">
                          <input type="number" id="menu_order" name="menu_order" required="" lay-verify="menu_order" value="1" 
                          autocomplete="off" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red">*</span>数字越大排序越靠前(默认1)
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="menu_icon" class="layui-form-label">
                          <span class="x-red">*</span>分类图标
                      </label>
                      <div class="layui-input-inline">
                          <input type="text" id="menu_icon" name="menu_icon" required="" lay-verify="menu_icon" value="linecons-heart" autocomplete="off" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          显示在分类名前的图标(默认❤)
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="L_repass" class="layui-form-label">
                      </label>
                      <button  class="layui-btn" lay-filter="add" lay-submit="">
                          添加
                      </button>
                  </div>
              </form>
            </div>
        </div>
        <script>layui.use(['form', 'layer'],
            function() {
                $ = layui.jquery;
                var form = layui.form,
                layer = layui.layer;

                //自定义验证规则
                form.verify({
                    menu_order: [/^[1-9]\d*$/, '排序必须填入正整数'],
                });

                //监听提交
                form.on('submit(add)', function(data) {
                    $.post('/admin/menu', data.field, function(data, textStatus, xhr) {
                      if (data.code == 1) {
                          // 定时器
                          setTimeout(function() {
                              window.parent.location.reload(); //成功后刷新父界面
                          }, 1000);
                          // 弹出提示
                          layer.alert(data.msg, {
                              icon: 6
                          }, function() {
                              // 获得frame索引
                              var index = parent.layer.getFrameIndex(window.name);
                              //关闭当前frame
                              parent.layer.close(index);
                          });
                      } else {
                          layer.alert(data.msg, {
                              icon: 5
                          });
                      }
                  }, 'json');
                  return false;
                });

            });
        </script>
        
    </body>

</html>
