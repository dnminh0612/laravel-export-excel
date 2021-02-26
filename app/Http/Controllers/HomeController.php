<?php

namespace App\Http\Controllers;

use App\Exports\AccountsExport;
use App\Exports\LeadsExport;
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

    public function exportAccount()
    {
        return Excel::download(new AccountsExport(), 'accounts.xlsx');
    }

    public function exportLead()
    {
        return Excel::download(new LeadsExport(), 'leads.xlsx');
    }
}
