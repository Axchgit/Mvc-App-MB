<?php
return array(
	//数据库配置
	'db' => array(
		//读者需要根据自身环境修改此处配置
		'user' => 'root',
		'pass' => '',
		'dbname' => 'mvc_study',
	),
	//整体项目
	'app' => array(
		'default_platform' => 'home',//默认平台
	),
	//前台配置
	'home' => array(
		'default_controller' => 'comment',//默认控制器
		'default_action' => 'list',//默认方法
		'pagesize' => 5,//每页评论数
	),
	//后台配置
	'admin' => array(
		'default_controller' => 'comment',//默认控制器
		'default_action' => 'list',//默认方法
		'pagesize' => 10,//每页评论数
	)
);
