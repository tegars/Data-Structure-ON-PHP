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
    public $next;
    public function __construct($nama)
    {
        $this->nama= $nama;
    }
    public function displayNama(){
        echo $this->nama;
    }
}
class SingleLinear{
    public $first;
    public function __construct()
    {
        $this->first= null;
    }
    public function insert($nama){
        $obj= new linkSL($nama);
        $obj->next= $this->first;
        $this->first= $obj;
    }
    public function getData(){
        $current= $this->first;
        while($current!=null){
            $current->displayNama();
            $current= $current->next;
            echo '<br/>';
        }
    }
    public function deleteFirst(){
        $current= $this->first;
        $this->first= $current->next;
    }
}


$obj= new SingleLinear();
$obj->insert("tono");
$obj->insert("toni");
$obj->insert("titi");
$obj->getData();
echo '<hr/>';
$obj->deleteFirst();
$obj->getData();
echo '<hr/>';
$obj->deleteFirst();
$obj->getData();


