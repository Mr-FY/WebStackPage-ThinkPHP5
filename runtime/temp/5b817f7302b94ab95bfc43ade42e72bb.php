<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\MrF\FyNavigation\public/../application/admin\view\site\images.html";i:1586688598;}*/ ?>

<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>欢迎页面-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/static/admin/css/font.css">
        <link rel="stylesheet" href="/static/admin/css/xadmin.css">
        <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
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
              <cite>图片库</cite></a>
          </span>
          <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
        </div>

        <div class="layui-fluid">
            
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                            <blockquote class="layui-elem-quote">
                                <span class="x-red">若下方图片库显示为空白,请更改浏览器窗口大小重试.</span>请谨慎删除, 如果被删除图片正在被某条链接使用, 会导致该链接图标无法显示.
                            </blockquote>
                        </div>
                    </div>
                </div>
                
                <?php foreach($list as $li): ?>
                <div class="layui-col-sm6 layui-col-md2">
                    <div class="layui-card">
                        <div class="layui-card-header">
                            <button class="layui-btn layui-btn-danger" onclick="del(this,<?php echo $li['id']; ?>)"><i class="layui-icon"></i>删除</button>
                        </div>
                        <div class="layui-card-body">
                            <center>
                                <img src="<?php echo $li['path']; ?>" title="<?php echo $li['path']; ?>" style="width: 100%;height: 100%;">
                            </center>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                            <div class="page">
                                <?php echo $list->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        <script type="text/javascript">
            /*删除*/
          function del(obj,id){
            layer.confirm('删除后被对应链接使用的图标将无法显示,确认要删除吗？',function(index){
                console.log(obj);
                console.log(id);
              //发异步删除数据
              $.post('/admin/imagesdel/'+id, {}, function(data, textStatus, xhr) {
                if (data.code==1) {
                  layer.msg(data.msg,{icon:1,time:1000});
                  setTimeout(function() {
                      window.location.reload(); //成功后刷新界面
                  }, 1000);
                }else{
                  layer.msg(data.msg,{icon:5,time:1000});
                }
                
              },'json');
              
            });
          }
        </script>
    </body>
</html>