<?php
return array(
	'URL_HTML_SUFFIX' => 'shtml|html|xml',
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'DB_NEWSTU',    // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_CHARSET'            =>  'utf8',
    'SESSION_AUTO_START'    =>  'true',
    'URL_MODEL'				=>  '0',
    'DB_PREFIX'             =>  'TBL_',     //设置表前缀
    'DB_PARAMS'             =>  array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
    'TMPL_L_DELIM'          =>'<{',
    'TMPL_R_DELIM'          =>'}>',
);