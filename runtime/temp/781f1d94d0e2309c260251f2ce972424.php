<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"/var/www/tp5/application/../b_template/admin/index/index.html";i:1524661146;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TBB后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/admin/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/admin/css/bjy.css"/>
    <link rel="stylesheet" href="/admin/self/css/index.css"/>
</head>
<body>
<div id="nav-top">
    <div class="nt-logo"><a href="<?php echo url('Admin/Index/index'); ?>"></a> <span>TBB</span></div>
    <ul class="nt-nav list-unstyled">
        <li class="ntn-li ntn-active"><span class="fa fa-bitcoin nt-ico"></span> 资产包</li>
        <li class="ntn-li"><span class="fa fa-comments nt-ico"></span> 用户中心</li>
        <li class="ntn-li"><span class="fa fa-bar-chart nt-ico"></span> 统计</li>
        <li class="ntn-li"><span class="fa fa-cogs nt-ico"></span> 系统设置</li>
        <li class="ntn-li"><span class="fa fa-cogs nt-ico"></span> 待加</li>
    </ul>
    <ul class="nt-msg list-unstyled">
        <li class="nt-go-index"><a href="<?php echo url('Home/Index/index'); ?>" target="_blank"><span class="fa fa-home"></span>
            前台首页</a>
        </li>
        <li class="nt-sign-out"><a href="<?php echo url('Admin/Login/logout'); ?>"><span class="fa fa-sign-out"></span> 退出</a></li>
    </ul>
</div>
<div id="nav-left">
    <div class="nl-con nl-show">
        <dl>
            <dt><span class="fa fa-bitcoin"></span>资产包</dt>
            <dd><a href="<?php echo url('admin/Goods/add'); ?>" target="right_content"></a><span class="fa fa-caret-right"></span>
                新增
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="javascript:;" target="right_content"></a><span class="fa fa-caret-right"></span>
                暂定
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
        <dl>
            <dt><span class="fa fa-rmb"></span> 分享奖</dt>
            <dd><a href="<?php echo url('admin/member/share'); ?>" target="right_content"></a><span class="fa fa-caret-right"></span>
                分享奖
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="javascript:;" target="right_content"></a><span class="fa fa-caret-right"></span>
                暂定
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
        <dl>
            <dt><span class="fa fa-money"></span> 极差奖</dt>
            <dd><a href="<?php echo url('admin/Member/lever'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span>
                极差奖
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="javascript:;" target="right_content"></a><span class="fa fa-caret-right"></span>
                暂定
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
        <dl>
            <dt><span class="fa fa-btc"></span> 帕点奖</dt>
            <dd><a href="<?php echo url('admin/Member/padian'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span>
                极差奖
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="javascript:;" target="right_content"></a><span class="fa fa-caret-right"></span>
                暂定
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>

    </div>
    <div class="nl-con">
        <dl>
            <dt><span class="fa fa-comment-o"></span>用户操作</dt>
            <dd><a href="<?php echo url('admin/Member/index'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span>
                用户列表
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
        <dl>
            <dt><span class="fa fa-eur"></span> 用户提现</dt>
            <dd><a href="<?php echo url('admin/Member/cash'); ?>" target="right_content"></a><span class="fa fa-caret-right"></span>
                YKC提现
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
        <dl>
            <dt><span class="fa fa-euro"></span> 用户订单</dt>
            <dd><a href="<?php echo url('admin/Member/all_order'); ?>" target="right_content"></a><span class="fa fa-caret-right"></span>
                所有订单
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
        <dl>
            <dt><span class="fa fa-gbp"></span> 提币</dt>
            <dd><a href="<?php echo url('admin/Member/root_bi'); ?>" target="right_content"></a><span class="fa fa-caret-right"></span>
                钱包管理员币数量
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="<?php echo url('admin/Member/tibi'); ?>" target="right_content"></a><span class="fa fa-caret-right"></span>
                提币
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
    </div>
    <div class="nl-con">
        <dl>
            <dt><span class="fa fa-bar-chart"></span> 统计</dt>
            <dd><a href="<?php echo url('admin/Member/tongji'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span> 统计
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dt><span class="fa fa-area-chart"></span> 导出数据</dt>
            <dd><a href="<?php echo url('admin/excel/user'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span> 导出用户列表
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="<?php echo url('admin/excel/order'); ?>" target="right_content"></a><span
                    class="fa fa-line-chart"></span> 导出订单列表
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="<?php echo url('admin/excel/cash'); ?>" target="right_content"></a><span
                    class="fa fa-pie-chart"></span> 导出提现列表
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="<?php echo url('admin/excel/tongji'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span> 导出统计列表
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
    </div>
    <div class="nl-con">
        <dl>
            <dt><span class="fa fa-dribbble"></span> 系统设置</dt>
            <dd><a href="<?php echo url('admin/Config/group'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span>
                网站设置
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="<?php echo url('admin/category/index'); ?>" target="right_content"></a><span
                    class="fa fa-cc-stripe"></span> 分类设置
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="<?php echo url('admin/Model/index'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span> 模型管理
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
            <dd><a href="<?php echo url('admin/Config/index'); ?>" target="right_content"></a><span
                    class="fa fa-caret-right"></span> 配置管理
                <div class="nl-checked">
                    <div class="nl-arrows"></div>
                </div>
            </dd>
        </dl>
    </div>
</div>
<div id="content">
    <iframe id="content-iframe" src="<?php echo url('Admin/Index/welcome'); ?>" frameborder="0" width="100%" height="100%"
            name="right_content" scrolling="auto" frameborder="0" scrolling="no"></iframe>
</div>

<script src="/admin/js/jquery-2.0.0.min.js"></script>
<script src="/admin/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/admin/pace/pace.min.js"></script>
<script src="/admin/self/js/index.js"></script>

<script>
    // 动态调整iframe的高度以适应不同高度的显示器
    $('#content').height($(window).height());
    $('#content').css('padding-bottom', 50);
</script>
</body>
</html>