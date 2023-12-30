<?php

namespace App\Controllers;

class DataProduk extends BaseController
{
    public function index(): string
    {
        return view('data-produk');
    }
}
