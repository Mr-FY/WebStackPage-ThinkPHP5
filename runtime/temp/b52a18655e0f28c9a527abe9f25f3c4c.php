<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\MrF\FyNavigation\public/../application/admin\view\home\repassword.html";i:1586697336;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    
    <head>
        <meta charset="UTF-8">
        <title>编辑管理员</title>
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
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form">

                  <div class="layui-form-item">
                      <label for="username" class="layui-form-label">
                          <span class="x-red">*</span>用户名
                      </label>
                      <div class="layui-input-inline">
                          <input type="text" id="admin_name" name="admin_name" required="" lay-verify="admin_name" value="<?php echo $data['admin_name']; ?>"
                          autocomplete="off" class="layui-input" disabled="">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red">*</span>将会成为您唯一的登入名
                      </div>
                  </div>
                  
                  <div class="layui-form-item">
                      <label for="L_pass" class="layui-form-label">
                          <span class="x-red">*</span>密码
                      </label>
                      <div class="layui-input-inline">
                          <input type="password" id="L_pass" name="password" 
                          autocomplete="off" lay-verify="pass" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          8到18个字符,留空则不修改
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="L_repass" class="layui-form-label">
                      </label>
                      <button  class="layui-btn" lay-filter="add" lay-submit="">
                          保存
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
                    admin_name: function(value) {
                        if (value.length < 5) {
                            return '用户名/登录名至少5个字符';
                        }
                    },
                    pass: [/(^$)|(.+){8,18}$/, '密码必须8到18位'],
                });

                //监听提交
                form.on('submit(add)', function(data) {
                    // data.field._method = 'PUT';
                    $.post('/admin/repassword_post', data.field, function(data, textStatus, xhr) {
                      if (data.code == 1) {
                          // 定时器
                          setTimeout(function() {
                              // window.parent.location.reload(); //成功后刷新父界面
                              window.parent.location.href = '/outlogin.html' //成功后刷新父界面
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
