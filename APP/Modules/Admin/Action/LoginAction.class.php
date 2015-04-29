<?php
//他的登录模版一开始没有图片，而我的有！注意坑
//登录视图
  Class LoginAction extends Action{
  	Public function index(){
  		$this->display();
  	}
    /*Public function verify(){
    	import('ORG.Util.Image');
    	Image::buildImageVerify();
    }*/
//登录表单操作
    Public function login(){
      if(!IS_POST) halt('页面不存在');
      if(I('code','','strtolower')!=session('verify')) $this->error('验证码错误');
      
      $db=M('user');
      $user=$db->where(array('username'=>I('username')))->find();
      
      if(!$user || $user['password'] !=I('password','','md5')){
        $this->error('帐号或密码错误');
      }
    
      //更新最后一次登录时间与IP
      $data=array(
        'id'=>$user['id'],
        'logintime'=>time(),
        'loginip'=>get_client_ip()
        );
      $db->save($data);

      //写入session
      session('uid',$user['id']);
      session('username',$user['username']);
      session('logintime',date('Y-m-d H:i:s',$user['logintime']));
      session('loginip',$user['loginip']);
      //p($_SESSION);
      //redirect方法，传递URL参数
      redirect(__GROUP__);
    }
  	Public function verify(){
  		import('Class.Image',APP_PATH);
  		Image::verify();
  	}
  }
?>