<?php
namespace App\Exports;

use App\Models\EmailAddress;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithProperties;

class EmailAddressExport implements FromCollection, WithProperties, WithHeadings
{
    public function collection()
    {
        return DB::table('email_addresses')->get();
    }
    public function properties(): array
    {
        // TODO: Implement properties() method.
        return [];
    }
    public function headings(): array
    {
        $item = DB::table('email_addresses')->first();
        $array = json_decode(json_encode($item), true);
        return array_keys($array);
    }
}
