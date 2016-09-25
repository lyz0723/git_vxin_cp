<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'   => 'mysql',         // 数据库类型我们是mysql，就对于的是mysql
    'DB_HOST'   => '123.56.162.14',   // 服务器地址，就是我们配置好的php服务器地址，也可以使用localhost，
    'DB_NAME'   => 'db_garten',  // 数据库名：mysql创建的要连接我们项目的数据库名称
    'DB_USER'   => 'root',           // 用户名：mysql数据库的名称
    'DB_PWD'    => 'ideal2013',                 //mysql数据库的 密码
    'DB_PORT'   => 3306,            // 端口服务端口一般选3306
    //'DB_PREFIX' => 'tp_',            //  数据库表前缀
    'DB_CHARSET'=> 'utf8',         // 字符集
    'DB_DEBUG'  =>  TRUE,         // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
    'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session


//    'DB_CONFIG1' => array(
//        'db_type'  => 'mysql',
//        'db_user'  => 'root',
//        'db_pwd'   => 'ideal2013',
//        'db_host'  => '123.56.162.14',
//        'db_port'  => '3306',
//        'db_name'  => 'db_garten',
//        'db_charset'=>'utf8',
//    ),
    'DB_CONFIG2' => 'mysql://root:ideal2013@123.56.162.14:3306/db_programme#utf8'
);

