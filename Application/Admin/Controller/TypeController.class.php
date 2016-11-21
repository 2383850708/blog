<?php
namespace Admin\Controller;
use Think\Controller;

header("Content-type:text/html;charset=utf-8");
class TypeController extends Controller {
    public function index()
    {   	
         //$e=new \Org\Util\Type();
         
         $menu = M('type');        
         $list = $menu->order('pid asc,id asc')->select();
         $arr=$this->ziti(\Org\Util\Type::tree($list));
         $this->assign('list',$arr);       
         $this->display();
    }
    
    
    public function add()
    {
         $menu = M('type');
         $list = $menu->order('pid asc,id asc')->select();
         $arr=$this->ziti(\Org\Util\Type::tree($list));        
         $this->assign('list',$arr);
    	 $this->display();
    }
    public function delete()
    {
        /**
         * 删除分类
         */  

        $id = $_POST['typeid'];
        $type = M('type');
        $isset = $type->where("pid=$id")->field("pid")->find();
        $result=array();
        if($isset)
        { 
            $result['information']='该分类下有子类不能删除';
            $result['state']=1;          
        }
        else
        {
            $res = $type->delete($id);
            if($res)
            {
                $result['information']='删除成功';
                $result['state']=0;                
            }else
            {      
                $result['information']='删除失败';
                $result['state']=1;                     
            }   
        }         
        echo json_encode($result);

    }
    public function doadd(){
        if($_POST['pid']>0){
            $date['pid']=$_POST['pid'];
        }else{
            $date['pid']=0;
        }
        $m = M("type");
        $date['name']=$_POST['name'];
        
        $result=$m->add($date);
        if($result>0){
            $this->success("添加成功！");
        }else{
            $this->error("添加失败！");
        }
    }
    public function ajax_load()
    {
        echo '111';exit;
    }
    //将|-乱码解决
    private function ziti($ar)
    {
        $arr = array();
         foreach($ar as $k=>$v)
         {
            $arr[$k]['id']=$v['id'];
            $arr[$k]['name']=$v['name'];
            $arr[$k]['title']=iconv('GB2312','UTF-8',$v['title']);
         }
         return $arr;
    }
}