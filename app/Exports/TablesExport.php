<?php


namespace App\Exports;


use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithProperties;

class TablesExport implements FromCollection, WithProperties, WithHeadings
{
    public $tabel_name;

    function __construct($tabel_name) {
        $this->tabel_name = $tabel_name;
    }

    public function collection()
    {
        return DB::table($this->tabel_name)->get();
    }

    public function properties(): array
    {
        // TODO: Implement properties() method.
        return [];
    }

    public function headings(): array
    {
        $item = DB::table($this->tabel_name)->first();
        $array = json_decode(json_encode($item), true);
        return array_keys($array);
    }
}
