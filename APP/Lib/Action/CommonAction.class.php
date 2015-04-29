<?php
  Class CommonAction extends Action{
  	Public function _initialize(){
  		if(!isset($_SESSION['uid'])){
			//调用redirect类方法，传URL地址 
  			//$this->redirect(GROUP_NAME.'Login/index');
  			redirect(GROUP_NAME.'/Login/index');
  			
  		
  		}
  	}
  }
?>