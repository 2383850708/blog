<?php
//���ຯ��
class Type
{
	static public $treeList = array();
    static public function tree(&$data,$pid = 0, $count = 0) {
        foreach ($data as $key => $value){
            if($value['pid']==$pid){
                $value['level'] = $count;
                //�Ա�����и�ʽ��
                $value['title'] = str_repeat('����', $count).''.$value['title'];
                self::$treeList [] = $value;
                unset($data[$key]);
                self::tree($data,$value['id'],$count + 1);
            } 
        }
        return self::$treeList ;
    }
}


?>	