<?php

namespace App\Http\Controllers;

use App\Exports\AccountsContactsExport;
use App\Exports\AccountsExport;
use App\Exports\EmailAddressExport;
use App\Exports\LeadsExport;
use App\Exports\UsersExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function exportEmailAddress()
    {
        return Excel::download((new EmailAddressExport()), 'email-address-'.Carbon::now()->format('d-m-Y').'.xlsx');
    }

    public function exportAccount()
    {
        return Excel::download(new AccountsExport(), 'accounts-'.Carbon::now()->format('d-m-Y').'.xlsx');
    }

    public function exportAccountContact()
    {
        return Excel::download(new AccountsContactsExport(), 'accounts-contacts-'.Carbon::now()->format('d-m-Y').'.xlsx');
    }

    public function exportLead()
    {
        return Excel::download(new LeadsExport(), 'leads-'.Carbon::now()->format('d-m-Y').'.xlsx');
    }
}
