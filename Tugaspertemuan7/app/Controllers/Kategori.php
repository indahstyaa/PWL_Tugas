<?php

namespace App\Controllers;

class Kategori extends BaseController
{

    public function index(){
        return view ('kategori');
    }

    public function k1(){
        return view ('K1');
    }
    public function k2(){
        return view ('k2');
    }
    public function k3(){
        return view ('k3');
    }
    public function k4(){
        return view ('k4');
    }
    public function k5(){
        return view ('k5');
    }
}
