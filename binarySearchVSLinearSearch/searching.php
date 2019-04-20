<?php
/**
 * Created by PhpStorm.
 * User: TGR
 * Date: 4/20/2019
 * Time: 10:00 AM
 */
//Linear Search VS Binary Search
namespace dataStructure\binarySearchVSLinearSearch;

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
class searching
{
    public $listSiswa;
    public function __construct()
    {
        $this->listSiswa= [];
    }
    public function addData(){
        array_push($this->listSiswa, new siswa(3, "tono", "malang"));
        array_push($this->listSiswa, new siswa(9, "toni", "sidoarjo"));
        array_push($this->listSiswa, new siswa(11, "tonu", "surabaya"));
        array_push($this->listSiswa, new siswa(18, "tino", "blitar"));
        array_push($this->listSiswa, new siswa(32, "titi", "njombang"));
    }
    public function printData(){
        foreach($this->listSiswa as $key=>$data):
            var_dump($data);
            echo $data->nama;
            echo '<br/>';
        endforeach;
    }
    public function linearSearch($nimDicari){
        foreach($this->listSiswa as $data):
            if($data->nim==$nimDicari){
                return $data;
            }
        endforeach;
        return null;
    }
    public function binarySearch($nimDicari){
        $min= 0;
        $max= count($this->listSiswa) - 1;
        while($min <= $max){
            $mid= floor((($min+$max)/2));
            //echo $this->listSiswa[$mid]->nim; echo '<br/>';
            if($nimDicari == $this->listSiswa[$mid]->nim){
                return $this->listSiswa[$mid];
            }else if($nimDicari < $this->listSiswa[$mid]->nim){
                $max= $mid-1;
            }else{
                $min= $mid+1;
            }
        }
        return null;
    }
}


#01 Linear Search
$a= new searching();
$a->addData();
$ab= $a->linearSearch(18);
if($ab!=null){
    echo $ab->nim.'<br/>';
    echo $ab->nama.'<br/>';
    echo $ab->alamat.'<br/>';
}else{
    echo 'Data Tidak ditemukan';
}
echo '<hr/>';


#02 Binary Search
$b= new Searching();
$b->addData();
$ba= $b->binarySearch(9);
if($ba!=null){
    echo $ba->nim.'<br/>';
    echo $ba->nama.'<br/>';
    echo $ba->alamat.'<br/>';
}else{
    echo 'Data Tidak Ditemukan';
}