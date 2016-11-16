<?php
return array(
	//'配置项'=>'配置值'
	'__PUBLIC__'=>  __ROOT__.'/Public',// 站点公共目录
		'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => '127.0.0.1', // 服务器地址
        'DB_NAME'   => 'Blog', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => 'root',  // 密码
        'DB_PORT'   => '3306', // 端口
        'DB_PREFIX' => 'blog_', // 数据库表前缀
        'LOAD_EXT_FILE' => $funcs,
        'SHOW_PAGE_TRACE' =>false,  //
        'SHOW_ERROR_MSG' =>false,
         
);