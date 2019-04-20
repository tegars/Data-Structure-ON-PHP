<?php
/**
 * Created by PhpStorm.
 * User: TGR
 * Date: 4/20/2019
 * Time: 12:01 PM
 */

namespace dataStructure\StackAndQueue;

class siswa{
    public $nim;
    public $nama;
    public $alamat;
    public function __construct($nim, $nama, $alamat)
    {
        $this->nim= $nim;
        $this->nama= $nama;
        $this->alamat= $alamat;
    }
}
class stack
{
    public $listSiswa;
    public $top;
    public function __construct()
    {
        $this->listSiswa= [];
        $this->top=0;
    }

    public function push($objSiswa){
        $this->listSiswa[$this->top++]= $objSiswa;
    }
    public function pop(){
        $this->top--;
    }
    public function cekData(){
        for($a= 0; $a<$this->top; $a++) {
            echo $this->listSiswa[$a]->nim;
            echo $this->listSiswa[$a]->nama;
            echo $this->listSiswa[$a]->alamat;
            echo '<br/>';
        }
    }
}
class queue{
    public $listSiswa;
    public $top;
    public function __construct()
    {
        $this->listSiswa= [];
        $this->top=0;
    }

    public function push($objSiswa){
        $this->listSiswa[$this->top++]= $objSiswa;
    }
    public function pop(){
        $this->top--;
        for($a= 0; $a<$this->top; $a++){
            $this->listSiswa[$a]= $this->listSiswa[$a+1];
        }
    }
    public function cekData(){
        for($a= 0; $a<$this->top; $a++) {
            echo $this->listSiswa[$a]->nim;
            echo $this->listSiswa[$a]->nama;
            echo $this->listSiswa[$a]->alamat;
            echo '<br/>';
        }
    }
}


#01 STACK
$stack= new stack();
$stack->push(new siswa(3, "tono", "malang"));
$stack->push(new siswa(9, "toni", "sidoarjo"));
$stack->push(new siswa(11, "tonu", "surabaya"));
$stack->push(new siswa(18, "tino", "blitar"));
$stack->push(new siswa(32, "titi", "njombang"));
$stack->cekData();
echo '<hr/>';
$stack->pop();
$stack->pop();
$stack->cekData();
echo '<hr/>';
$stack->push(new siswa(32, "titi", "njombang"));
$stack->cekData();
echo '<hr/>';echo '<hr/>';


#02 QUEUE
$queue= new queue();
$queue->push(new siswa(3, "tono", "malang"));
$queue->push(new siswa(9, "toni", "sidoarjo"));
$queue->push(new siswa(11, "tonu", "surabaya"));
$queue->push(new siswa(18, "tino", "blitar"));
$queue->push(new siswa(32, "titi", "njombang"));
$queue->cekData();
echo '<hr/>';
$queue->pop();
$queue->pop();
$queue->cekData();
echo '<hr/>';
$queue->push(new siswa(32, "titi", "njombang"));
$queue->cekData();












