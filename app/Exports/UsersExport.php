<?php
namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Botble\PredictionPackage\Models\PredictionPackage;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}
