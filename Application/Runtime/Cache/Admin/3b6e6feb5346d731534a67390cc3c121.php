<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>fdf</title>
	<link rel="shortcut icon" href="favicon.ico">
<link href="/thinkphp3/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="/thinkphp3/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
<link href="/thinkphp3/Public/css/animate.css" rel="stylesheet">
<link href="/thinkphp3/Public/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>查看分类</h2>
    </div>
    <div class="col-lg-2">
    </div>
</div>
<div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>爱我所选，选我所爱，爱里程密，爱生活！</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>分类名称</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr class="gradeU">
	                        <td><?php echo ($vo["id"]); ?></td>
	                        <td><?php echo ($vo["title"]); echo ($vo["name"]); ?></td>
	                        <td>
	                           <a href="/lichengmi/index.php?m=admin&amp;c=category&amp;a=edit&amp;id=1"><button type="button" class="btn btn-w-m btn-info">修改</button></a>
	                            <a href="/lichengmi/index.php?m=admin&amp;c=category&amp;a=delete&amp;id=1" onclick="return shifou();"><button type="button" class="btn btn-w-m btn-danger">删除</button></a>
	                        </td>
	                    </tr><?php endforeach; endif; ?>
                    </tbody>
                    </table>

                    </div>
                </div>
            </div>
            </div>
            
</body>
</html>