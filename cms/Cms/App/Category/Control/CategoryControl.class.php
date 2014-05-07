<?php
//栏目管理模块
class CategoryControl extends AuthControl{
	//数据模型对象
	private $_db;
	//构造函数 init是自动执行的方法
	public function __init(){
		parent::__init();
		$this->_db = K('Category');
	}
    function index(){
    	$category = $this->_db->all();
    	$this->category = Data::tree($category,'cname');
        $this->display();
    }
    //添加栏目
    function add(){
    	if(IS_POST){
    		if($this->_db->add_category()){
    			$this->ajax(array('state'=>1,'message'=>'栏目添加成功'));
    			//$this->success('栏目添加成功！');
    		}else{
    			$this->ajax(array('state'=>0,'message'=>'栏目添加失败'));
    			//$this->error($this->_db->error);
    		}

    	}else{
    	    $this->display();
    	}
    }
    //修改栏目
    public function edit(){
    	if(IS_POST){

    	}else{
    		//分配编辑栏目旧的数据
   	 		$field = $this->_db->find(Q("cid"));
   	 		//分配所有栏目
   	 		$category = $this->_db->all();
    			$category = Data::tree($category,'cname');
    			foreach($category as $n=>$v){
    	    	//将父级栏目添加selected（选中状态)这块有问题明天接着改
    				$v['selected']='';
    				if($field['pid']==$v['cid']){
    					$v['selected']=' selected="selected" ';
    				}
    	    	//
    	    	$category[$n]=$v;
    	    }
    	    //分配当前栏目数据
    	    $this->field= $field;
    	    //分配栏目数据
    	    $this->category= $category;		
    		$this->display();
    	}
    }
}
?>