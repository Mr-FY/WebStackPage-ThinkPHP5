<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\MrF\FyNavigation\public/../application/admin\view\site\site.html";i:1586688332;}*/ ?>
<!DOCTYPE html>
<html class="x-admin-sm">
    
    <head>
        <meta charset="UTF-8">
        <title>站点信息</title>
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
            <a href="javascript:void(0);">首页</a>
            <a href="javascript:void(0);">站点管理</a>
            <a>
              <cite>站点信息</cite></a>
          </span>
          <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
        </div>

        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                      <div class="layui-fluid">
                        <div class="layui-row">
                            <form class="layui-form">

                              <div class="layui-form-item">
                                  <label for="title" class="layui-form-label">
                                      <span class="x-red">*</span>站点标题
                                  </label>
                                  <div class="layui-input-inline">
                                      <input type="text" id="title" name="title" value="<?php echo $info['title']; ?>" required="" lay-verify="title"
                                      autocomplete="off" class="layui-input">
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>显示在前端页面的标题
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                  <label for="keywords" class="layui-form-label">
                                      <span class="x-red">*</span>网站关键词
                                  </label>
                                  <div class="layui-input-inline">
                                      <input type="text" id="keywords" name="keywords" value="<?php echo $info['keywords']; ?>" required="" lay-verify="keywords"
                                      autocomplete="off" class="layui-input">
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>用几个关键词描述你的网站
                                  </div>
                              </div>

                              <div class="layui-form-item">
                                  <label for="description" class="layui-form-label">
                                      <span class="x-red">*</span>网站内容描述
                                  </label>
                                  <div class="layui-input-inline">
                                      <input type="text" id="description" name="description" value="<?php echo $info['description']; ?>" required="" lay-verify="description"
                                      autocomplete="off" class="layui-input">
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>用简单的一段话描述你的网站
                                  </div>
                              </div>

                              <hr>

                              <div class="layui-form-item">
                                  <label class="layui-form-label"><span class="x-red">*</span>网站主Logo</label>
                                  <div class="layui-input-inline">
                                      <input type="text" name="logo" lay-verify="required" id="logo_inputimgurl" placeholder="点击上传logo自动获取" value="<?php echo $info['logo']; ?>" class="layui-input">
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">
                                      <span class="x-red">*</span>前端页面左上角的Logo
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                 <label class="layui-form-label">Logo预览</label>
                                  <div class="layui-input-inline">
                                      <div class="layui-upload-list" style="margin:0">
                                          <img src="<?php echo $info['logo']==''?'/static/uploads/default.jpg':$info['logo']; ?>" id="logo_srcimgurl" class="layui-upload-img">
                                      </div>
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">上传Logo</label>
                                  <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                      <button type="button" class="layui-btn layui-btn-primary" id="logo">上传新Logo</button >
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">主Logo建议尺寸534*120,大小在1M以内</div>
                              </div>
                              
                              <!-- <hr>

                              <div class="layui-form-item">
                                  <label class="layui-form-label"><span class="x-red">*</span>副Logo</label>
                                  <div class="layui-input-inline">
                                      <input type="text" name="logo_collapsed" lay-verify="required" id="flogo_inputimgurl" placeholder="上传副logo自动获取" value="" class="layui-input">
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                 <label class="layui-form-label">副Logo预览</label>
                                  <div class="layui-input-inline">
                                      <div class="layui-upload-list" style="margin:0">
                                          <img src="/static/uploads/default.jpg" id="flogo_srcimgurl" class="layui-upload-img">
                                      </div>
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">上传副Logo</label>
                                  <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                      <button type="button" class="layui-btn layui-btn-primary" id="flogo">上传新副Logo</button>
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">前端页面左侧菜单栏折叠后的副Logo,建议尺寸80*80</div>
                              </div>

                              <hr>

                              <div class="layui-form-item">
                                  <label class="layui-form-label"><span class="x-red">*</span>浏览器图标</label>
                                  <div class="layui-input-inline">
                                      <input type="text" name="icon" lay-verify="required" id="icon_inputimgurl" placeholder="上传图标自动获取" value="" class="layui-input">
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                 <label class="layui-form-label">图标预览</label>
                                  <div class="layui-input-inline">
                                      <div class="layui-upload-list" style="margin:0">
                                          <img src="/static/uploads/default.jpg" id="icon_srcimgurl" class="layui-upload-img">
                                      </div>
                                  </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">上传图标</label>
                                  <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                      <button type="button" class="layui-btn layui-btn-primary" id="icon">上传新图标</button >
                                  </div>
                                  <div class="layui-form-mid layui-word-aux">显示在浏览器标签的图标,尺寸比例为1:1即正方形,大小在1M以内</div>
                              </div> -->

                              
                              
                              <div class="layui-form-item">
                                  <label for="L_repass" class="layui-form-label">
                                  </label>
                                  <button  class="layui-btn" lay-filter="add" lay-submit="">
                                      保存配置
                                  </button>
                              </div>
                          </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <script type="text/javascript" src="/static/admin/cropper/cropper.js"></script> -->
        <script>
          layui.config({
            base: '/static/cropper/' //layui自定义layui组件目录
          }).use(['form', 'layer','croppers'],
            function() {
                $ = layui.jquery,
                form = layui.form,
                croppers = layui.croppers,
                layer = layui.layer;

                 //创建一个Logo上传组件
                croppers.render({
                    elem: '#logo'
                    ,saveW:534     //保存宽度
                    ,saveH:120
                    ,mark:3/1    //选取比例
                    ,area:'900px'  //弹窗宽度
                    ,url: "/admin/uploads.html"  //图片上传接口
                    ,done: function(url){ //上传完毕回调
                        $("#logo_inputimgurl").val(url);
                        $("#logo_srcimgurl").attr('src',url);
                    }
                });

                //监听提交
                form.on('submit(add)', function(data) {
                    $.post('/admin/siteupdate', data.field, function(data, textStatus, xhr) {
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

                //废除
                //创建一个副Logo上传组件
                // croppers.render({
                //     elem: '#flogo'
                //     ,saveW:150     //保存宽度
                //     ,saveH:150
                //     ,mark:1/1    //选取比例
                //     ,area:'900px'  //弹窗宽度
                //     ,url: "/admin/uploads.html"  //图片上传接口返回
                //     ,done: function(url){ //上传完毕回调
                //         $("#flogo_inputimgurl").val(url);
                //         $("#flogo_srcimgurl").attr('src',url);
                //     }
                // });

                //创建一个Icon上传组件
                // croppers.render({
                //     elem: '#icon'
                //     ,saveW:150     //保存宽度
                //     ,saveH:150
                //     ,mark:1/1    //选取比例
                //     ,area:'900px'  //弹窗宽度
                //     ,url: "/admin/uploads.html"  //图片上传接口返回
                //     ,done: function(url){ //上传完毕回调
                //         $("#icon_inputimgurl").val(url);
                //         $("#icon_srcimgurl").attr('src',url);
                //     }
                // });

                //自定义验证规则
                // form.verify({
                    
                // });

                

            });
        </script>
        
    </body>

</html>
