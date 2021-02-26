<?php
namespace App\Exports;

use App\Models\Account;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Botble\PredictionPackage\Models\PredictionPackage;

class AccountsExport implements FromCollection
{
    public function collection()
    {
        return Account::all();
    }
}
