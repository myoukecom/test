<?php
//后台登陆权限验证
class AuthControl extends Control{
	public function __init(){
		if(!session("aid")){
			$this->error('你还没有登录，请登陆后操作','Login/login');

		}
	}
}