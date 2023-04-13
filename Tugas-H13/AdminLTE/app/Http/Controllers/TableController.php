<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //membuat function table dan datatable
    public function table()
    {
        return view('table');
    }

    public function datatables()
    {
        return view('datatables');
    }
}
