<?php
namespace App\Exports;

use App\Models\Account;
use App\Models\EmailAddress;
use App\Models\Lead;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Botble\PredictionPackage\Models\PredictionPackage;

class EmailAddressExport implements FromCollection
{
    public function collection()
    {
        return EmailAddress::all();
    }
}
