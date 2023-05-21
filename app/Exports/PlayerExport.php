<?php

namespace App\Exports;

use App\Models\Game;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlayerExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Game::all();
    }

    public function headings(): array{
        return ["No.", "Name", "E-mail", "User ID", "Prize", "Location", "E-mail Status", "Play Session"];
    }
}
