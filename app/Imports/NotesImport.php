<?php

namespace App\Imports;

use App\Note;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class NotesImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Note add protected $guarded = []; to Note entity to allow this import.
        $title = $row[3];
        $slug = str_slug($title, '-');
        return new Note([
          'title' => $row[3],
          'slug' => $slug,
          'user_id' => 1,
          'topic_id' => (int)$row[2],
          'description' => $row[4],
          'body'    => $row[6],
          'updated_at' => $row[8],
          'created_at' => $row[7],
        ]);
    }
    
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
}
