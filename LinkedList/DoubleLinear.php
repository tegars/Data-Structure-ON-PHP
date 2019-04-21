<?php
/**
 * Created by PhpStorm.
 * User: TGR
 * Date: 4/20/2019
 * Time: 5:57 PM
 */

namespace dataStructure\LinkedList;
class linkDL
{
    public $nama;
    public $next;
    public $pref;
    public function __construct($nama)
    {
        $this->nama= $nama;
    }
    public function displayNama(){
        echo $this->nama;
    }
}
class DoubleLinear
{
    public $first;
    public $last;
    public function __construct()
    {
        $this->first= null;
        $this->last= null;
    }
    public function insertFirst($nama){
        $obj= new linkDL($nama);
        if($this->first==null){
            $this->last= $obj;
        }else{
            $objnext= $this->first;
            $objnext->pref= $obj;
        }
        $obj->next= $this->first;
        $this->first= $obj;
    }
    public function insertLast($nama){
        $obj= new linkDL($nama);
        if($this->first==null){
            $this->first= $obj;
        }else{
            $this->last->next= $obj;
            $obj->pref= $this->last;
        }
        $this->last= $obj;
    }
    public function getData(){
        $current= $this->first;
        while($current!=null){
            $current->displayNama();
            $current= $current->next;
            echo '<br/>';
        }
    }
    public function getLink(){
        $current= $this->first;
        while($current!=null){
            //$current->displayNama();
            foreach ($current as $key=>$data){
                echo $key.' ='; var_dump($data);
                echo '<hr/>';
            }
            $current= $current->next;
            echo '<hr/>';
            echo '<hr/>';
            echo '<hr/>';
        }
    }
    public function deleteFirst(){
        $this->first= $this->first->next;
    }
    public function deleteLast(){
        $this->last->pref->next= null;
    }
}


$obj= new DoubleLinear();
$obj->insertFirst("tono");
$obj->insertFirst("toni");
$obj->insertFirst("titi");
$obj->getData();
echo '<hr/>';

$obj->insertLast("tatag");
$obj->insertLast("tino");
$obj->getData();
echo '<hr/>';

$obj->deleteFirst();
$obj->getData();
echo '<hr/>';

$obj->insertFirst("jono");
$obj->getData();
echo '<hr/>';

$obj->deleteLast();
$obj->getLink();
echo '<hr/>';

