<?php


    // 定义系统编码
    header("Content-Type: text/html;charset=utf-8");
    // 定义应用路径
    define('APP_PATH', './Application/');
    // 定义缓存路径
    define('RUNTIME_PATH', './Runtime/');
    // 定义备份路径
    define('DATABASE_PATH', './Database/');
    // 定义钱包路径
    define('COIN_PATH', './Coin/');
    // 定义备份路径
    define('UPLOAD_PATH', './Upload/');
    // 定义数据库类型
    define('DB_TYPE', 'mysql');


    if(file_exists('./.lock')){ //测试环境

        define('DB_HOST', 'localhost');
        define('DB_NAME', 'qhbtc');
        define('DB_USER', 'root');
        define('DB_PWD', 'root');

    }else{ //线上环境

        define('DB_HOST', 'rm-wz9b2blhu6vc6tqwd.mysql.rds.aliyuncs.com');
        define('DB_NAME', 'qhbtc');
        define('DB_USER', 'qhbtc');
        define('DB_PWD', 'Qhbtc123456');

    }

    // 定义数据库端口
    define('DB_PORT', '3306');
    // 开启演示模式
    define('APP_DEMO', 0);
    // 开始调试模式
    define('M_DEBUG', 1);
    // 后台安全入口
    define('ADMIN_KEY', 'JNGHJAZBXJHAJKADH78678678JHBJHADB78JHBJADHB');
    //定义授权参数
    define('MSCODE', 'E02EFFDBFBFB82B885A970D07B');
    // 引入入口文件
    require './ThinkPHP/movesay.php';
