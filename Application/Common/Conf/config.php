<?php
return array(
	'MODULE_ALLOW_LIST'     => array('Home','Aoshadeadmin'),
	'DEFAULT_MODULE'		=> 'Home',
    'URL_HTML_SUFFIX'       => '',
    'SHOW_PAGE_TRACE'       => false,
    'SESSION_AUTO_START'    =>  true,
    'URL_REQUEST_URI'       => 'REQUEST_URI',

    //设置Rewrite模式
    'URL_MODEL'             => 2,
    'URL_CASE_INSENSITIVE'  => false,
    'APP_FILE_CASE'         => true,
    'DB_PARAMS'             => array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
    //URL变量绑定到操作方法作为参数
    'URL_PARAMS_BIND'       =>  true,
    //设置参数绑定按照变量顺序绑定
    'URL_PARAMS_BIND_TYPE'  =>  false,


    //设置文件路径
    '__PUBLICCSSADMIN__'    => __ROOT__.'/Public/Css/Admin',

    '__PUBLICIMGADMIN__'    => __ROOT__.'/Public/Img/Admin',

    '__PUBLICJS__'          => __ROOT__.'/Public/Js',
    '__PUBLICJSADMIN__'     => __ROOT__.'/Public/Js/Admin',

    //图片上传路径
    'UPLOADIMG'             => './Public',


	//服务器设置
    'DB_TYPE'               => 'mysql',
    'DB_HOST'               => '127.0.0.1',
    'DB_PORT'               => '3306',
    'DB_NAME'               => 'aoshade',
    'DB_USER'               => 'root',
    'DB_PWD'                => 'root',
    'DB_PREFIX'             => 'asd_'
    


);