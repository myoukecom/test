<?php
class UserControl extends Control{
	//模型对象
	private $_db;
	public function __init(){
		$this->_db = K('user');
	}
	//显示文章内容
	function content(){
		$id = Q("get.uid",NULL,'intval');
		if ($id) {
			  $field = $this->_db->find($id);
			  //$this->field = $field;
			  $this->assign("field",$field);
			  $this->display();
		}
	}
}