<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"/var/www/tp5/public/../application/index/view/index/index.html";i:1524623190;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/css/layui.css"  media="all">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<div class="layui-container">
    <blockquote class="layui-elem-quote">注意：下述演示中的颜色只是做一个区分作用，并非栅格内置。</blockquote>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
        <legend>列偏移</legend>
    </fieldset>

    <div class="layui-row">
        <div class="layui-col-md4">
            <div class="grid-demo grid-demo-bg1">4/12</div>
        </div>
        <div class="layui-col-md4 layui-col-md-offset4">
            <div class="grid-demo">偏移4列</div>
        </div>
        <div class="layui-col-md1 layui-col-md-offset5">
            <div class="grid-demo grid-demo-bg1">偏移5列</div>
        </div>
        <div class="layui-col-md1">
            <div class="grid-demo">不偏移</div>
        </div>
    </div>

    <div class="layui-row">
        <div class="layui-col-md3 layui-col-md-offset3">
            <div class="grid-demo grid-demo-bg1">偏移3列</div>
        </div>
        <div class="layui-col-md3 layui-col-md-offset1">
            <div class="grid-demo">偏移1列</div>
        </div>
    </div>


</div>




<script src="/static/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>

</script>

</body>
</html>