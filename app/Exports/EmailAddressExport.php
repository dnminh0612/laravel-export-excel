<?php
namespace App\Exports;

use App\Models\EmailAddress;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithProperties;

class EmailAddressExport implements FromCollection, WithProperties, WithHeadings
{
    public function collection()
    {
        return EmailAddress::all();
    }
    public function properties(): array
    {
        // TODO: Implement properties() method.
        return [];
    }
    public function headings(): array
    {
        $item = EmailAddress::first();
        return array_keys($item->getAttributes());
    }
}
