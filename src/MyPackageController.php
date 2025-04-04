<?php

namespace Hello\MyPackage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyPackageController extends Controller
{

    public function add($a, $b)
    {
        $result = $a + $b;
        return view('myPackage::add', compact('result'));
    }

    public function subtract($a, $b)
    {
        $result = $a - $b;
        return view('myPackage::add', compact('result'));
    }

}
