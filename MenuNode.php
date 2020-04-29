<?php


class MenuNode
{
    public $id, $data, $childMenuNodes, $parentNode;

    public function __construct($id, $data, $childMenuNodes, $parentNode)
    {
        $this->id = $id;
        $this->data = $data;
        $this->childMenuNodes = $childMenuNodes;
        $this->parentNode = $parentNode;


    }
    public function next($nextid){
        if ($nextid == 2){
            $data2 ="Gender".PHP_EOL
                ."1) M ".PHP_EOL
                ."2) F".PHP_EOL;
            $genderNode = new MenuNode(2,$data2, [], $this->getParentMenu() );
        }
        if ($nextid == 3){
            $data3 ="Age".PHP_EOL
                ."1) Below 18 ".PHP_EOL
                ."2) Above 18".PHP_EOL;
            $genderNode = new MenuNode(2,$data3, [], $this->getParentMenu() );
        }
    }

    public function getParentMenu(){
        return new $this->parentNode;
    }

}