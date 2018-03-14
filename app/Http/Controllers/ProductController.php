<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	return view('admin.products.index'); //listado
    }

        public function create()
    {
    	return view('admin.products.create'); //formulario registro
    }

        public function store()
    {
    	 //registrar nuevo producto en bd
    }
}
