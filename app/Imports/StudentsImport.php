<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Student([
            'name'     => $row['name'],
            'email'    => $row['email'],
            'phone'    => $row['phone'],
            // Add other fields as necessary
        ]);
    }
}
