<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>查看分类</title>
	<link rel="shortcut icon" href="favicon.ico">
<link href="/thinkphp3/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="/thinkphp3/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
<link href="/thinkphp3/Public/css/animate.css" rel="stylesheet">
<link href="/thinkphp3/Public/css/style.css?v=4.1.0" rel="stylesheet">
<link href="/thinkphp3/Public/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

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
	                           <!--  <a href="/thinkphp3/admin.php/Type/Type/delete/id=<?php echo ($vo["id"]); ?>" onclick="return shifou();"><button type="button" class="btn btn-w-m btn-danger">删除</button></a> -->
                               <button onclick="del(this,'<?php echo ($vo["id"]); ?>');" type="button" class="btn btn-w-m btn-danger">删除</button>
	                        </td>
	                    </tr><?php endforeach; endif; ?>
                    </tbody>
                    </table>

                    </div>
                </div>
            </div>
            </div>
            <script src="/thinkphp3/Public/js/jquery-3.0.0.min.js"></script>
            <script type="text/javascript">
                function del(obj,id)
                {   
                    var object = obj;
                    swal({
                        title: "您确定要删除这条信息吗",
                        text: "删除后将无法恢复，请谨慎操作！",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "是的，我要删除！",
                        cancelButtonText: "让我再考虑一下…",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if(isConfirm){
                             $.ajax({
                                url:"/thinkphp3/admin.php/Type/delete",
                                type:"POST",
                                dataType: "json",
                                data:{typeid:id},
                                success:function(results){
                                   if(results.state==0)
                                   {
                                    object.closest('.gradeU').remove();
                                    swal(results.information, "您已经永久删除了这条信息。", "success");  
                                   }
                                   else
                                   {
                                    swal(results.information, "", "error"); 
                                   }                                     
                                   
                                }
                            }) 
                        }else{
                            swal("已取消", "您取消了删除操作！", "error");
                        }
      
                    });

                }
            </script>
              <script src="/thinkphp3/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/thinkphp3/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/thinkphp3/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/thinkphp3/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/thinkphp3/Public/js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="/thinkphp3/Public/js/hplus.js?v=4.1.0"></script>
    <script type="text/javascript" src="/thinkphp3/Public/js/contabs.js"></script>

    <!-- 第三方插件 -->
    <script src="/thinkphp3/Public/js/plugins/pace/pace.min.js"></script>
    <!-- 自定义js -->
    <script src="/thinkphp3/Public/js/content.js?v=1.0.0"></script>

    <!-- Sweet alert -->
    <script src="/thinkphp3/Public/js/plugins/sweetalert/sweetalert.min.js"></script>  
</body>
</html>