<?php
/**
 * 酷播资源网-最新影视资源大全
 * http://www.kubozy.net/
 * http://api.kbzyapi.com/inc/api.php?ac=videolist&wd=&t=&h=0&ids=&pg=1
 * http://api.kbzyapi.com/inc/apikuyun.php?ac=videolist&wd=&t=&h=0&ids=&pg=1
 * http://api.kbzyapi.com/inc/apim3u8.php?ac=videolist&wd=&t=&h=0&ids=&pg=1
 */
namespace Plugin\Robot;

class Kubozy extends \Plugin\Robot
{
	public $func_format = 'json';
	
	public function __construct()
	{
		# parent::__construct();
	}
}
