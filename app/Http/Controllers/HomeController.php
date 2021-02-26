<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function exportUser()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }
}
