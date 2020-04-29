<?php
require_once ("menu_datas.php");
class MenuNode
{

    public $id, $data, $parentNode;

    public function __construct($id, $data,  $parentNode = null)
    {
        $this->id = $id;
        $this->data = $data;
        $this->parentNode = $parentNode;


    }
    public function next($nextid){
        if ($nextid == 2){
            $genderNode = new MenuNode(2,data2, $this->getParentMenu() );
            return $genderNode;
        }
        if ($nextid == 3){
            $ageNode = new MenuNode(2,data3, $this->getParentMenu() );
            return $ageNode;
        }
    }

    public function getParentMenu(){
        echo $this->parentNode;
        return $this->parentNode;
    }

}