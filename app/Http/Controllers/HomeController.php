<?php

namespace App\Http\Controllers;

use App\Exports\AccountsContactsExport;
use App\Exports\AccountsExport;
use App\Exports\EmailAddressExport;
use App\Exports\LeadsExport;
use App\Exports\TablesExport;
use App\Exports\UsersExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        $data['tables'] = array_map('reset', \DB::select('SHOW TABLES'));
        return view('home', $data);
    }

    public function export(Request $request)
    {
        if ($request->table_name) {
            $table_name = $request->table_name;
            return Excel::download((new TablesExport($table_name)), $table_name . '-' . Carbon::now()->format('d-m-Y h:i:s') . '.xlsx');
        } else {
            return redirect()->route('home');
        }
    }
}
