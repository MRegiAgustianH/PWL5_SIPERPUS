<?php

namespace App\Imports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BooksImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Book([
            'title' => $row['title'],
            'author' => $row['author'],
            'year' => $row['year'],
            'publisher' => $row['publisher'],
            'city' => $row['city'],
            'cover' => $row['cover'],
            'bookshelf_id' => $row['bookshelf_id'],
        ]);
    }
}
