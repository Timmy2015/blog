<?php
return array(
    'DB_HOST'=>'127.0.0.1',
    'DB_USER'=>'root',
    'DB_PWD'=>'root',
    'DB_NAME'=>'blog',
    'DB_PREFIX'=>'han_',
  

    'APP_GROUP_LIST'=>'Index,Admin',
    'DEFAULT_GROUP'=>'Index',
    'APP_GROUP_MODE'=>1,
    'APP_GROUP_PATH'=>'Modules',

    
    //FUCK！真是乱啊！第一次这样写不行，偏偏要我写在公共配置配置项后；现在
    //这种单独的又突然好的！操！
    'LOAD_EXT_CONFIG'=>'verify',
    
    //验证码长度
	/*'VERIFY_LENGTH'=> 4,
	//验证码图片宽度(像素)
	'VERIFY_WIDTH'=> 200,
	//验证码图片高度(像素)
	'VERIFY_HEIGHT'=>60,
	//验证码背影颜色(16进制色值)
	'VERIFY_BGCOLOR'=>'#F3FBFE',
	//验证码种子
	'VERIFY_SEED'=> '3456789aAbBcCdDeEfFgGhHjJkKmMnNpPqQrRsStTuUvVwWxXyY',
	//验证码字体文件
	'VERIFY_FONTFILE'=>'./Data/font.ttf',
	//验证码字体大小
	'VERIFY_SIZE'=>30,
	//验证码字体颜色(16进制色值)
	'VERIFY_COLOR'=>'#444444',
	//SESSION识别名称
	'VERIFY_NAME'=> 'verify',
	//存储验证码到SESSION时使用函数
	'VERIFY_FUNC'=>'strtolower',*/
  	
);
?>