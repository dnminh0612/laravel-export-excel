<?php
namespace App\Exports;

use App\Models\Account;
use Maatwebsite\Excel\Concerns\FromCollection;
use Botble\PredictionPackage\Models\PredictionPackage;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithProperties;

class AccountsExport implements FromCollection, WithProperties, WithHeadings
{
    public function collection()
    {
        return Account::all();
    }
    public function properties(): array
    {
        // TODO: Implement properties() method.
        return [];
    }
    public function headings(): array
    {
        $item = Account::first();
        return array_keys($item->getAttributes());
    }
}
