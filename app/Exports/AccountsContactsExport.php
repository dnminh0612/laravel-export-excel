<?php
namespace App\Exports;

use App\Models\AccountContact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Botble\PredictionPackage\Models\PredictionPackage;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithProperties;

class AccountsContactsExport implements FromCollection, WithProperties, WithHeadings
{
    public function collection()
    {
        return AccountContact::all();
    }
    public function properties(): array
    {
        // TODO: Implement properties() method.
        return [];
    }
    public function headings(): array
    {
        $item = AccountContact::first();
        return array_keys($item->getAttributes());
    }
}
