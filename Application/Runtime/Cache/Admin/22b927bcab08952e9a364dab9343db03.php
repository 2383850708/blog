<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>分类添加</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="favicon.ico">
<link href="/thinkphp3/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="/thinkphp3/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
<link href="/thinkphp3/Public/css/animate.css" rel="stylesheet">
<link href="/thinkphp3/Public/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>添加分类</h2>
    </div>
    <div class="col-lg-2">
    </div>
</div>
	<div class="col-lg-12">
                   <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <!-- <h5>All form elements <small>With custom checbox and radion elements.</small></h5> -->
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
                        <div class="hr-line-dashed"></div>
                            <form method="post" class="form-horizontal" action="<?php echo U('Type/doadd');?>">
                                <div class="form-group has-success"><label class="col-sm-4 control-label">分类名称</label>

                                    <div class="col-sm-3">
                                        <input rel="input_name" class="form-control" name="name" required="" type="text">
                                        <span class="ce"></span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-4 control-label">上级分类</label>

                                    <div class="col-sm-3">
                                    <select name="pid" class="form-control m-b">
                                        <option value="0">顶级分类</option>
                                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><option class="yys" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
                                       
                                    </select>
                                    </div>
                                </div>
                                 <div class="hr-line-dashed"></div>
                              <!--   <div class="form-group has-success"><label class="col-sm-4 control-label">分类样式</label>
                                <div class="col-sm-3">
                                 <select name="type" class="form-control m-b">
                                    <option value="1">默认列表</option><option value="2">两排列表</option>                                </select>
                                 </div>
                                </div> -->
                                <!-- <div class="hr-line-dashed"></div>
                                <div class="form-group has-success"><label class="col-sm-4 control-label">分类排序</label>

                                    <div class="col-sm-3"><input class="form-control" name="sort" required="" value="0" type="text"></div>
                                </div> -->
                               <div class="ibox-content">
                            <div class="text-center">
                            <input value="添加" class="btn btn-primary" data-toggle="modal" type="submit">
                            </div>

                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        <script type="text/javascript" src="/thinkphp3/Public/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){               
                $("input[name='pid']").change(function(){
                    var id=$(this).val();
                    alert(id);
                })
                $("input[rel='input_name']").change( function() {
                    var title=$('.yys').text();
                    alert(title);
                   /*$.ajax({
                    url:'/thinkphp3/admin.php/Type/ajax_load',
                    date:'',
                    success:function(date){
                    }*/
                  // })
                });
            })

        </script>

</body>
</html>