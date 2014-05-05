<?php
class NewsControl extends Control{
	//模型对象
	private $_db;
	public function __init(){
		$this->_db = K('news');
	}
	//显示文章内容
	function content(){
		$id = Q("get.id",NULL,'intval');
		if ($id) {
			  $field = $this->_db->find($id);
			  //$this->field = $field;
			  $this->assign("field",$field);
			  $this->display();
		}
	}
}