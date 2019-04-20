<?php
/**
 * Created by PhpStorm.
 * User: TGR
 * Date: 4/20/2019
 * Time: 2:27 PM
 */

namespace dataStructure\LinkedList;


class linkSL
{
    public $nama;
    public $previous;
    public function __construct($nama)
    {
        $this->nama= $nama;
    }
    public function displayNama(){
        echo $this->nama;
    }
}
class SingleLinear{
    public $last;
    public function __construct()
    {
        $this->last= null;
    }
    public function insert($nama){
        $obj= new linkSL($nama);
        $obj->previous= $this->last;
        $this->last= $obj;
    }
    public function getData(){
        $current= $this->last;
        while($current!=null){
            $current->displayNama();
            $current= $current->previous;
            echo '<br/>';
        }
    }
    public function deleteLast(){
        $current= $this->last;
        $this->last= $current->previous;
    }
}


$obj= new SingleLinear();
$obj->insert("tono");
$obj->insert("toni");
$obj->insert("titi");
$obj->getData();
echo '<hr/>';
$obj->deleteLast();
$obj->getData();
echo '<hr/>';
$obj->deleteLast();
$obj->getData();


