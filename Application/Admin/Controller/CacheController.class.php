<?php
namespace Admin\Controller;
use Think\Controller;
class CacheController extends Controller {
    public function index()
    {   	
        $this->display();
    }
    public function deldata()
    {
    	$path = "./Application/Runtime/";
    	$arr=['Cache','Data','Logs','Temp'];
    	foreach ($arr as $key => $value) {
    		$this->dirDel($path.$value."/");		
    	}
    	$this->success('清除成功');
    	return 1;
    }
    public function dirDel($path){
        if(!is_dir($path)){
            $this->error($path."并没有这个文件夹",'Cache/index');    
            return 2;      
        }
        $hand = opendir($path);
        while(($file = readdir($hand))!==false){
            if($file=="."||$file=="..")  continue;
            if(is_dir($path."/".$file)){
                $this->dirDel($path."/".$file);
            }else{
                @unlink($path."/".$file);
            }

        }
        closedir($hand);
        @rmdir($path);
    }
}