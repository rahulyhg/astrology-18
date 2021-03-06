<?php

return array(
	'route' => array(
		'^\/uri\-scheme\/([a-z0-9\-]+)' => '//_Controller/_Action',
		//'^\/accounts\/([a-z0-9\-]+)' => '//_Controller/_Action',
	),
	'database' => array(
		'driver' => 'pdo_mysql',
		'host' => 'localhost',
		'port' => 3306,
		'db_name' => 'com_urlnk',
		'user' => 'root',
		'password' => 'root',
	),
	'view' => array(
		# 'cdn_host' => 'urlnk.host',
		'cdn_host' => 'taurus/template/wxhb',
		'cdn_prefix' => 'http://taurus/template/wxhb/',
		# 'cdn_prefix' => 'http://wx.themeal.cn/wwwroot/urlnk/web/',
		'document_root' => '/',
	),
	'view_session' => array(
		'auth' => 1,
		'user' => 'username',
	),
	'session' => array(
		# 'cookie_domain' => '.urlnk.com',
		'cookie_lifetime' => 86400 * 365,
	),
	'locale' => array(
		'language' => 'zh_CN',
	),
	'redirect' => array(
		'timeout' => -1,
	),
	'env' => '',
);
