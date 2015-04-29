<?php
//他的登录模版一开始没有图片，而我的有！注意坑
  Class LoginAction extends Action{
  	Public function index(){
  		$this->display();
  	}
    /*Public function verify(){
    	import('ORG.Util.Image');
    	Image::buildImageVerify();
    }*/

  	Public function verify(){
  		import('Class.Image',APP_PATH);
  		Image::verify();
  	}
  }
?>