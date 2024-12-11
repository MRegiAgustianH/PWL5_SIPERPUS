<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BooksExport implements WithHeadings, ShouldAutoSize, FromArray
{
    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     return Book::all();
    // }
    public function array(): array
    {
        return Book::export();
    }
    public function headings(): array
    {
        return [
            'No',
            'Judul',
            'Penulis',
            'Tahun',
            'Penerbit',
            'Rak Buku',
        ];
    }
}
